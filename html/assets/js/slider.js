// Projects Slider Functionality
document.addEventListener('DOMContentLoaded', () => {
    // Initialize slider
    initProjectsSlider();

    // Initialize "View More" functionality
    initViewMoreButton();

    // Make sure all project links work properly
    initProjectLinks();
});

function initProjectsSlider() {
    const slider = document.querySelector('.projects-slider');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');
    const dots = document.querySelectorAll('.slider-dot');
    const pausePlayBtn = document.querySelector('.slider-pause-play');

    if (!slider) return;

    let currentSlide = 0;
    let slideWidth = 0;
    let slidesPerView = 3;
    let totalSlides = document.querySelectorAll('.slider-project-card').length;
    let autoSlideInterval;
    let isPlaying = true;

    // Auto slide function
    function startAutoSlide() {
        if (autoSlideInterval) clearInterval(autoSlideInterval);

        autoSlideInterval = setInterval(() => {
            let nextSlide = currentSlide + 1;

            // Loop back to first slide if at the end
            if (nextSlide > totalSlides - slidesPerView) {
                // Add a small delay when looping back to the first slide
                nextSlide = 0;
                slider.style.transition = 'none'; // Temporarily disable transition
                setTimeout(() => {
                    slider.style.transition = 'transform 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000)';
                    goToSlide(nextSlide);
                }, 50);
                return;
            }

            goToSlide(nextSlide);
        }, 4000); // Change slide every 4 seconds for a more dynamic feel
    }

    function stopAutoSlide() {
        if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
            autoSlideInterval = null;
        }
    }

    // Toggle auto slide
    function toggleAutoSlide() {
        if (isPlaying) {
            stopAutoSlide();
            if (pausePlayBtn) pausePlayBtn.innerHTML = '<i class="fas fa-play"></i>';
        } else {
            startAutoSlide();
            if (pausePlayBtn) pausePlayBtn.innerHTML = '<i class="fas fa-pause"></i>';
        }
        isPlaying = !isPlaying;
    }

    // Set slides per view based on screen width
    function setResponsiveView() {
        if (window.innerWidth < 768) {
            slidesPerView = 1;
        } else if (window.innerWidth < 992) {
            slidesPerView = 2;
        } else if (window.innerWidth < 1400) {
            slidesPerView = 3;
        } else {
            slidesPerView = 3; // Limited to 3 slides for better readability
        }

        // Calculate slide width
        slideWidth = slider.parentElement.offsetWidth / slidesPerView;

        // Add appropriate margins and update card sizing
        const projectCards = document.querySelectorAll('.slider-project-card');
        projectCards.forEach(card => {
            card.style.minWidth = `calc(${100 / slidesPerView}% - 30px)`; // Standard width calculation
            // Ensure consistent height across all devices
            card.style.height = '420px'; // Increased height for comprehensive display
            // Remove any overflow that might cause scrollbars
            card.style.overflow = 'hidden';

            // Ensure content area also doesn't have scrollbars
            const contentArea = card.querySelector('.project-content');
            if (contentArea) {
                contentArea.style.overflowY = 'hidden';

                // Ensure project description is properly displayed
                const description = contentArea.querySelector('p');
                if (description) {
                    // Limit description to 3 lines max
                    description.style.display = '-webkit-box';
                    description.style.webkitLineClamp = '3';
                    description.style.webkitBoxOrient = 'vertical';
                    description.style.overflow = 'hidden';
                    description.style.textOverflow = 'ellipsis';
                }

                // Ensure tech badges are displayed nicely
                const techBadges = contentArea.querySelector('.project-tech');
                if (techBadges) {
                    techBadges.style.display = 'flex';
                    techBadges.style.flexWrap = 'wrap';
                    techBadges.style.gap = '8px';
                    techBadges.style.marginTop = '10px';
                    techBadges.style.alignSelf = 'flex-end';
                    techBadges.style.marginTop = 'auto';

                    // Ensure each technology badge is styled properly
                    const badges = techBadges.querySelectorAll('span');
                    badges.forEach((badge, index) => {
                        badge.style.padding = '5px 10px';
                        badge.style.borderRadius = '4px';
                        badge.style.fontSize = '0.8rem';
                        badge.style.fontWeight = '600';
                        badge.style.textTransform = 'uppercase';
                        badge.style.letterSpacing = '0.5px';
                    });
                }
            }
        });

        // Reset position
        goToSlide(currentSlide);
    }

    // Go to a specific slide
    function goToSlide(slideIndex) {
        // Reset auto slide timer when manually changing slides
        if (isPlaying) {
            stopAutoSlide();
            startAutoSlide();
        }

        if (slideIndex < 0) {
            slideIndex = totalSlides - slidesPerView;
        } else if (slideIndex > totalSlides - slidesPerView) {
            slideIndex = 0;
        }

        currentSlide = slideIndex;
        const transformValue = -slideIndex * slideWidth;
        slider.style.transform = `translateX(${transformValue}px)`;

        // Update dots
        updateDots();
    }

    // Update dots
    function updateDots() {
        dots.forEach((dot, index) => {
            if (index === Math.min(currentSlide, dots.length - 1)) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    // Event listeners
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            goToSlide(currentSlide - 1);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            goToSlide(currentSlide + 1);
        });
    }

    if (pausePlayBtn) {
        pausePlayBtn.addEventListener('click', toggleAutoSlide);
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Handle touch events for mobile swipe
    let touchStartX = 0;
    let touchEndX = 0;

    slider.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        // Pause auto slide during swipe
        if (isPlaying) stopAutoSlide();
    });

    slider.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
        // Resume auto slide after swipe if it was playing
        if (isPlaying) startAutoSlide();
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) {
            // Swipe left
            goToSlide(currentSlide + 1);
        } else if (touchEndX > touchStartX + swipeThreshold) {
            // Swipe right
            goToSlide(currentSlide - 1);
        }
    }

    // Pause on hover
    slider.addEventListener('mouseenter', () => {
        if (isPlaying) stopAutoSlide();
    });

    slider.addEventListener('mouseleave', () => {
        if (isPlaying) startAutoSlide();
    });

    // Initial setup
    setResponsiveView();
    startAutoSlide();

    // Handle window resize
    window.addEventListener('resize', setResponsiveView);

    // Handle page visibility changes
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAutoSlide();
        } else if (isPlaying) {
            startAutoSlide();
        }
    });
}

