// Total seconds to wait
var seconds = 5;

function countdown() {
	seconds = seconds - 1;
	// Update remaining seconds
	document.getElementById("countdown").innerHTML = seconds;
	// Count down using javascript
	window.setTimeout("countdown()", 5);
}

// Run countdown function
// countdown();
