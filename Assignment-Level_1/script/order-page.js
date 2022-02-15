// select tickets
let silverSelect = document.querySelector('.select-silver');
let silverPrice = 50;
let goldSelect = document.querySelector('.select-gold');
let goldPrice = 100;
let diamondSelect = document.querySelector('.select-diamond');
let diamondPrice = 200;

let price = document.querySelector('#thePrice');
price.innerHTML = goldPrice;

silverSelect.addEventListener('click', function () {
  price.style.transition = 'all 2s';
  price.innerHTML = silverPrice;
});

goldSelect.addEventListener('click', function () {
  price.style.transition = 'all 2s';
  price.innerHTML = goldPrice;
});

diamondSelect.addEventListener('click', function () {
  price.style.transition = 'all 2s';
  price.innerHTML = diamondPrice;
});