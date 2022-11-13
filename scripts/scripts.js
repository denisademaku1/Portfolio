$(document).ready(function(){

  console.log('\n' +
    'Hi! :) Thank you for taking the time to view my website  \n' +
    'If you would like to get in touch you can email me \n' +
    'directly on denisademaku1@gmail.com \n' +
    '\n'
  );

  console.log('HTML file loaded and parsed.');
  addMyEventListeners();
  fadeInContent();
  
});


 
//Events
function addMyEventListeners(){

  // Click event to scroll to top
  $('a#backToTop').on('click', function(){
    scrollToTop();
  });

  // Click event to hide & show mobile nav
  $('#navbar li a, #mobile-menu').on('click', function(){
    if ($(window).width() <= 990) {
      toggleNav();
      toggleMenuToX();
    }
  });

  // Window resize event 
  $(window).on('resize', function () {
    showHideDesktopNav();
  });

}

// function to scroll back to top
function scrollToTop() {
  // Animate the html element with scrollTop method
  $('html').animate({scrollTop:0});
};

//Check to see if the window is top if not then display button
$(window).scroll(function(){
  if ($(this).scrollTop() > 300) {
    $('#backToTop').fadeIn(); // show back to top
  } else {
    $('#backToTop').fadeOut();// hide back to top
  }
  
});

//Toggle hide / show Nav
function toggleNav(){
  $('#navbar').fadeToggle(700);
};

//Toggle mobile menu to X
function toggleMenuToX(){
  $('#mobile-menu').toggleClass('change');
};

//show desktop navigation when window is resized
function showHideDesktopNav() {
  if( $(window).width() >= 990)
  {
      $('#navbar').show();
  } else 
  {
      $('#navbar').hide();
      $("#mobile-menu").removeClass( "change");
  }
}

// fade in content on page load
function fadeInContent() {
    $('#top > a').css({'opacity':'0', 'paddingLeft':'2vw'}).delay(800).animate({'opacity':'1','paddingLeft':'0'},1800); 
    $('#home-sec > p.intro-greeting, h2, h3').css({'opacity':'0', 'paddingLeft':'7vw'}).delay(700).animate({'opacity':'1','paddingLeft':'0'},2600);
    $('#contact-sec p, #portfolio-sec p, .logo').css({'opacity':'0', 'paddingLeft':'2vw'}).delay(300).animate({'opacity':'1','paddingLeft':'0'},1000);
    $('a.button').css({'opacity':'0'}).animate({'opacity':'1'},1100);
    $('.about-image-wrapper').css({'opacity':'0'}).delay(0).animate({'marginRight':'0px','opacity':'1'},2000);

  if ( $(window).width() >= 990) {
    $('#navbar li').css({'opacity':'0'});
    $('#navbar li:nth-child(1)').delay(100).animate({'paddingTop':'0px','opacity':'1'},2500);
    $('#navbar li:nth-child(2)').delay(300).animate({'paddingTop':'0px','opacity':'1'},1900);
    $('#navbar li:nth-child(3)').delay(800).animate({'paddingTop':'0px','opacity':'1'},1700);
    $('#navbar li:nth-child(4)').delay(1000).animate({'paddingTop':'0px','opacity':'1'},1500);
    $('#navbar li:nth-child(5)').delay(1250).animate({'paddingTop':'0px','opacity':'1'},1300);
    $('#navbar li:nth-child(6)').delay(1400).animate({'paddingTop':'0px','opacity':'1'},1000);

    $('.icon').delay(100).css({'opacity':'0'}).animate({'opacity':'1'},2600);

  }
}
