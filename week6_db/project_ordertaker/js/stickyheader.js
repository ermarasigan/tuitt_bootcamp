// Javascript for sticky header


$(document).ready(function () {

    // var menu = $('#js-header');
    // var origOffsetY = menu.offset().top;
    // console.log(origOffsetY);

    function scroll() {

  //   	$('navbar-brand').mouseover( function(){
		// 	$(this).css('color', "orange")
		// });

        if ($(window).scrollTop() >= 200) {
            $('#js-header').addClass('sticky');
            $('#js-header').css('background','#e32929');
            // $('#js-header').css('padding',0);

            $('#js-brand').css('padding', (30,15));
            $('#js-brand').css('color','white');
            // $('#js-brand').css('fontSize','1.9em');
            $('#js-brand').mouseover( function(){
				$(this).css('color', "orange")
			});
			$('#js-brand').mouseleave( function(){
				$(this).css('color', "white")
			});

            $('#js-hpage').css('padding', (30,15));
            $('#js-page1').css('padding', (30,15));
            $('#js-page2').css('padding', (30,15));
            $('#js-page3').css('padding', (30,15));
            $('#js-pages').show();

            $('#js-login').css('padding', (30,15));
            $('#js-signup').css('padding', (30,15));


            
        } else {
            $('#js-header').removeClass('sticky');
            $('#js-header').css('background','transparent');
           
            // $('#js-brand').css('color','pink');
            $('#js-brand').css('color','red');
            // $('#js-brand').css('fontSize','2em');
            $('#js-brand').css('padding', (30,15));
            $('#js-brand').mouseover( function(){
				$(this).css('color', "orange")
			});
			$('#js-brand').mouseleave( function(){
				$(this).css('color', "red")
			});
            $('#js-pages').hide();

            $('#js-login').css('padding', (100,15));
            $('#js-signup').css('padding', (40,15));

            $('#js-hpage').css('padding', (30,15));
            $('#js-login').css('padding', (30,15));
            $('#js-signup').css('padding', (30,15));

             $('#js-header').css('padding', (30,0));
             // $('#myNavbar').css('padding', (30,0));
            // console.log('scrolled up')
        }
    }

    document.onscroll = scroll;

   
	// $('navbar-brand').mouseleave( function(){
	// 	$(this).css('color', "black")
	// });

});