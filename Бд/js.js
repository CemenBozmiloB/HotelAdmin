let pipisok1li = document.getElementById('pipisok-1');
let pipisok2li = document.getElementById('pipisok-2');
let pipisok3li = document.getElementById('pipisok-3');
let pipisok1 = document.querySelector('.pipisok-1');
let pipisok2 = document.querySelector('.pipisok-2');
let pipisok3 = document.querySelector('.pipisok-3');
let span = document.querySelectorAll('span');
let php = document.querySelector('.include-php');
pipisok1li.onclick = function() {
	pipisok1.style.display = "block";
	pipisok2.style.display = "none";
	pipisok3.style.display = "none";
	php.style.display = "block";
}

pipisok2li.onclick = function() {
	pipisok1.style.display = "none";
	pipisok2.style.display = "block";
	pipisok3.style.display = "none";
	php.style.display = "block";
}

pipisok3li.onclick = function() {
	pipisok1.style.display = "none";
	pipisok2.style.display = "none";
	pipisok3.style.display = "block";
	php.style.display = "block";
}
var dataPphp = document.querySelector('.data-php').getAttribute('data-attr');
alert(dataPhp);
