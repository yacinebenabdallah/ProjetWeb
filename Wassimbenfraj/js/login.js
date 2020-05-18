console.log(1);
$(document).ready(function(){
  $('#submitbutton').click(function(){
   if($('#user_name').val()!='' && $('#user_pass').val()!='' )  
   {
    //$('#notification').load("php/courses/core/checklogin.php",{username:$('#user_name').val(),password:$('#user_pass').val()}) ;
    $.ajax({
      url: 'php/courses/core/checklogin.php',
      method: 'POST',
      dataType: 'json',
      data: {
        username:$('#user_name').val(),
        password:$('#user_pass').val()

      }, success: function (response) {
           if (response.status == "success")
           window.location.replace("index.php");

           else {
            $('#notification').text(response.response) ;
               console.log(response);
           }
      }
   });
   
    console.log($('#user_name').val()) ;
    console.log($('#user_pass').val()) ;
   }
   else if($('#user_name').val()=='')
   {
     
    $('#notification').text('Please type your username ') ;
   }
   else if( $('#user_pass').val()=='')
   {
    $('#notification').text('Please type your password') ;
   }
  
      
  })
})