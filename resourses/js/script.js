$(document).ready(function(){
    /*Меню воявляется */
    
    
    $('.js--Section-One').waypoint(function(direction){     /*waypoint для того чтоб появилась меню при перемещении по экрану начиная с класса js--Section-One */
       if(direction == 'down'){                             /*напрвление вних*/
           $('nav').addClass('stick');          
           
       }else{                                               /*направление вверх*/
           $('nav').removeClass('stick');
           
       }
       
    },{
           offset: '14%;'                                   /*Появится раньше чем выбранный елемент на 14% записывается вторым парвметром*/
       }); 
    
    /*Переход по кнопкам*/
    
    $('.js--plan-btm').click(function(){
        $('html, body').animate({scrollTop:$('.js-Section-Plans').offset().top}, 1000);
        
    });  
    $('.js--First-Section').click(function(){
       $('html,body').animate({scrollTop: $('.js--Section-One').offset().top}, 1000); 
    });
    /*
    $('.js-Delivery').click(function(){
       $('html,body').animate({scrollTop:$('.js--Section-Meals').offset().top},1000); 
    });
    $('.js--How-It-Works').click(function(){
        $('html,body').animate({scrollTop:$('.js--How-it-works').offset().top},1000);
    })
    $('.js--Coties').click(function(){
        $('html,body').animate({scrollTop: $('.js--Sities').offset().top},1000);
    })
    $('.js--Sing-up').click(function(){
        $('html, body').animate({scrollTop: $('.js--Section-form').offset().top},1000);
        
    })*/
    // Select all links with hashes
$('a[href*="#"]')                       /* скрипт перехода по якорям в href="#How-it-works" перейдет на id How-it-works */
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')  && location.hostname == this.hostname) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
    
    
    $('.js--wp1').waypoint(function(direction){                 /*Добавляем класс с анимацией */
        $('.js--wp1').addClass('animated fadeIn');          /*animated обязательно tada название анимации  из css файла animate.css*/
    },{
        offset: '40%;'
    })
     $('.js--wp2').waypoint(function(direction){                 /*Добавляем класс с анимацией */
        $('.js--wp2').addClass('animated fadeInUp');          /*animated обязательно tada название анимации  из css файла animate.css*/
    },{
        offset: '40%;'
    })
    $('.js--wp3').waypoint(function(direction){                 /*Добавляем класс с анимацией */
        $('.js--wp3').addClass('animated tada');          /*animated обязательно tada название анимации  из css файла animate.css*/
    },{
        offset: '60%;'
    })
    $('.js--apps').click(function(){                        /*если нажата кнопка*/
        let nav = $('.js--navi-list');
        nav.slideToggle(200);                               /*делает видимым или невидемым выбраный обьект*/
        $('.js-nav-i').toggleClass('btmnav');        
    })
    $('.js--close').click(function(){
        $('.js-nav-i').toggleClass('btmnav');               /*добавляю класс чтоб изменить иконку*/
        let nav = $('.js--navi-list');
        nav.slideToggle(200);   
    })
    
});
