function openCss(event, tabName) {
  // Hide all tabcontent elements
  var tabcontent = document.getElementsByClassName("tabcontent");
  for (var i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove 'active' class from all tablinks
  var tablinks = document.getElementsByClassName("tablinks");
  for (var i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the selected tab content and add 'active' class to the clicked tablink
  document.getElementById(tabName).style.display = "block";
  event.currentTarget.className += " active";

  // Prevent the default action
  if (event.preventDefault) {
    event.preventDefault();
  } else {
    event.returnValue = false; // For older IE versions
  }

  return false;
}

// Set "Container" tab as active by default on page load
document.addEventListener("DOMContentLoaded", function () {
  var defaultTabButton = document.querySelector(".tablinks");
  defaultTabButton.click();
});
