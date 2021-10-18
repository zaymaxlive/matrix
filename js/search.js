let icon = document.querySelector('.bi.bi-search');
let icon2 = document.querySelector('.bi.bi-x-octagon-fill')
let search = document.querySelector('.search_hd');
let menu = document.querySelector('.hd-li-name');

icon.onclick = function(){
        icon2.classList.toggle('active');
        icon.classList.toggle('active');
        search.classList.toggle('active');
        menu.classList.toggle('active');
}
icon2.onclick = function(){
    icon2.classList.remove('active');
    icon.classList.remove('active');
    search.classList.remove('active');
    menu.classList.remove('active');
}