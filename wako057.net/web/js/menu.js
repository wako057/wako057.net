
 (function($){

     /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
     $('.logo').click(function(e){
         e.preventDefault();
         $('#lateral_nav').toggleClass('with--sidebar');
     });
//
//     /* Je veux pouvoir masquer le menu si on clique sur le cache */
//     $('#site-cache').click(function(e){
//         $('body').removeClass('with--sidebar');
//     })
//
 })(jQuery);
