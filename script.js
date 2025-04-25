$(document).ready(function() {

    document.getElementById('mobile-menu-button').addEventListener('click', () => {
        const button = document.getElementById('mobile-menu-button');
        button.classList.toggle('active');
        const icon = button.querySelector('i');
		const menu = document.getElementById('mobile-menu');
		menu.classList.toggle('hidden');

        if (icon.classList.contains('fa-bars')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
	});

    const gsReveal = $(".gs_reveal");
    if (gsReveal.length > 0) {
        function animateFrom(elem, direction) {
            direction = direction || 1;
            var x = 0, y = direction * 100;
            if (elem.classList.contains("gs_reveal_fromLeft")) {
                x = -100;
                y = 0;
            } else if (elem.classList.contains("gs_reveal_fromRight")) {
                x = 100;
                y = 0;
            }
            elem.style.transform = "translate(" + x + "px, " + y + "px)";
            elem.style.opacity = "0";
            gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
            duration: 1.25, 
            x: 0,
            y: 0, 
            autoAlpha: 1, 
            ease: "expo", 
            overwrite: "auto"
            });
        }
        function hide(elem) {
            gsap.set(elem, {autoAlpha: 0});
        }
        gsap.registerPlugin(ScrollTrigger);
        gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
            hide(elem); // assure that the element is hidden when scrolled into view
            ScrollTrigger.create({
                trigger: elem,
                markers: true,
                onEnter: function() { animateFrom(elem) }, 
                onEnterBack: function() { animateFrom(elem, -1) },
                onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
            });
        });
    }

    function initializeMarquee(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            const root = document.documentElement;
            const marqueeContent = section.querySelector("ul.marquee-content");
            const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
            root.style.setProperty("--marquee-elements", marqueeContent.children.length);
    
            for (let i = 0; i < marqueeElementsDisplayed; i++) {
                marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
            }
        }
    }
    initializeMarquee("section-trusted-rtl");
    initializeMarquee("section-trusted-ltr");

    var swiperDefault = new Swiper(".default-carousel", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".iykra-button-next",
            prevEl: ".iykra-button-prev",
        },
    });

    var swiperEvent = new Swiper(".default-carousel-event", {
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        slideToClickedSlide: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiperEventHistory = new Swiper(".default-carousel-eventHistory", {
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        slideToClickedSlide: false,
    });

    var swiperDefaultIndividual = new Swiper(".default-carousel-individual", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        slideToClickedSlide: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiperCentered = new Swiper(".centered-slide-carousel", {
        centeredSlides: true,
        paginationClickable: false,
        loop: true,
        slideToClickedSlide: false,
        navigation: {
            nextEl: ".iykra-button-next.slide-gallery",
            prevEl: ".iykra-button-prev.slide-gallery",
        },
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            990: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    });

    
    var swiperCenteredFellowship = new Swiper(".centered-slide-carousel-fellowship", {
        centeredSlides: true,
        loop: true,
        slideToClickedSlide: true,
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 120
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 80
            },
            990: {
                slidesPerView: 1,
                spaceBetween: 40
            }
        }
    });

    var swiperCenteredUseCase= new Swiper(".centered-slide-carousel-use-case", {
        centeredSlides: true,
        loop: true,
        slideToClickedSlide: true,
        mousewheel: true,
        direction: 'horizontal',
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    let navbarPosition = "absolute";
    const adminBar = document.getElementById('wpadminbar');
    let adminBarTop = 0;
	let navbarTop = 0;
    if (adminBar) {
        adminBarTop = adminBar.offsetHeight;
    }
	let lastScrollPosition = 0;
	let changedPosition = false;
	let supportPageOffset = window.pageYOffset !== undefined;
    const btnNavGroup = document.getElementById("btn-nav-group");
    let btnNavGroupOffsetTop = 0;
    if (btnNavGroup) {
        btnNavGroupOffsetTop = btnNavGroup.offsetTop;
    }

    function onScrollNavbar() {
		const navbar = document.querySelector("nav");
		const currentScrollPosition = supportPageOffset
		? window.pageYOffset
		: document.documentElement.scrollTop;
		if (currentScrollPosition <= 0) {
			if (navbarPosition !== "absolute") {
				changedPosition = true;
			}
			else {
				changedPosition = false;
			}
			navbarPosition = "absolute";
			navbarTop = 0 + adminBarTop;
			lastScrollPosition = 0;
		}
		else {
			if (currentScrollPosition > lastScrollPosition) {
				if (navbarPosition !== "absolute") {
					changedPosition = true;
				}
				else {
					changedPosition = false;
				}
				navbarPosition = "absolute";
				let {
					top, height }
				= navbar.getBoundingClientRect();
				if (top < -height) {
					top = -height;
				}
				navbarTop = currentScrollPosition + top + adminBarTop;
			}
			else if (currentScrollPosition < lastScrollPosition) {
				const {
					top }
				= navbar.getBoundingClientRect();
				if (top >= 0) {
					navbarTop = 0 + adminBarTop;
					if (navbarPosition !== "fixed") {
						changedPosition = true;
					}
					else {
						changedPosition = false;
					}
					navbarPosition = "fixed";
				} else {
					navbarPosition = "fixed";
				}
			}
			lastScrollPosition = currentScrollPosition;

            // Setup button navigation group
            if (btnNavGroup) {
                const navbarHeight = navbar.offsetHeight;
                let btnNavGroupTop = 0;
                if (navbarTop === 0) {
                    btnNavGroupTop = navbarHeight + adminBarTop;
                }
                
                if (currentScrollPosition + navbarHeight >= btnNavGroupOffsetTop) {
                    btnNavGroup.style.position = "fixed";
                } else {
                    btnNavGroup.style.position = "static";
                }
                btnNavGroup.style.top = `${btnNavGroupTop}px`; // Position it below the navbar
                btnNavGroup.style.width = "100%";
            }

		}
        
		// navbar.style = `width: 100%; position: ${navbarPosition}; top: ${navbarTop}px; transition: ${changedPosition ? "none" : "200ms linear"}`;
		navbar.style = `width: 100%; position: ${navbarPosition}; top: ${adminBarTop}px;`;


	}

	window.addEventListener("scroll", onScrollNavbar, {
		passive: true 
	});

	onScrollNavbar();



    const pullUpButton = document.getElementById('pull-up');
    if (pullUpButton) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                pullUpButton.classList.add('show');
                pullUpButton.classList.remove('hide');
            } else {
                pullUpButton.classList.add('hide');
                pullUpButton.classList.remove('show');
            }
        });
        
        pullUpButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("a[href^='#']");
    const navLinks = document.querySelectorAll(".btn-navigation-transparent");
    
    if (navLinks.length > 0) {
        const observerOptions = {
            root: null,
            threshold: 0.5,
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                const id = entry.target.getAttribute("id");
                if (entry.isIntersecting) {
                    navLinks.forEach((link) => link.classList.remove("active"));

                    const activeLink = document.querySelector(`a[href="#${id}"]`);
                    if (activeLink) {
                        activeLink.classList.add("active");
                    }
                }
            });
        }, observerOptions);

        sections.forEach((link) => {
            const sectionId = link.getAttribute("href").substring(1);
            if (sectionId) {
                const section = document.getElementById(sectionId);
                if (section) observer.observe(section);
            }
        });
    }
});

