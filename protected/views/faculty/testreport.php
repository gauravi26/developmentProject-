<!--<style>
.student-container { grid: display !important; } .student-container { grid-template-columns: repeat(3, 1fr) !important; } .student-container { grid-gap: 10px !important; } .student-container { justify-content: center !important; } .student-container { align-items: center !important; } .student-container { background-color: #E6E6FA !important; } .student-container { border-radius: 8px !important; } .student-container { padding: 16px !important; } .student-container { font-family: 'Roboto', sans-serif !important; } .student-container { max-width: 800px !important; } .student-container { margin: 0 auto !important; } .student-container h2 { text-align: center !important; } .student-container h2 { grid-column: span 3 !important; } .student-container h2 { color: #4CAF50 !important; } .student-container h2 { font-size: 24px !important; } .student-report { width: 600px !important; } .student-report { border-collapse: separate !important; } .student-report { border-spacing: 0 8px !important; } .student-report { margin-top: 16px !important; } .student-report { background-color: #FFF8DC !important; } th { padding: 14px !important; } th { border: 2px solid #FFD700 !important; } th { background-color: #FFA500 !important; } th { color: #fff !important; } th { font-weight: bold !important; } .student-container h2 { text-align: center !important; } .student-container h2 { grid-column: span 3 !important; } .student-container h2 { color: #4CAF50 !important; } .student-container h2 { font-size: 24px !important; } .student-report { width: 100% !important; } .student-report { border-collapse: separate !important; } .student-report { border-spacing: 0 8px !important; } .student-report { margin-top: 16px !important; } .student-report { background-color: #FFF8DC !important; } tr:nth-child(even) { background-color: #FFE4B5 !important; } tr:nth-child(even) { background-color: #FFE4B5 !important; } tr:hover { background-color: #ADD8E6 !important; } td { padding: 12px !important; } td { border: 2px solid #87CEEB !important; } td { color: #333 !important; } tfoot { background-color: #FFD700 !important; } tfoot { color: #fff !important; } tfoot { font-weight: bold !important; }    
    
    
</style>-->
<?php  
$controller = Yii::app()->getController();
//  print_r($controller);
// die();
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();


echo CHtml::hiddenField('controllerId', $controllerId);
echo CHtml::hiddenField('actionId', $actionId);
 ?>
<body>
  <div class="student-container">
    <h2>HTML TABLE</h2>
    <table class="student-report">
      <thead>
        <tr>
          <th>Roll No.</th>
          <th>Name</th>
          <th>English</th>
          <th>Maths</th>
          <th>Science</th>
          <th>Computer Science</th>
          <th>Social Studies</th>
          <th>Percent %</th> <!-- Added Total column -->
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td>Ali</td>
          <td>86</td>
          <td>77</td>
          <td>87</td>
          <td>92</td>
          <td>95</td>
          <td>30</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>02</td>
          <td>Salman</td>
          <td>86</td>
          <td>77</td>
          <td>87</td>
          <td>92</td>
          <td>95</td>
          <td>45</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>03</td>
          <td>Shan</td>
          <td>86</td>
          <td>77</td>
          <td>87</td>
          <td>92</td>
          <td>95</td>
          <td>89</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>04</td>
          <td>Aliyan</td>
          <td>86</td>
          <td>77</td>
          <td>87</td>
          <td>92</td>
          <td>95</td>
          <td>37</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>05</td>
          <td>Zeeshan</td>
          <td>86</td>
          <td>77</td>
          <td>87</td>
          <td>92</td>
          <td>95</td>
          <td>95</td> <!-- Placeholder for Total column -->
        </tr>
      </tbody>
      <!-- Footer (You can uncomment this if needed)
      <tfoot>
        <tr>
          <td colspan=3>Maximum Marks: </td>
          <td colspan=3>Marks Obtained: </td>
          <td colspan=3>Grade: </td>
        </tr>
      </tfoot>
      -->
    </table>
  </div>
</body>

<script>
//document.addEventListener('DOMContentLoaded', function () {
//    var percentageElements = document.querySelectorAll('table td:nth-child(8)');
//    percentageElements.forEach(function (element) {
//      var percentage = parseInt(element.textContent);
//      if (percentage >= 45) {
//        element.style.setProperty('color', 'green', 'important');
//      } else {
//        element.style.setProperty('color', 'red', 'important');
//      }
//    });
//  });
</script>
