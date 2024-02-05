
// Set the date we're counting down to
// Use the format "Year, Month (0-11), Day, Hour, Minute, Second"
// Example for December 31, 2024, 23:59:59 use: new Date(2024, 11, 31, 23, 59, 59)
var countDownDate = new Date(2024, 1, 16, 23, 59, 59).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
  
  // Find the time difference between now and the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes, and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Display the result in an element with id="countdownTimer"
  document.getElementById("csoon_days").innerText = days;
  document.getElementById("csoon_hours").innerText = hours;
  document.getElementById("csoon_minutes").innerText = minutes;
  document.getElementById("csoon_seconds").innerText = seconds;
  
  // If the count down is finished, write some text 

}, 1000);
