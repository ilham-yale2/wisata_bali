$(document).ready(function() {
	$('#btnTop').css({
		"transition":"0.2s ease"
	});
	$('#btnTop').fadeOut();
	$(window).scroll(function(){
		if ($(this).scrollTop()>300){
			$('#btnTop').fadeIn();
		}else{
			$('#btnTop').fadeOut();
		}
		
	});

	//back to top button
	$('#btnTop').click(function(){
		$('html,body').animate({scrollTop : 0},800);
	});
	setTimeout(function(){
		$('.carousel-content').addClass('show-content');
		$('.banner-title').css({
			'opacity': 1,
			'transform':'translateX(0px)'
		})
	},1000);

});




// parallax

$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
	// console.log(wScroll);
	
	if (wScroll > 200) {
		$('.carousel-content'),$('.banner-title').css({
			'transform' :'translateX(-1000px)'
		})
	}else{
		$('.carousel-content'),$('.banner-title').css({
			'transform' :'translateX(0px)'
		})
	}
	// navbar
	if(wScroll > 10){
		$('nav').css({
			'padding' : '10px',
			'box-shadow': '5px 0px 10px'
		});
		$('nav').addClass('bg-dark d-block');
		$('nav').addClass('nav-show');
	}else{
		$('nav').css({
			'padding':'15px',
			'box-shadow' :'none'
		});
		$('nav').removeClass('bg-dark');
	}
	


});

