$(document).ready(function(){

				//Caption Sliding (Partially Hidden to Visible)
				$('.boxgrid.caption').hover(function(){
					$(".cover", this).stop().animate({top:'52%'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'80%'},{queue:false,duration:300});
				});
			});