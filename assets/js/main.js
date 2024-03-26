(function() {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let header = select('#header')
        let offset = header.offsetHeight

        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos - offset,
            behavior: 'smooth'
        })
    }

    //Animation on scroll
    window.addEventListener('load', () => {
        AOS.init({
            duration: 500,
            easing: "ease-in-out",
            once: true,
            mirror: false
        });
    });

    //bg-color transition

    document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.getElementById("navbar");
        navbar.classList.remove("scrolled");
    
        window.onscroll = function() {
            var banner = document.getElementById("home");
            if (window.pageYOffset > banner.offsetTop) {
                document.getElementById("navbar").classList.add("scrolled");
            } else {
                document.getElementById("navbar").classList.remove("scrolled");
            }
        };
    });

    document.getElementById("myForm").addEventListener("submit", function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();
    
        // Show the modal
        var modal = new bootstrap.Modal(document.getElementById("resultModal"));
        modal.show();
    });

})()