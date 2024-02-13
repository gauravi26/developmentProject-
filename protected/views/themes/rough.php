<style>
/* Style for tab buttons */
.tabPreviewlinks {
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  padding: 10px 20px;
  cursor: pointer;
}

/* Style for tab content */
.tabPreviewcontent {
  display: none;
  padding: 20px;
  border: 1px solid #ccc;
  background-color: #fff;
}

/* Style for the active tab */
.active {
  display: block;
}


</style>

<div id="themePreview">
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yii Application</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
   <div id="targetElement">       
      <form id="formPreview">      

<!--      <p>This is some text content.</p>-->
          <h4>This is Preview</h4>
          <strong>Text Box</strong> 
       <input type="text" name="name"><br>
       
      
                                <strong>Upload</strong> 

      <input type="file" name="file" id="linkPreview"><br>
          <strong> List</strong> 
  <ul>
    <li>List Item 1</li>
    <li>List Item 2</li>
  </ul>
  
  <!-- Grid -->
          <strong>Grid</strong> 
  <div class="grid-container">
    <div class="grid-item">Grid Item 1</div>
    <div class="grid-item">Grid Item 2</div>
   
  </div><br>
  
  <!-- Tabs -->
          <strong>Tab </strong> 
  <!-- Inside your "themePreview" -->
<div id="tabPreview">
  <!-- Tab buttons -->
  <div class="tabs">
    <button class="tabPreviewlinks" onclick="openTab(event, 'Tab1')">Tab 1</button>
    <button class="tabPreviewlinks" onclick="openTab(event, 'Tab2')">Tab 2</button>
    <!-- Add more buttons as needed -->
  </div>

  <!-- Tab content -->
  <div id="Tab1" class="tabPreviewcontent">
    <h3>Tab 1 Content</h3>
    <p>This is the content of Tab 1.</p>
  </div>
  <div id="Tab2" class="tabcontent">
    <h3>Tab 2 Content</h3>
    <p>This is the content of Tab 2.</p>
  </div>
  <!-- Add more tab content sections as needed -->
</div>

  
  <!-- Icons -->
        <strong>Icon</strong> 
        
  <i id="icon1" class="fas fa-star" color="black"></i>
  <i class="fas fa-heart"></i><br>
  
  <!-- Links -->
   <strong>Link</strong> 
<a href="#" id="specialLink" class="custom-link">This is a link</a><br><br>
      </form>
        </div>
      <button type="submit">Submit</button><br>
  </main>

  <footer>
    <p>Copyright &copy; 2023</p>
  </footer>
</body>
</html>
<script>// JavaScript function to open a tab
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;

  // Hide all tab content
  tabcontent = document.getElementsByClassName('tabcontent');
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = 'none';
  }

  // Remove the 'active' class from all tab buttons
  tablinks = document.getElementsByClassName('tablinks');
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove('active');
  }

  // Show the selected tab content and mark the button as active
  document.getElementById(tabName).style.display = 'block';
  evt.currentTarget.classList.add('active');
}

// Initially, display the first tab
document.getElementById('Tab1').style.display = 'block';
</script>
<!--            <script src="http://localhost/testproject/AjaxFiles/Number&slidebar.js"></script>-->
<script>
    // Function to update the live preview based on font size
    function updatePreview() {
      const fontSize = document.getElementById("fontSizeInput").value + "px";
      document.getElementById("themePreview").style.fontSize = fontSize;
    }

    // Add event listeners for the font size input and slider
    const fontSizeInput = document.getElementById("fontSizeInput");
    const fontSizeSlider = document.getElementById("fontSizeSlider");

    fontSizeInput.addEventListener("input", updatePreview);
    fontSizeSlider.addEventListener("input", updatePreview);

    // Initialize the live preview with the default font size
    updatePreview();
  </script>