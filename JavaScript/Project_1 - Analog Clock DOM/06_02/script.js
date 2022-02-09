const clock = function () {
  const HOURHAND = document.querySelector('#hour');
  const MINUTEHAND = document.querySelector('#minute');
  const SECONDHAND = document.querySelector('#second');

  const date = new Date();
  const [hour, minutes, seconds] = [
    date.getHours(),
    date.getMinutes(),
    date.getSeconds(),
  ];

  let oneHour = (HOURHAND.style.transform = `rotate(${30 * (hour - 12)}deg)`);
  let oneMinute = (MINUTEHAND.style.transform = `rotate(${6 * minutes}deg)`);
  let oneSecond = (SECONDHAND.style.transform = `rotate(${6 * seconds}deg)`);
};

let intervalID = setInterval(clock, 1000);