function initViewMoreButton() {
    const viewMoreBtn = document.querySelector('.view-more-btn');
    const projectsGrid = document.querySelector('.projects-grid');

    if (!viewMoreBtn || !projectsGrid) return;

    viewMoreBtn.addEventListener('click', () => {
        projectsGrid.classList.toggle('hidden');
        projectsGrid.classList.toggle('visible');

        if (projectsGrid.classList.contains('visible')) {
            viewMoreBtn.textContent = document.documentElement.lang === 'fr' ? 'Voir moins' : 
                                      document.documentElement.lang === 'es' ? 'Ver menos' : 'View Less';

            // Scroll to the projects grid
            projectsGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
            viewMoreBtn.textContent = document.documentElement.lang === 'fr' ? 'Voir plus' : 
                                      document.documentElement.lang === 'es' ? 'Ver más' : 'View More';
        }
    });

    // Initialize: Hide the grid and set correct button text
    projectsGrid.classList.add('hidden');
    viewMoreBtn.textContent = document.documentElement.lang === 'fr' ? 'Voir plus' : 
                            document.documentElement.lang === 'es' ? 'Ver más' : 'View More';
}

function initProjectLinks() {
    // Make entire project cards clickable
    const projectCards = document.querySelectorAll('.slider-project-card, .project-card');

    projectCards.forEach(card => {
        // Find the link within this card
        const projectLink = card.querySelector('.project-links a');

        if (projectLink) {
            // Make the entire card clickable except for the direct button area
            card.style.cursor = 'pointer';

            card.addEventListener('click', function(e) {
                // Don't trigger if clicking on a specific link/button
                if (e.target.tagName === 'A' || e.target.tagName === 'BUTTON' || 
                    e.target.closest('a') || e.target.closest('button')) {
                    return;
                }

                const url = projectLink.getAttribute('href');
                window.open(url, '_blank');
            });
        }
    });

    // Enhance all project links with improved styling and tracking
    const projectLinks = document.querySelectorAll('.project-links a');

    projectLinks.forEach(link => {
        // Make sure all links open in a new tab
        link.setAttribute('target', '_blank');
        link.setAttribute('rel', 'noopener noreferrer');

        // Add click event handler for tracking
        link.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent triggering the card click event

            const url = this.getAttribute('href');
            const projectTitle = this.closest('.project-content').querySelector('.project-title').textContent;

            // Log click for analytics if needed
            console.log(`Clicked project: ${projectTitle} - ${url}`);
        });
    });

    projectLinks.forEach(link => {
        // Make sure the link has a valid href attribute
        if (link.getAttribute('href') === '#' || !link.getAttribute('href')) {
            console.warn('Project link has no valid URL:', link);
            return;
        }

        // Ensure the target is set to _blank to open in new tab
        link.setAttribute('target', '_blank');
        link.setAttribute('rel', 'noopener noreferrer'); // Security best practice

        // Add click event handler
        link.addEventListener('click', function(e) {
            const url = this.getAttribute('href');

            // Check if URL is valid
            if (!url || url === '#') {
                e.preventDefault();
                console.warn('Prevented navigation to invalid URL');
                return;
            }

            // Add analytics tracking if needed
            if (typeof gtag === 'function') {
                gtag('event', 'click', {
                    'event_category': 'Projects',
                    'event_label': url
                });
            }

            // For debugging in development
            console.log('Navigating to:', url);
        });
    });
}
