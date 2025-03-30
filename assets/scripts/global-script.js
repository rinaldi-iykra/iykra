$(window).on('load', function() {
    var delayInMilliseconds = 500;
    setTimeout(function() {
        $('.pageloader').slideUp(500, function() {
            $(this).remove(); // Remove from DOM after animation
        });
        $('body.page-template').css('overflow', 'auto');
    }, delayInMilliseconds);
});

document.addEventListener("DOMContentLoaded", () => {
    let section = document.getElementById('section-dot'),
        title = document.getElementById('content-dot');

    if (title && section) {
        let mark = title.querySelector("span"),
        dot = document.querySelector(".dot");
        
        gsap.set(dot, {
            width: "142vmax", // ensures it fills every part of the screen. 
            height: "142vmax",
            xPercent: -50, // center the dot in the section area
            yPercent: -50,
            top: "50%",
            left: "50%"
        });
    
        let tl1 = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top top",
                end: "bottom top",
                markers: true,
                scrub: 1.5, 
                pin: section,
                pinSpacing: true,
                invalidateOnRefresh: true,
            },	
            defaults: { ease: "none" }
        });
    
        tl1
        .to(title, { opacity: 1 })
        .fromTo(dot, {
            scale: 0,
            x: () => {
                let markBounds = mark.getBoundingClientRect(),
                    px = markBounds.left + markBounds.width * 0.54; // dot is about 54% from the left of the bounds of the character
                return px - section.getBoundingClientRect().width / 2;
            },
            y: () => {
                let markBounds = mark.getBoundingClientRect(),
                    py = markBounds.top + markBounds.height * 0.73; // dot is about 73% from the top of the bounds of the character
                return py - section.getBoundingClientRect().height / 2;
            }
        }, { 
            x: 0,
            y: 0,
            ease: "power3.in",
            scale: 1
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);
    gsap.set(".panel", { zIndex: (i, target, targets) => targets.length - i });
    var images = gsap.utils.toArray('.panel:not(._end)');
    
    images.forEach((image, i) => {
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: "section.use-case",
                start: () => "top -" + (window.innerHeight*(i+0.5)),
                end: () => "+=" + window.innerHeight,
                scrub: true,
                toggleActions: "play none reverse none",
                invalidateOnRefresh: true,     
            }
        });
        tl.to(image, { height: 0 });
    });

    gsap.set(".panel-text", { zIndex: (i, target, targets) => targets.length - i });
    var texts = gsap.utils.toArray('.panel-text');
    texts.forEach((text, i) => {
        var tl = gsap.timeline({
            scrollTrigger: {
            trigger: "section.use-case",
            start: () => "top -" + (window.innerHeight*i),
            end: () => "+=" + window.innerHeight,
            scrub: true,
            toggleActions: "play none reverse none",
            invalidateOnRefresh: true,     
            }
        });
        tl.to(text, { duration: 0.33, opacity: 1, y:"0%" }).to(text, { duration: 0.33, opacity: 0, y:"0%" }, 0.66);
    });

    ScrollTrigger.create({
        trigger: "section.use-case",
        scrub: true,
        markers: true,
        pin: true,
        start: () => "top top",
        end: () => "+=" + ((images.length + 1) * window.innerHeight),
        invalidateOnRefresh: true,
    });
});
