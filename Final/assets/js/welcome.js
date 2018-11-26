var countdownNumberE1 = document.getElementById('countdown-number');
var countdown = 5;

countdownNumberE1.textContent = countdown;

setInterval(function() {
	countdown = --countdown <= 0 ? 5 : countdown;
	countdownNumberE1.textContent = countdown;
}, 1000);