// JavaScript Document
sliderInt=1;
sliderNext=2;

$(document).ready(function() {
  $('.slider>img#1').fadeIn(500);
  startSlider();  
});

$(".slider>img").hover(
	function(){
		stopLoop();
	},
	function(){
		startSlider();
	}
);
//original script
function startSlider(){
	count=$('.slider>img').size();
	
	loop=setInterval(function(){
		if(sliderNext>count){
			sliderNext=1;
			sliderInt=1;
		}
	
	$('.slider>img').fadeOut(500);
	$('.slider>img#'+sliderNext).fadeIn(500);
	
	sliderInt=sliderNext;
	sliderNext=sliderNext+1;
	
	},5000)
	
}

function prev(){
	newSlide=sliderInt-1;
	showSlide(newSlide);	
}

function next(){
	newSlide=sliderInt+1;
	showSlide(newSlide);
}

function stopLoop(){
	window.clearInterval(loop);
}

function showSlide(id){
	stopLoop();
	if(id>count){
			id=1;
	}else if(id<1){
		id=count;
	}
	
	$('.slider>img').fadeOut(500);
	$('.slider>img#'+id).fadeIn(500);
	
	sliderInt=id;
	sliderNext=id+1;
	startSlider();
}


	
