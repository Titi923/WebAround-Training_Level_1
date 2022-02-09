const HOURHAND = document.querySelector('#hour');
const MINUTEHAND = document.querySelector('#minute');
const SECONDHAND = document.querySelector('#second');

var date = new Date();
let [hour, minutes, seconds] = [
  date.getHours(),
  date.getMinutes(),
  date.getSeconds(),
];

let oneHour = (hour * 360) / 12 + (minutes * (360 / 60)) / 12;
let oneMinute = (minutes * 360) / 60 + (seconds * (360 / 60)) / 60;
let oneSecond = (seconds * 360) / 60;

clock = function () {
  oneHour = oneHour + 3 / 360;
  oneMinute = oneMinute + 6 / 60;
  oneSecond = oneSecond + 6;

  HOURHAND.style.transform = `rotate(${oneHour}deg)`;
  MINUTEHAND.style.transform = `rotate(${oneMinute}deg)`;
  SECONDHAND.style.transform = `rotate(${oneSecond}deg)`;
};

let intervalID = setInterval(clock, 1000);
