
$(document).ready(function(){
    $(window).scroll(function(){
      if (this.scrollY > 20){
       $('.navbar').addClass("sticky")
      } else{
   
      }
   })
    $('.menu-btn').click(function(){
     $('.navbar .menu').toggleClass('active')
     $('.menu-btn i').toggleClass('active')
    });
   
    $(window).on('scroll load',function(){
   
     $('.navbar .menu').removeClass('active');
   
     $('.menu-btn i').removeClass('active');
   
   });

   

   var typed = new Typed(".typingg",{
    strings: ["Flats...","Flats...","Rooms...", "Hostels...", "PG's..."],
    typeSpeed: 100,
    backspeed: 60,
    loop: true,
    
    });
    
    });
    
  

    window.scroll({
      top: 2500, 
      left: 0, 
      behavior: 'smooth'
    });
    
    // Scroll certain amounts from current position 
    window.scrollBy({ 
      top: 100, // could be negative value
      left: 0, 
      behavior: 'smooth' 
    });
    
    // Scroll to a certain element
    document.querySelector('.hello').scrollIntoView({ 
      behavior: 'smooth' 
    })
  

  