// layouting the margin component
document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('nav');
    const main = document.querySelector('main');
    const adminBar = document.getElementById('wpadminbar');
  
    if (header && main) {
        const updateMainOffset = () => {
            const headerHeight = header.offsetHeight;
            main.style.marginTop = `${headerHeight}px`;
        };
  
        updateMainOffset();
        window.addEventListener('resize', updateMainOffset);
    }

    if (adminBar) {
        const updateAdminBarOffset = () => {
            const adminBarHeight = adminBar.offsetHeight;
            header.style.marginTop = `${adminBarHeight}px`;
        };
  
        updateAdminBarOffset();
        window.addEventListener('resize', updateAdminBarOffset);

    }
});

document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.btn-tab');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            
            // Remove active state from all buttons and hide all contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.add('hidden'));

            // Add active state to the clicked button and show the corresponding content
            button.classList.add('active');
            const target = button.getAttribute('data-target');
            document.getElementById(target).classList.remove('hidden');
        });
    });

    // Activate the first tab by default
    if (tabButtons.length > 0) {
        tabButtons[0].click();
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const implementCards = document.querySelectorAll('.iykra-implement-card');
    const implementContents = document.querySelectorAll('.iykra-implement-content');
    const implementStatus = document.querySelectorAll('.iykra-implement-status');
    const implementTitles = document.querySelectorAll('.transform-rotate-90');

    implementCards.forEach((button, index) => {
        button.addEventListener('click', () => {
            implementCards.forEach(btn => {
                btn.classList.remove('active', 'col-span-3');
            });
            implementStatus.forEach(status => {
                status.classList.remove('active');
            });
            implementTitles.forEach(title => {
                title.classList.add('active');
            });
            implementContents.forEach(content => {
                content.classList.add('hidden');
            });

            button.classList.add('active', 'col-span-3');
            if (implementStatus[index]) {
                implementStatus[index].classList.add('active');
            }
            if (implementTitles[index]) {
                implementTitles[index].classList.remove('active');
            }
            if (implementContents[index]) {
                implementContents[index].classList.remove('hidden');
            }
        });
    });

    if (implementCards.length > 0) {
        implementCards[0].click();
    }
});



// Event
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-event");
    if (searchInput) {
        searchInput.addEventListener("input", filterEvents);
        updateMonthButtons(new Date().getMonth());
    }
});

const months = [
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
];

let currentMonthIndex = new Date().getMonth();

