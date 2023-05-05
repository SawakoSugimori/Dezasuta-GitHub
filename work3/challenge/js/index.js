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
    // console.log(dropdownLink);

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

// hamburger menu
const ham = document.querySelector('#js-hamburger');
const nav = document.querySelector('#js-nav');

ham.addEventListener('click', function(){
    // classListプロパティは、特定の要素のクラス名を追加・削除・参照できる
    // classListの主なメソッドは、add, remove, contains, toggle(クラスが含まれていなければ追加, and vice versa)
    // 参考： https://qiita.com/tomokichi_ruby/items/2460c5902d19b81cace5
    ham.classList.toggle('active');
    nav.classList.toggle('active');
})

}