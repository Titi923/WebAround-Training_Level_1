// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 44.411161, lng: 26.079081 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

// Countown Timer
const theTimer = document.querySelector('.timer');

let timer = [0, 0, 0, 15 * 6000];
let interval;
let timerRunning = false;

// Add leading zero to numbers 9 or below (purely for aesthetics):
function leadingZero(time) {
  if (time <= 9) {
    time = '0' + time;
  }
  return time;
}

// Run a standard minute/second/hundredths timer:
function runTimer() {
  let currentTime =
    leadingZero(timer[0]) +
    ':' +
    leadingZero(timer[1]) +
    ':' +
    leadingZero(timer[2]);
  theTimer.innerHTML = currentTime;
  timer[3]--;

  timer[0] = Math.floor(timer[3] / 100 / 60);
  timer[1] = Math.floor(timer[3] / 100 - timer[0] * 60);
  timer[2] = Math.floor(timer[3] - timer[1] * 100 - timer[0] * 6000);

  if (timer[3] <= 0) {
    theTimer.innerHTML = '00:00:00';
  }
}

// Start the timer:
window.onload = function () {
  timerRunning = true;
  interval = setInterval(runTimer, 10);
};