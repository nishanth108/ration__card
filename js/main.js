 const navItems = document.querySelector('.nav__items');
 const openNavBtn = document.querySelector('#open__nav__button');
 const closeNavBtn = document.querySelector('#close__nav__button');
 //open nav Dropdown
 const openNav = () =>{
    navItems.style.display ='flex';
    openNavBtn.style.display='none';
    closeNavBtn.style.display="inline-block"
 }
 const closeNav = () => {
    navItems.style.display='none';
    closeNavBtn.style.display='none';
    openNavBtn.style.display="inline-block"
    
 }
 openNavBtn.addEventListener('click', openNav);
 closeNavBtn.addEventListener('click', closeNav);



 const sidebar = document.querySelector('aside');
 const showSidebarBtn = document.querySelector('#show__sidebar');
const hideSidebarBtn = document.querySelector('#hide__sidebar');

const show = () => {
    sidebar.style.left = '0';
    showSidebarBtn.style.display= 'none';
    hideSidebarBtn.style.display ='inline-block';
}

const hide = () => {
    sidebar.style.left = '-100%';
    showSidebarBtn.style.display= 'inline-block';
    hideSidebarBtn.style.display ='none';
}

showSidebarBtn.addEventListener('click', show);
hideSidebarBtn.addEventListener('click', hide);
