

/*JQUERY*/

$(function(){


            // SCROLL HEADER
            //
            // $('#scroll-header').css({'display':'none'});
            //
            // $(window).scroll(
            //     function(){
            //         var maPosScroll = $(document).scrollTop();
            //
            //         if(maPosScroll >=100){
            //             $('#scroll-header').slideDown(300);
            //         }
            //
            //         else{
            //             $('#scroll-header').slideUp(300);
            //         }
            //
            //     }
            // );





        //BACK TOP


        $('#back-top').hide();
        $(function(){

            $(window).scroll(

                function() {

                    if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                }

                else {
                    $('#back-top').fadeOut();
                }
                });

                $('#back-top').click(

                    function() {
                        $('html, body').animate({scrollTop: 0}, 800);
                        return false;
                    }
                );
        });
// SCROLL ANCRE

        $('a[href^="#"]').click(function(){
	         var the_id = $(this).attr("href");

	          $('html, body').animate({
		            scrollTop:$(the_id).offset().top
	          }, 1000);
	           return false;
        });

	//SOUS-MENU

  //   $('nav ul li a').mouseenter(function(){
	// 	$(this).next().fadeIn(400);
	// });
  //
	// $('.sous-menu').mouseleave(function(){
	// 	$(this).fadeOut(400);
	// })

});
