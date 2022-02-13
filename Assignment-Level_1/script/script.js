// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 44.411161, lng: 26.079081 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 9,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

// const myLatLng = { lat: -25.363, lng: 131.044 };
//   const map = new google.maps.Map(document.getElementById("map"), {
//     zoom: 4,
//     center: myLatLng,
//   });

//   new google.maps.Marker({
//     position: myLatLng,
//     map,
//     title: "Hello World!",
//   });