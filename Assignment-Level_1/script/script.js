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
function startTimer(duration, display) {
  let timer = duration,
    minutes,
    seconds;
  setInterval(function () {
    minutes = parseInt(timer / 60, 10);
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    display.textContent = minutes + ':' + seconds;

    if (--timer < 0) {
      display = '00:00:00';
    }
  }, 1000);
}
window.onload = function () {
  var fifteenMinutes = 60 * 15,
    display = document.querySelector('#time');
  startTimer(fifteenMinutes, display);
};


// Price on php page

let price = document.getElementById('thePrice').innerHTML
price = 1;
console.log(price);