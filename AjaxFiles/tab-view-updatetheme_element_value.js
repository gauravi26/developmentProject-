 function openCss(evt, tabName) {
    // Hide all tab contents
    var tabContents = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabContents.length; i++) {
      tabContents[i].style.display = "none";
    }

    // Remove "active" class from all tab buttons
    var tabLinks = document.getElementsByClassName("tablinks");
    for (var i = 0; i < tabLinks.length; i++) {
      tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }

    // Show the selected tab content
    document.getElementById(tabName).style.display = "block";

    // Add the "active" class to the clicked button
    evt.currentTarget.className += " active";

    // Show or hide the nested tab view based on the selected tab
    var nestedTabContainer = document.getElementById("nestedTabContainer");
    if (
      tabName === "Form" ||
      tabName === "Input" ||
      tabName === "Label" ||
      tabName === "Select_Input" ||
      tabName === "Radio_Button" ||
      tabName === "Check_Box" ||
      tabName === "Button"
    ) {
      nestedTabContainer.style.display = "block";
    } else {
      nestedTabContainer.style.display = "none";
    }
  }

  // Rest of the code remains the same

  window.addEventListener("DOMContentLoaded", function () {
    openTab(event, "Form");
  });

  function openTab(evt, tabName) {
    // Declare variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  function openNestedTab(evt, nestedTabName) {
    // Declare variables
    var i, nestedTabcontent, nestedTablinks;

    // Get all elements with class="nested-tabcontent" and hide them
    nestedTabcontent = document.getElementsByClassName("nested-tabcontent");
    for (i = 0; i < nestedTabcontent.length; i++) {
      nestedTabcontent[i].style.display = "none";
    }

    // Get all elements with class="nested-tablinks" and remove the class "active"
    nestedTablinks = document.getElementsByClassName("nested-tablinks");
    for (i = 0; i < nestedTablinks.length; i++) {
      nestedTablinks[i].className = nestedTablinks[i].className.replace(
        " active",
        ""
      );
    }

    // Show the current nested tab and add an "active" class to the button that opened the nested tab
    document.getElementById(nestedTabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Trigger click event on the "Size" button to open it by default
  document.querySelector(".nested-tablinks").click();