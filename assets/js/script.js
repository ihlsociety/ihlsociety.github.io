// Function to handle page switching
function showPage(pageId) {
    // 1. Hide all page content sections
    const pages = document.querySelectorAll('.page-content');
    pages.forEach(page => {
        page.classList.remove('active');
    });

    // 2. Show the selected page content
    const selectedPage = document.getElementById(pageId);
    if (selectedPage) {
        selectedPage.classList.add('active');
    }

    // 3. Update Navigation Active State
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.classList.remove('active');
        // Check if the onclick attribute contains the current pageId
        if(link.getAttribute('onclick').includes(pageId)) {
            link.classList.add('active');
        }
    });

    // 4. Close mobile menu if open
    const nav = document.getElementById('navLinks');
    if (nav.classList.contains('nav-active')) {
        nav.classList.remove('nav-active');
    }
    
    // 5. Scroll to content start for better UX
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Function to toggle mobile menu
function toggleMenu() {
    const nav = document.getElementById('navLinks');
    nav.classList.toggle('nav-active');
}