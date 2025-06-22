// Project Card Enhancements
document.addEventListener('DOMContentLoaded', () => {
    enhanceProjectCards();
    addLiveButtons();
    styleTechnologyBadges();
});

function enhanceProjectCards() {
    // Get all project cards
    const projectCards = document.querySelectorAll('.slider-project-card, .project-card');

    projectCards.forEach(card => {
        // Ensure proper height and content display
        if (card.classList.contains('slider-project-card')) {
            card.style.height = '420px';
        } else {
            card.style.height = '420px';
        }

        // Ensure content area has proper styling
        const contentArea = card.querySelector('.project-content');
        if (contentArea) {
            contentArea.style.padding = '18px';
            contentArea.style.display = 'flex';
            contentArea.style.flexDirection = 'column';
            contentArea.style.justifyContent = 'space-between';
        }

        // Ensure project description is limited to 3 lines
        const description = card.querySelector('.project-content p');
        if (description) {
            description.style.display = '-webkit-box';
            description.style.webkitLineClamp = '3';
            description.style.webkitBoxOrient = 'vertical';
            description.style.overflow = 'hidden';
            description.style.textOverflow = 'ellipsis';
            description.style.marginBottom = '15px';
            description.style.lineHeight = '1.6';
        }
    });
}

function addLiveButtons() {
    // Get all project cards
    const projectCards = document.querySelectorAll('.slider-project-card, .project-card');

    projectCards.forEach(card => {
        // Find the project link
        const projectLink = card.querySelector('.project-links a');
        const projectContent = card.querySelector('.project-content');

        if (projectLink && projectContent) {
            // Create live view button if it doesn't exist
            if (!projectContent.querySelector('.project-live-btn')) {
                const liveBtn = document.createElement('a');
                liveBtn.href = projectLink.href;
                liveBtn.target = '_blank';
                liveBtn.rel = 'noopener noreferrer';
                liveBtn.className = 'project-live-btn';
                liveBtn.innerHTML = '<i class="fas fa-external-link-alt"></i> Live View';

                // Add event listeners
                liveBtn.addEventListener('click', (e) => {
                    e.stopPropagation(); // Prevent card click from triggering
                });

                // Add to content area at the end
                projectContent.appendChild(liveBtn);
            }
        }
    });
}

function styleTechnologyBadges() {
    // Get all technology badges
    const techBadges = document.querySelectorAll('.project-tech span');

    techBadges.forEach(badge => {
        const technology = badge.textContent.toLowerCase().trim();

        // Add specific class based on technology name
        if (technology.includes('laravel')) {
            badge.classList.add('laravel');
        } else if (technology.includes('bootstrap')) {
            badge.classList.add('bootstrap');
        } else if (technology.includes('mysql')) {
            badge.classList.add('mysql');
        } else if (technology.includes('vue')) {
            badge.classList.add('vue');
        } else if (technology.includes('react')) {
            badge.classList.add('react');
        } else if (technology.includes('php')) {
            badge.classList.add('php');
        } else if (technology.includes('javascript')) {
            badge.classList.add('javascript');
        } else if (technology.includes('html')) {
            badge.classList.add('html');
        } else if (technology.includes('css')) {
            badge.classList.add('css');
        }

        // Set standard height and alignment
        badge.style.height = '26px';
        badge.style.display = 'inline-flex';
        badge.style.alignItems = 'center';
        badge.style.justifyContent = 'center';
    });
}
