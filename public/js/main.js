jQuery(document).ready(function($) {
  // Initiate the wowjs animation library
  new WOW.WOW().init();
  
  tippy('.tippy');
  tippy('input,.ellipsis',{
    delay: [500,0], // Number or Array [show, hide] e.g. [100, 500]
  });
});
