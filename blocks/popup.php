
<div class="mypop" id="mypop">
	<div class="mypop_inner container">
		<div class="close_buton close_action"><b>X</b></div>
    	<div class="row">
    		<div class="col">
    			<p class="py-2"></p>
            	<h1  class="text-center accent-light bold headline"><b>Wait!</b></h1>
            	<HR  style="border: 1px solid black;width:10%">
            	<h2  class="text-center bold"><b>Discover How To Clear Out The Fungus And Get Rid Of The Itching <br> And Bad Smell For Good!</b></h2>
        	</div>
    	</div>
		<div class="row videorow">
        	<div id="popup_video_box" class="col align-self-center"></div>
        	<div class="col align-self-center">
        		<hr style="border:solid 1px black" />
        		<p class="py-1"></p>
        		<p>Hear the <b>amazing experiences</b> of men and women just like you who have successfully used it <b>to regain the health of their nails and skin</b>, without toxic medications or useless creams!</p>
        		<p class="py-1"></p>
        		<hr style="border:solid 1px black" />
        	</div>
    	</div>
    	<div class="row">
    		<p class="col-12 col-md-10 offset-md-1 text-center py-2">
    		<a href="text.php">
    		<u>Click Here To Reveal The Only 100% Natural Blend That Clears Off All The Fungus & Its Incredible Real User Results!</u>
    		</a>
    		</p>
    	</div>
    	<div class="row">
    		<div class="close_action btn btn-success mx-auto d-block">Or Stay On Current Page</div>
    	</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

(()=>{
let placeholder = null;
let shown_popup = false;

let popup = {
	open:(e)=>{
		if(e.clientY <= 0 && !shown_popup)
		{
			document.getElementById('mypop').style.display = "flex";
			let stream = document.getElementById('stream_container');
			
			console.log(popup);
			placeholder = document.createElement("DIV");
			placeholder.style.height = stream.clientHeight + "px";
			placeholder.style.width= stream.clientWidth + "px";
			placeholder.style.display = "block";
			var stream_parent = stream.parentNode;
			stream_parent.appendChild(placeholder);
			
			document.body.style.overflow = "hidden";
			
            var popup = document.getElementById('popup_video_box');
            popup.appendChild(stream);
            shown_popup = true;
            window.dispatchEvent(new Event('resize'));
		}
	},
	close:()=>{
		document.getElementById('mypop').style.display = "none";
		let stream = document.getElementById('popup_video_box').childNodes[0];
		placeholder.parentNode.appendChild(stream);
		placeholder.parentNode.removeChild(placeholder);
		document.body.style.overflow = "auto";
		window.dispatchEvent(new Event('resize'));
	}
};



$(document).ready(function () {
	$("html").bind("mouseleave", function (e) {
		popup.open(e);
	});
	
	$(".close_action").bind("click", function (e) {
		popup.close(e);
	});
});
})();
</script>
