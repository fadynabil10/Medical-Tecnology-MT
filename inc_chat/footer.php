



<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script id="message-response-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data">
      <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
      <span class="message-data-time">{{time}}, Today</span>
    </div>
    <div class="message my-message">
      {{response}}
    </div>
  </li>
</script>
<?php

// if($_GET['uname']){
//   $uname = $_GET['uname'];
// }else{
//   $uname = '';
// }


?>

<script type="text/javascript">







var chat = {}

chat.fetchMessages = function(){
  $.ajax({
    url  : '../inc_chat/ajax/chat.php',
    method : 'POST',
    data : { method: 'fetch' },
    success : function(data, status){

        $('.chat-history .seconds').html(data);


        console.log(data)
        console.log(status);



    },
    error: function(xhr, status, data){
      console.log(xhr);
      console.log(status);
      // console.log(data);
    }
  });
}

chat.throwMessage = function(messagess){
  if($.trim(messagess).length != 0){
    $.ajax({
      url: '../inc_chat/ajax/chat_insert.php',
      method:'POST',
      data : {method : 'throw', message: messagess},
      success: function(data){
        chat.fetchMessages();
        chat.entry.val('');
      }
    });
  }
}
chat.entry = $('.chat-message .entry');
chat.entry.bind('keydown', function(e){
  // console.log(e.keyCode);
  if(e.keyCode === 13 && e.shiftKey === false){
    chat.throwMessage($(this).val());
    // console.log(e.keyCode);

    e.preventDefault();
  }
});
chat.interval = setInterval(chat.fetchMessages, 5000);
chat.fetchMessages();
// chat.fetchMessages();

function checkMsgs(){
  var send_msg = document.getElementById("entries").value;
  var img_entry = document.getElementById("file-input").value;

  if(send_msg === '' && img_entry === ''){
    alert('please put any message');
  }
}













$(document).ready(function() {
  var open_btn = $('.popup-btn'),
      popup = $('.popup'),
      close_btn = $('.close-popup'),
      body  = $('body');

  open_btn.on('click', function() {
    popup.fadeIn();
    body.addClass('popup-active');
  });

  close_btn.on('click', function() {
    popup.fadeOut();
    body.removeClass('popup-active');
  });

  $(document).on('click', function(e) {
    if( $(e.target).hasClass('popup') ) {
      $(popup).fadeOut();
      body.removeClass('popup-active');
    }
  });
});


var countss = {}

countss.countMessages = function(){
  $.ajax({
    url  : '../inc_chat/ajax/count_msgs.php',
    method : 'POST',
    data : {method2: 'fetch2'},
    success : function(data, status){

      // $('.chat-with').html(data);

        $('.chat-with .nums_msgs').html(data);

        console.log(data)
        console.log(status);

    }

  });

}
countss.interval = setInterval(countss.countMessages, 5000);
countss.countMessages();





















// Slider Js First Start Here
//image with in pixels
var imageWidth = 1024;
  // Slider content loaded
  $(window).ready(function(){
  	var currentImage = 0;
	//Image count
	var allImages = $('#slider li img').length;
	//setup slideshow frame width
	$('#slider ul').width(allImages*imageWidth);
	//attach click event to slideshow buttons
	$('.nextarrow').click(function(){
		//increase image count
		currentImage++;
		// if we are at end let set it to 0
		if(currentImage>=allImages) currentImage = 0;
		// calculate  and set position
		setFramePosition(currentImage);
	});
	//attach click event to slideshow buttons
	$('.prevarrow').click(function(){
		//increase image count
		currentImage--;
		// if we are at end let set it to 0
		if(currentImage<0) currentImage = allImages-1;
		// calculate  and set position
		setFramePosition(currentImage);
	});
  });
  
//Frame Position
function setFramePosition(pos){
		//calculate position 	
		var px = imageWidth*pos*-1;
		//set left position
		$('#slider ul').animate({ left: px }, 300);
};
// Slider Js First End Here 

// Slider 2 Js Start Here (Auto play) 
jQuery(document).ready(function($) {
	var slideCount = $('#slider2 ul li').length;
	var slideWidth = $('#slider2 ul li').width();
	var slideHeight = $ ('#slider2 ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider2').css({width: slideWidth, height: slideHeight });
	$('#slider2 ul').css({width: sliderUlWidth, marginLeft:-slideWidth});
	$('#slider2 ul li:last-child').prependTo('#slider2 ul');
	
	function moveLeft(){
		$('#slider2 ul').animate({ 
			left:+ slideWidth 
		}, 200, function() {
			$('#slider2 ul li:last-child').prependTo('#slider2 ul');
			$('#slider2 ul').css('left', '');
		});
	};
	
	function moveRight(){
		$('#slider2 ul').animate({ 
			left:- slideWidth 
		}, 200, function() {
			$('#slider2 ul li:first-child').appendTo('#slider2 ul');
			$('#slider2 ul').css('left', '');
		});
	};
	
	// Slider Arrows
	$('#slider2 .prevarrow2').click(function (){
		moveLeft();
	});
	$('#slider2 .nextarrow2').click(function (){
		moveRight();
	});
	
	// auto play function
	setInterval(function () {
        moveRight();
    }, 3000);
});







</script>




<script>


             
// //slides for patients medical records!

// var slideIndex = 1; 
// showSlides(slideIndex);
//  function plusSlides(n) {
//     showSlides(slideIndex += n); 
//     } 
//     function currentSlide(n) { 
//       showSlides(slideIndex = n);
//        } 
//        function showSlides(n) {
//           var i; 
//           var slides = document.getElementsByClassName("mySlides"); 
//           var dots = document.getElementsByClassName("dot");
//            if (n > slides.length) {
//              slideIndex = 1
//              } 
//              if (n < 1) {
//                slideIndex = slides.length
//                } 
//                for (i = 0; i < slides.length; i++)
//                 { 
//                   slides[i].style.display = "none"; 
//                   } 
//                   for (i = 0; i < dots.length; i++) {
//                      dots[i].className = dots[i].className.replace(" active", "");
//                       }
//                        slides[slideIndex-1].style.display = "block"; 
//                         dots[slideIndex-1].className += " active"; 
// }


</script>

<script>


// // Get the modal 
// var modal = document.getElementById('id01');
//  // When the user clicks anywhere outside of the modal, close it 
//  window.onclick = function(event) { 
//   if (event.target == modal) {
//      modal.style.display = "none"; 
//      } 
//   } 

        </script>













</script>

<script>

// $('#getting-started').countdown('2015/01/01', function(event) {
//     $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
//   });

</script>


<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->



</body>
</html>