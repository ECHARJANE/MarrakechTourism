let mainNav = document.querySelector(' .menu ');
let mtest = document.querySelector('.mtest');
let btnScroll = document.getElementById('btnScroll');
let re;
let whatSSap = document.querySelector('.whatssap');




mtest.onclick= function(){
mainNav.classList.toggle('menu-active');
mtest.classList.toggle('close');
}

re = function (){
  mainNav.classList.remove('menu-active');
  mtest.classList.remove('close');
}


 function btns(){
    if(scrollY >= 400)
    {
      btnScroll.style.display ='block';
    }
    
    else {
      btnScroll.style.display ='none';
    }
  }
 
  function btnw(){
    if(scrollY >= 200)
    {
      whatSSap.classList.add('whatssap-active');
    }
    
  }
  function mainT(){

    let mainTitle = document.querySelectorAll('.main-title');

    for(let i = 0; i < mainTitle.length; i++){
      
      let windowheight = window.innerHeight;
      let  titleTop =mainTitle[i].getBoundingClientRect().top;
      let titlePoint = 150;
   
  
      if(titleTop < windowheight - titlePoint){
        mainTitle[i].classList.add('active')
      }
      else {
        mainTitle[i].classList.remove('active')
      }
    }
  }
  
  window.addEventListener('scroll', btns)
  window.addEventListener('scroll', btnw)
  window.addEventListener('scroll', mainT)
  btnScroll.onclick = function(){
    scroll({
        left:0,
        top:0,
        behavior:"smooth",
    })
  }
//== scroll whatsap

//== scroll whatsap
 
window.addEventListener('scroll', reveal);
function reveal() {

    let reveals = document.querySelectorAll('.reveal');

    for(let i = 0; i < reveals.length; i++){
      
      let windowheight = window.innerHeight;
      let  revealsTop =reveals[i].getBoundingClientRect().top;
      let revealsPoint = 150;
   
  
      if(revealsTop < windowheight - revealsPoint){
        reveals[i].classList.add('active')
      }
      else {
        reveals[i].classList.remove('active')
      }
    }
}


