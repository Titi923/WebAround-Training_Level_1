// select tickets
let silverSelect = document.querySelector('#select-silver');
let silverPrice = 50;
let goldSelect = document.querySelector('#select-gold');
let goldPrice = 100;
let diamondSelect = document.querySelector('#select-diamond');
let diamondPrice = 200;

let price = document.querySelector('#thePrice');
price.innerHTML = goldPrice;

silverSelect.addEventListener('click', function () {
  silverSelect.classList.add("active");
  diamondSelect.classList.remove("active");
  goldSelect.classList.remove("active")
  price.innerHTML = silverPrice;
  silverSelect.innerHTML = "SELECTED";
  goldSelect.innerHTML = "SELECT";
  diamondSelect.innerHTML = "SELECT";
});

goldSelect.addEventListener('click', function () {
  silverSelect.classList.remove("active");
  diamondSelect.classList.remove("active");
  goldSelect.classList.add("active")
  price.innerHTML = goldPrice;
  silverSelect.innerHTML = "SELECT";
  goldSelect.innerHTML = "SELECTED";
  diamondSelect.innerHTML = "SELECT";
});

diamondSelect.addEventListener('click', function () {
  silverSelect.classList.remove("active");
  diamondSelect.classList.add("active");
  goldSelect.classList.remove("active")
  price.innerHTML = diamondPrice;
  silverSelect.innerHTML = "SELECT";
  goldSelect.innerHTML = "SELECT";
  diamondSelect.innerHTML = "SELECTED";
});