function updateMonthButtons(newMonthIndex) {
    currentMonthIndex = newMonthIndex;
    const buttons = document.querySelectorAll("#month-container button");
    buttons.forEach((btn) => btn.classList.add("opacity-0", "-translate-y-2"));

    setTimeout(() => {
        buttons[0].textContent = months[(newMonthIndex - 1 + 12) % 12];
        buttons[1].textContent = months[newMonthIndex];
        buttons[2].textContent = months[(newMonthIndex + 1) % 12];

        buttons.forEach((btn) => {
            btn.classList.remove("opacity-0", "-translate-y-2");
            btn.classList.add("opacity-100", "translate-y-0");
        });

        buttons.forEach((btn) => btn.classList.replace("btn-primary", "btn-semiblack"));
        buttons[1].classList.replace("btn-semiblack", "btn-primary");

        buttons[0].onclick = () => updateMonthButtons((newMonthIndex - 1 + 12) % 12);
        buttons[1].onclick = () => updateMonthButtons(newMonthIndex);
        buttons[2].onclick = () => updateMonthButtons((newMonthIndex + 1) % 12);

        filterEvents();
    }, 150);
}

function filterEvents() {
    const searchQuery = document.getElementById("search-event").value.trim().toLowerCase();
    const eventCards = document.querySelectorAll(".event-card");
    const eventEmpty = document.querySelector(".event-empty-card");

    eventCards.forEach((card) => {
        const eventMonth = card.getAttribute("data-month");
        const eventMonths = eventMonth.split('-');
        let eMonths = [];
        for (var i=0; i<eventMonths.length; i++) {
            eMonths.push(parseInt(eventMonths[i]));
        }
        const eventName = card.getAttribute("name").toLowerCase();
        const matchesSearch = searchQuery !== "" && eventName.includes(searchQuery);
        const matchesMonth = searchQuery === "" && eMonths.includes(currentMonthIndex + 1);


        if (matchesSearch || matchesMonth) {
            card.classList.remove("opacity-0", "-translate-y-2", "scale-95", "hidden");
            card.classList.add("opacity-100", "translate-y-0", "scale-100");

            eventEmpty.classList.remove("opacity-100", "translate-y-0", "scale-100");
            eventEmpty.classList.add("opacity-0", "-translate-y-2", "scale-95");
            setTimeout(() => eventEmpty.classList.add("hidden"), 50);
        } else {            
            card.classList.remove("opacity-100", "translate-y-0", "scale-100");
            card.classList.add("opacity-0", "-translate-y-2", "scale-95");

            eventEmpty.classList.remove("opacity-0", "-translate-y-2", "scale-95", "hidden");
            eventEmpty.classList.add("opacity-100", "translate-y-0", "scale-100");
            setTimeout(() => card.classList.add("hidden"), 300);
        }
    });
}

// Syllabus AI Fellowship
document.addEventListener("DOMContentLoaded", function () {
    const syllabusItems = document.querySelectorAll(".syllabus, .syllabus-mini");
    const syllabusCards = document.querySelectorAll(".syllabus-card");

    const handleClick = (item) => {
        syllabusItems.forEach(syl => syl.classList.remove("active"));
        syllabusCards.forEach(card => card.classList.remove("active"));
        item.classList.add("active");
        
        const targetId = item.id;
        const targetCard = document.querySelector(`[data-target='${targetId}']`);
        
        if (targetCard) {
            targetCard.classList.add("active");
        }

        if (item.classList.contains("syllabus")) {
            const miniItem = document.querySelector(`.syllabus-mini#${item.id}`);
            if (miniItem) {
                miniItem.classList.add("active");
            }
        }

        if (item.classList.contains("syllabus-mini")) {
            const fullItem = document.querySelector(`.syllabus#${item.id.replace('-mini', '')}`);
            if (fullItem) {
                fullItem.classList.add("active");
            }
        }
    };

    syllabusItems.forEach(item => {
        item.addEventListener("click", function () {
            handleClick(this);
        });
    });
});



// FAQ
document.addEventListener("DOMContentLoaded", function () {
    const toggleIcons = document.querySelectorAll('.toggle-icon');
    
    toggleIcons.forEach(icon => {
        icon.addEventListener('click', function() {
            const targetId = icon.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);
            
            targetContent.classList.toggle('hidden');
            
            if (targetContent.classList.contains('hidden')) {
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            } else {
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    
    var swiper = new Swiper('.mySwiper', {
        direction: 'vertical',  // Vertical scrolling
        loop: true,             // Enable looping
        spaceBetween: 30,       // Space between slides
        mousewheel: true,       // Enable mouse wheel scroll
        pagination: {
            el: '.swiper-pagination',  // Pagination element
            clickable: true,            // Allow pagination click
        },
        on: {
            slideChangeTransitionStart: function() {
                const activeSlide = document.querySelector('.swiper-slide-active .timeline-content');
                // Add animation on slide change
                activeSlide.style.transform = 'scale(1.05)';
            },
            slideChangeTransitionEnd: function() {
                const activeSlide = document.querySelector('.swiper-slide-active .timeline-content');
                // Reset scale after transition
                activeSlide.style.transform = 'scale(1)';
            }
        }
    });

  });
  