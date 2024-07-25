let searchform=document.querySelector('.search-form');

document.querySelector('#search').onclick= () =>
{
    searchform.classList.toggle('active');
    loginform.classList.remove('active');
    nav.classList.remove('active');
}


let loginform=document.querySelector('.login');

document.querySelector('#log').onclick= () =>
{
    loginform.classList.toggle('active');
    searchform.classList.remove('active');
    nav.classList.remove('active');
}



let nav=document.querySelector('.nav');

document.querySelector('#menu').onclick= () =>
{
    nav.classList.toggle('active');
    loginform.classList.remove('active');
    searchform.classList.remove('active');
    
}


window.onscroll= () =>
{
    loginform.classList.remove('active');
    searchform.classList.remove('active');
    nav.classList.remove('active');
}

