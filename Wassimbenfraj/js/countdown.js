/*   var countDownDate = <?php 
 echo strtotime("2020-04-17 23:31:00" ) ?> * 1000;
 var now = <?php echo time() ?> * 1000; */
 
 // Update the count down every 1 second
/*  var x = setInterval(function() {
  now = now + 1000;
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Output the result in an element with id="demo"
  document.getElementsByClassName("demo").innerHTML = days + "d " + hours + "h " +
  minutes + "m " + seconds + "s ";
  // If the count down is over, write some text 
  if (distance < 0) {
  clearInterval(x);
   document.getElementsByClassName("demo").innerHTML = "EXPIRED";
  }
      
  }, 1000); */

  function countdown(item,index) {
    

   
    now = now + 200;
    // Find the distance between now an the count down date
    var distance = item - now;
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));  
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"


    document.getElementsByClassName("demo")[index].innerHTML =  days + "d " + hours + "h " +
    minutes + "m " + seconds + "s ";
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(timerId);
       document.getElementsByClassName("demo")[index].innerHTML = "EXPIRED";
      }
  }
  
  let timerId = setTimeout(function tick() {
    //alert('tick');
    countDownDate.forEach(countdown) ;
timerId = setTimeout(tick, 1000); // (*)
},  0);
/* let x = setInterval(function tick() {
  //alert('tick');
  countDownDate.forEach(countdown) ;

}, 1000); */