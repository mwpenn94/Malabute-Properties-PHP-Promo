const menuIcon = document.querySelector('.fas');

let mobileMenu = document.querySelector('.mobile-menu-wrapper');
menuIcon.addEventListener('click',()=>{
   if (menuIcon.classList.contains('fa-bars')){
       menuIcon.classList.remove('fa-bars');
       menuIcon.classList.add('fa-times');
       mobileMenu.classList.remove('hide-menu');
   }
   else if ( menuIcon.classList.contains('fa-times')){
        menuIcon.classList.remove('fa-times');
        menuIcon.classList.add('fa-bars');
        mobileMenu.classList.add('hide-menu');
   }
})


