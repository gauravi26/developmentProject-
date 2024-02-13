<style>
  .report-container {
    width: 100%;
    border-collapse: collapse;
    margin-top: 16px;
  }

  .report-container th,
  .report-container td {
    padding: 12px;
    border: 2px dotted;
  }

  .report-container th {
    background-color: #87CEEB;
  }

  .report-container tr:nth-child(even) {
    background-color: #F0F8FF;
  }

  .report-container tr:hover {
    background-color: #B0E0E6;
  }
</style>   
<?php
/* @var $this FacultyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faculties',
);
$this->menu=array(
	array('label'=>'Create ', 'url'=>array('create')),
	array('label'=>'Manage ', 'url'=>array('admin')),
    	array('label'=>'Get Faculty Details Static ', 'url'=>array('getFacultyDetails')),
	array('label'=>'Get Faculty Details Dynamic', 'url'=>array('getFacultyDetailsDynamically')),
	//array('label'=>'Test ', 'url'=>array('getFacultyDetailsColumnDynamically')),

       


);?>


<h1>Faculties</h1>
<?php
// Other HTML content on your index page...

//echo CHtml::link('Faculty Details', array('/faculty/getFacultyDetails'), array(
//    'class' => 'btn btn-primary',
//));
//
//echo "<br/><br/>"; // Add line break
//
//echo CHtml::link('Faculty Details Dynamically', array('/faculty/getFacultyDetailsDynamically'), array(
//    'class' => 'btn btn-primary',
//));
//
//echo "<br/><br/>"; // Add line break
//
//echo CHtml::link('Faculty Details Column Dynamically', array('/faculty/getFacultyDetailsColumnDynamically'), array(
//    'class' => 'btn btn-primary',
//));

// Other HTML content on your index page...
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',

)); ?>
<body>
  <div class="container">
    <h2>HTML TABLE</h2>
    <table class="report-container">
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
    
    </table>
  </div>
</body>
</html>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Get all elements with class 'percentage' in the table
    var percentageElements = document.querySelectorAll('table td:nth-child(8)');

    // Loop through each percentage element
    percentageElements.forEach(function (element) {
      // Get the percentage value as an integer
      var percentage = parseInt(element.textContent);

      // Change the color based on the percentage value
      if (percentage >= 45) {
        element.style.color = 'green';
      } else {
        element.style.color = 'red';
      }
    });
  });
</script>
