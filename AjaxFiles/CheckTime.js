// Include the PHP-generated JavaScript variable
var script = document.createElement('script');
script.src = "/index.php?r=getCurrentTime";
document.getElementsByTagName('head')[0].appendChild(script);

// Function to get the current client time
function getClientTime() {
    return new Date().getTime();
}

// Calculate the time difference between server and client
var timeOffset = getClientTime() - serverTime;

// Function to get the current synchronized time
function getSynchronizedTime() {
    return new Date(getClientTime() - timeOffset);
}

// Get the synchronized time and extract the hour
var synchronizedTime = getSynchronizedTime();
var hour = synchronizedTime.getHours();

// Check the time and apply themes accordingly
if (hour >= 18 || hour < 6) {
    document.body.classList.add('night-theme');
    alert('It\'s night time! Enjoy the dark theme.');
} else {
    document.body.classList.add('day-theme');
    alert('It\'s day time! Enjoy the summer theme.');
}
