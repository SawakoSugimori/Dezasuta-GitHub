'use strict';
{
/* Get all elements that a main-menu class has
querySelectorAll is a method that get all elements */
const main = document.querySelectorAll('.dropdown');
console.log(main);

for (let i = 0; i < main.length; i++) {
    // .dropdownがついた要素すべてにmoseoverというイベントを付与
    main[i].addEventListener('mouseover', dropdownOpen);
    main[i].addEventListener('mouseout', dropdownClose);
}

// Open the dropdown menu
function dropdownOpen(element) {
    const dropdownLink = element.currentTarget.querySelectorAll('.drop-menu-link');
    console.log(dropdownLink);

    for (let i = 0; i < dropdownLink.length; i++) {
        dropdownLink[i].classList.add('open');
    }
}

// Close the dropdown menu
function dropdownClose(element) {
    const dropdownLink = element.currentTarget.querySelectorAll('.drop-menu-link');
    for (let i = 0; i < dropdownLink.length; i++)
    {
        dropdownLink[i].classList.remove('open');
    }
}
}