$(function(){

	var curSlide = 0;
	var maxSlide = $('.banner-single').length - 1;
	var delay = 3;


	initSlider();
	changeSlide();


	function initSlider(){
		$('.banner-single').css('opacity','0');
		$('.banner-single').eq(0).css('opacity','1');
		for(var i = 0; i < maxSlide+1; i++){
			var content = $('.bullets').html();
			if(i == 0)
				content+='<span class="active-slider"></span>';
			else
				content+='<span></span>';
			$('.bullets').html(content);
		}
	}

	function changeSlide(){
		setInterval(function(){
			$('.banner-single').eq(curSlide).animate({'opacity':'0'},3000);
			curSlide++;
			if(curSlide > maxSlide)
				curSlide = 0;
			$('.banner-single').eq(curSlide).animate({'opacity':'1'},3000);

		},delay * 1000);
    }
    

	



    

})