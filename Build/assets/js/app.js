$(document).ready(function(){
  
  $('.flexslider').flexslider();
  
  $("#ajax-contact-form").submit(function(){

  var str = $(this).serialize();

     $.ajax({
     type: "POST",
     url: "contact_form/contact.php",
     data: str,
     success: function(msg){
      
  $("#note").ajaxComplete(function(event, request, settings){

  if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
  {
  result = '<div class="notification_ok">Your message has been sent succesfully. We\'ll be in touch soon.</div>';
  $("#fields").hide();
  }
  else
  {
  result = msg;
  }

  $(this).hide();
  $(this).html(result).slideDown("slow");

  $(this).html(result);

  });

  }

   });

  return false;

  });

});
