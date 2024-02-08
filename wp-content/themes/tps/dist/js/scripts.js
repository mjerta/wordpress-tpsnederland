
var d = new Date().getFullYear();
document.getElementById("this-year").innerHTML = d;




$(document).ready(function(){

	function slidedown(){
		var elementNotCLicked = true;
	        $('#toggle-sliding').on("click",function(){
	        	if(elementNotCLicked){
	        		elementNotCLicked = false;
					$('.container-below').toggle();
					var position = $("#2nd-container-frontpage").offset().top;
					$('html, body').animate({
						scrollTop: position
					}, 1000);
				}
	        });
	}
	function doSomething(){
		var el = document.querySelector("a.nav-link.dropdown-toggle");
		if(el){
			if($(window).width() < 767.98){
				console.log("test");
				el.removeAttribute('data-hover');
				el.setAttribute('data-toggle', 'dropdown');
			}
		}
	}


	//calling the function
	slidedown();

	doSomething();
});
