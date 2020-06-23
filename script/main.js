$(function(){
	header();
	navMove('nav ul li:nth-of-type(1)', '.prof');
	navMove('nav ul li:nth-of-type(2)', '.work');
	navMove('nav ul li:nth-of-type(3)', '.contact');
	navMove('#footer + a', '.prof');

	var workSwiper = new Swiper('.work .swiper-container', {
		slidesPerView: "auto",
		spaceBetween: 40,
		navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      	}
	});
	$('.work-modal').scrollbar({
		'disableBodyScroll' : true
	});
	modal('.work .swiper-container a', '.work-modal .btn-close', '.work-modal');
	modalClr();
});

function header(){
	var lastScrollTop = 0,
		delta = 15;
	$(document).on('scroll', function(){
		var scrollTop = $(this).scrollTop();
		if(Math.abs(lastScrollTop - scrollTop) <= delta) return; // delta보다 적게 올라감
		if((scrollTop > lastScrollTop) && (lastScrollTop > 0)){ $('#header').css('top', '-75px');}
		else { 
			if(scrollTop <= delta) { $('#header').css({'top':'0px','background-color': 'unset', 'border-bottom': 'unset'});}
			else { $('#header').css({'top':'0px', 'background-color' : '#000121','border-bottom': '1px solid #fff'});}
		}
		lastScrollTop = scrollTop;
	})
}
function navMove(nav, e, n){
	$(nav).on('click',function(){
		var offset = $(e).offset();
	    $('html, body').animate({scrollTop : offset.top}, 700);
	});   
}

function modal(btn, cls, modal){
	$(btn).on('click', function(){
		var data = $(this).parent().attr('class').split(' ');
		data = data[1];
		$(modal).filter("." + data ).fadeIn(200);
	});
	$(cls).on('click', function(){
		var data = $(this).attr('class').slice(-4);
		$(modal).fadeOut(200);
	})
}
function modalClr(){
	$('article h4').each(function(){
		var color = $(this ).parents('.content').prev().css('background-color');
		$(this).css({ 'border-color' : color});
	})
	$('.link li').each(function(){
		var color = $(this ).parents('.content').prev().css('background-color');
		$(this).css({ 'background-color' : color});
	})

}