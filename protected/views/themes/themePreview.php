<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'><style>
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
/*          transition: all 1s ease;  Initial transition values */

}

/* Style for the active tab */
.active {
  display: block;
}

#formPreview {
  font-style: Roboto;
}
/*ul {
 background: #cce5ff;
  color: darkblue;
  margin: 5px;
  }*/
   #formPreview  h1 {
      font-size: 22px;
      color: lightblue;
    }
   #formPreview  h2 {
      font-size: 20px;
      color: black;
    }
   #formPreview  h3 {
      font-size: 18px;
      color: black;
    }
/*   body {
      font-size: 14px;
      color: blue;
    }*/
     #formPreview   p {
      font-size: 16px;
      color: black;
    }
      #formPreview   span {
      font-size: 12px;
      color: blueviolet;
    }
    #livePreviewContainer {
      /* Add your styles here */
      font-size: 14px;
      color: grey;
      height: 530px;
    }
    
    h1{
        text-align: center;
    }
/*ul {
    list-style:  inside square;  Set your desired List Style here 
  }

  li {
    list-style-type: none;  Remove the default bullet style 
    list-style-position: inside;  Set your desired List Style Position here 
    background-color: red;  Background color for list items 
    padding: 5px 10px;  Padding for list items 
    margin: 5px 0;  Margin for list items 
    border: 1px solid #ccc;  Border for list items 
    border-color: greenyellow;
  }*/

</style>

<div id="themePreview">

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yii Application</title>
<!--  <link rel="stylesheet" href="css/styles.css">-->
</head>
<!--  <div id="transitionPreviewBox" class="live-preview-box"> This is transition</div>-->
<style>
    /* Your existing CSS styles */

    /* Add transition styles for the formPreview */
    #formPreview {
    /* Initial styles */
/*    width: 200px;  */
    transition: width var(--transition-duration, 0s) var(--transition-timing-function, ease);
    transition-property: background-color;
  }

  #formPreview:hover {
    /* Transition values on hover */
    /*width: 300px;*/
    transition: width var(--transition-duration-hover, var(--transition-duration, 0s)) var(--transition-timing-function-hover, var(--transition-timing-function, ease));
     transition-property: all;

  }
  </style>
<!--          style="transition-timing-function: ease-out; transition-duration: 20s;"-->
        <form id="formPreview" >  

<!--      <p>This is some text content.</p>-->
<div id="textPreview">

          <h1>This is Preview</h1>
       <h2>Heading 2</h2>
       <h3>Heading 3</h3>
       <p> Paragraph </p>
           
</div>
        <div id="livePreviewContainer"> <!-- Container for the live preview -->
      
               <strong>Dropbox</strong> 

       <select name="select">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option><br>
      </select><br><br>
                              
        <!-- Add an ID to the <ul> element -->
<strong>List</strong>
<ul id="previewList">
    <li>Student 1</li>
    <li>Student 2</li>
</ul>

  

<!--          <strong>Tab </strong> 
         <div id="tabPreview">
            Tab buttons 
           <div class="tabs">
             <button class="tabPreviewlinks" onclick="openTab(event, 'Tab1')">Tab 1</button>
             <button class="tabPreviewlinks" onclick="openTab(event, 'Tab2')">Tab 2</button>
           </div>

   Tab content 
  <div id="Tab1" class="tabPreviewcontent">
    <h3>Tab 1 Content</h3>
    <p>This is the content of Tab 1.</p>
  </div>
  <div id="Tab2" class="tabcontent">
    <h3>Tab 2 Content</h3>
    <p>This is the content of Tab 2.</p>
  </div>
</div>-->

  
  
  
  <!-- Links -->
   <strong>Link</strong> 
<a href="#" id="specialLink" class="custom-link">This is a link</a><br><br>
      </form>
      <button type="submit">Submit</button><br>
  </main>
  </div> <!-- End of live preview container -->

  <footer>
    <p>Copyright &copy; 2023</p>
  </footer>
</body>
</html>
<script>
  // JavaScript function to update transition properties
   function updateTransitionPreview() {
    const duration = document.getElementById('transition_duration').value + 's';
    const timingFunction = document.getElementById('transition_timing_function').value;

    const previewBox = document.getElementById('formPreview');
    previewBox.style.setProperty('--transition-duration', duration);
    previewBox.style.setProperty('--transition-timing-function', timingFunction);
    previewBox.style.setProperty('--transition-duration-hover', duration);
    previewBox.style.setProperty('--transition-timing-function-hover', timingFunction);
  }

  // Attach event listeners to input fields for live updates
  document.getElementById('transition_duration').addEventListener('input', updateTransitionPreview);
  document.getElementById('transition_timing_function').addEventListener('change', updateTransitionPreview);
</script>
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