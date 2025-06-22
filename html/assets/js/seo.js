// SEO Optimizations
document.addEventListener('DOMContentLoaded', () => {
    // Initialize structured data
    initStructuredData();

    // Add meta description if not present
    addMetaDescriptionIfNeeded();

    // Optimize image alt texts
    optimizeImageAltTexts();
});

function initStructuredData() {
    // Create structured data for person/portfolio
    const structuredData = {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": document.querySelector('h1')?.textContent || 'Portfolio Owner',
        "url": window.location.href,
        "jobTitle": document.querySelector('.subtitle')?.textContent || 'Web Developer',
        "knowsAbout": Array.from(document.querySelectorAll('.skills span')).map(skill => skill.textContent),
        "workExample": Array.from(document.querySelectorAll('.project-title')).map(project => ({
            "@type": "CreativeWork",
            "name": project.textContent
        }))
    };

    // Add structured data to page
    const script = document.createElement('script');
    script.type = 'application/ld+json';
    script.textContent = JSON.stringify(structuredData);
    document.head.appendChild(script);
}

function addMetaDescriptionIfNeeded() {
    // Check if meta description exists
    let metaDescription = document.querySelector('meta[name="description"]');

    if (!metaDescription) {
        // Create meta description from content
        metaDescription = document.createElement('meta');
        metaDescription.name = 'description';

        // Try to create a meaningful description
        const name = document.querySelector('h1')?.textContent || '';
        const role = document.querySelector('.subtitle')?.textContent || '';
        const skills = Array.from(document.querySelectorAll('.skills span')).slice(0, 5).map(skill => skill.textContent).join(', ');

        metaDescription.content = `${name} - ${role}. Professional portfolio showcasing expertise in ${skills} and more. View featured projects and contact information.`;
        document.head.appendChild(metaDescription);
    }

    // Add viewport meta if not present
    if (!document.querySelector('meta[name="viewport"]')) {
        const viewport = document.createElement('meta');
        viewport.name = 'viewport';
        viewport.content = 'width=device-width, initial-scale=1.0';
        document.head.appendChild(viewport);
    }

    // Add canonical URL
    if (!document.querySelector('link[rel="canonical"]')) {
        const canonical = document.createElement('link');
        canonical.rel = 'canonical';
        canonical.href = window.location.href.split('?')[0];
        document.head.appendChild(canonical);
    }
}

function optimizeImageAltTexts() {
    // Find all images without alt text
    const images = document.querySelectorAll('img:not([alt]), img[alt=""]');

    images.forEach(img => {
        // Try to find contextual information for the image
        const parentCard = img.closest('.project-card, .slider-project-card');
        if (parentCard) {
            const projectTitle = parentCard.querySelector('.project-title')?.textContent || 'Project';
            img.alt = `${projectTitle} - Project Screenshot`;
        } else {
            // Generic alt text based on src
            const fileName = img.src.split('/').pop().split('.')[0];
            img.alt = fileName.replace(/[-_]/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
        }
    });
}
