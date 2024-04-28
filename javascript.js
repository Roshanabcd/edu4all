let hour = document.getElementById('hour');
let minute = document.getElementById('minute');
let second = document.getElementById('second');

function displayClock(){

   // Getting hour, minute and second from date function
   let date = new Date();
   
   let hh = date.getHours();
   let mm = date.getMinutes();
   let ss = date.getSeconds();

   let hRotation = 30*hh + mm/2;
   let mRotation = 6*mm;
   let sRotation = 6*ss;

   hour.style.transform = `rotate(${hRotation}deg)`;
   minute.style.transform = `rotate(${mRotation}deg)`;
   second.style.transform = `rotate(${sRotation}deg)`;
}

setInterval(displayClock, 1000);
function openTab() {
    window.open("https://www.educative.io/", "_blank");
    }