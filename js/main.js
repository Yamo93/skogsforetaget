
// DOM Elements
const DOMelements = {
    backdrop: document.querySelector('.backdrop'),dropdown: document.querySelector('.dropdown'),
    hamburger: document.querySelector('.hamburger'),
    closeDropdownBtn: document.querySelector('.dropdown-close')
};

DOMelements.hamburger.addEventListener('click', showDropdown);
DOMelements.closeDropdownBtn.addEventListener('click', hideDropdown);
DOMelements.backdrop.addEventListener('click', hideDropdown);

function showDropdown() {
    DOMelements.dropdown.style.transform = 'translateY(0vh)';
    DOMelements.backdrop.style.display = 'block';
}

function hideDropdown() {
    DOMelements.dropdown.style.transform = 'translateY(-100vh)';
    DOMelements.backdrop.style.display = 'none';
}