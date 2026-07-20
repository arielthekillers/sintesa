document.addEventListener('DOMContentLoaded', () => {
    // Color Mode (Dark/Light) logic
    const htmlElement = document.documentElement;
    let preference = window.localStorage.getItem("color-mode") || "system";
    
    const icons = {
        system: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path></svg>`,
        light: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"></path></svg>`,
        dark: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"></path></svg>`
    };

    let themeDropdown = document.getElementById('theme-dropdown');
    let themeButton = document.getElementById('theme-dropdown-btn');

    function getColorScheme() {
        if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
            return "dark";
        }
        return "light";
    }

    function applyColorScheme(scheme) {
        let activeScheme = scheme;
        if (activeScheme === "system") {
            activeScheme = getColorScheme();
        }
        if (activeScheme === "dark") {
            htmlElement.classList.add("dark");
        } else {
            htmlElement.classList.remove("dark");
        }

        // Update Button Icon
        if (themeButton && icons[scheme]) {
            themeButton.innerHTML = `<span><span>${icons[scheme]}</span></span>`;
        }
    }

    applyColorScheme(preference);

    window.toggleColorMode = function(newScheme) {
        window.localStorage.setItem("color-mode", newScheme);
        applyColorScheme(newScheme);
    };

    if (themeButton && themeDropdown) {
        // Dropdown toggle
        themeButton.addEventListener('click', (e) => {
            e.stopPropagation();
            if (themeDropdown.style.display === 'none' || themeDropdown.style.display === '') {
                themeDropdown.style.display = 'block';
            } else {
                themeDropdown.style.display = 'none';
            }
        });

        // Close when clicking outside
        document.addEventListener('click', (e) => {
            if (!themeDropdown.contains(e.target) && e.target !== themeButton && !themeButton.contains(e.target)) {
                themeDropdown.style.display = 'none';
            }
        });
    }

    // Attach click events to the dropdown options if not using onclick in HTML
    const listItems = document.querySelectorAll('li');
    listItems.forEach(li => {
        const text = li.textContent.trim().toLowerCase();
        if (['system', 'light', 'dark'].includes(text) && li.querySelector('svg')) {
            li.addEventListener('click', () => {
                window.toggleColorMode(text);
                if (themeDropdown) {
                    themeDropdown.style.display = 'none';
                }
            });
        }
    });

    // Mobile Navigation Toggle
    const mobileNavToggle = document.getElementById('mobile-nav-toggle');
    const mobileNavMenu = document.getElementById('mobile-nav-menu');
    const navLine1 = document.getElementById('nav-line-1');
    const navLine2 = document.getElementById('nav-line-2');
    const navLine3 = document.getElementById('nav-line-3');

    let isNavOpen = false;

    if (mobileNavToggle && mobileNavMenu) {
        mobileNavToggle.addEventListener('click', () => {
            isNavOpen = !isNavOpen;
            
            if (isNavOpen) {
                // Show menu
                mobileNavMenu.classList.remove('invisible', 'opacity-40', 'translate-y-6');
                mobileNavMenu.classList.add('!visible', '!opacity-100', '!translate-y-0');
                
                // Animate hamburger to X
                navLine1.classList.remove('scale-x-50');
                navLine1.classList.add('rotate-[45deg]', 'translate-y-[6px]', 'translate-x-[3px]', 'w-6');
                
                navLine2.classList.add('opacity-0');
                
                navLine3.classList.remove('scale-x-75');
                navLine3.classList.add('-rotate-[45deg]', '-translate-y-[6px]', 'translate-x-[3px]', 'w-6');
            } else {
                // Hide menu
                mobileNavMenu.classList.add('invisible', 'opacity-40', 'translate-y-6');
                mobileNavMenu.classList.remove('!visible', '!opacity-100', '!translate-y-0');
                
                // Animate X back to hamburger
                navLine1.classList.add('scale-x-50');
                navLine1.classList.remove('rotate-[45deg]', 'translate-y-[6px]', 'translate-x-[3px]', 'w-6');
                
                navLine2.classList.remove('opacity-0');
                
                navLine3.classList.add('scale-x-75');
                navLine3.classList.remove('-rotate-[45deg]', '-translate-y-[6px]', 'translate-x-[3px]', 'w-6');
            }
        });
    }
});
