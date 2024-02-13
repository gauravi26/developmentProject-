<style>
    
     
    /* Apply styles to .dataTables_length */


/* Apply styles to .dataTables_filter */

/* Apply styles to .dataTables_info */
/*.dataTables_info {
    font-weight: bold;
    color: red !important;
    font-size: 22px;
}*/

</style>
<?php  
$controller = Yii::app()->getController();
//  print_r($controller);
// die();
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();


echo CHtml::hiddenField('controllerId', $controllerId);
echo CHtml::hiddenField('actionId', $actionId);
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Report</title>

   </head>
<body>
  <div id="scriptPlaceholder"></div>
</body>

  <div class="report-container">
    <h2>HTML TABLE</h2>
    <table class="report-table">
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
          <td>Adiya</td>
          <td>86</td>
          <td>90</td>
          <td>56</td>
          <td>23</td>
          <td>56</td>
          <td>30</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>02</td>
          <td>Riya</td>
          <td>54</td>
          <td>77</td>
          <td>77</td>
          <td>92</td>
          <td>05</td>
          <td>45</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>03</td>
          <td>Priya</td>
          <td>68</td>
          <td>48</td>
          <td>8</td>
          <td>92</td>
          <td>90</td>
          <td>89</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>04</td>
          <td>Gauravi</td>
          <td>48</td>
          <td>56</td>
          <td>87</td>
          <td>34</td>
          <td>55</td>
          <td>37</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>05</td>
          <td>Nikhil</td>
          <td>86</td>
          <td>37</td>
          <td>87</td>
          <td>67</td>
          <td>45</td>
          <td>95</td> <!-- Placeholder for Total column -->
        </tr>
        
      </tbody>
    
    </table>
  </div>

 


</body>

<!--<script>
document.addEventListener('DOMContentLoaded', function () {
  var percentageElements = document.querySelectorAll('table td:nth-child(8)');

  percentageElements.forEach(function (element) {
    var percentage = parseInt(element.textContent);
    
    if (percentage >= 45) {
      element.style.setProperty('color', 'green', 'important');
    } else {
      element.style.setProperty('color', 'red', 'important');
    }
  });
});

</script>-->


<!--<script type="text/javascript" defer="defer">   
    
     document.addEventListener('DOMContentLoaded', function () {
                    var style = document.createElement('style');
                    style.textContent = 'table td:nth-child(8).red { color: red !important; } ' +
                                        ' table td:nth-child(8).green { color: green !important; }';

                    document.head.appendChild(style);

                    $('table td:nth-child(8)').each(function() {
                        var percentage = parseInt($(this).text());
                        $(this).removeClass('red green');

                        if (percentage < 45) {
                            $(this).addClass('red');
                        } else {
                            $(this).addClass('green');
                        }
                    });
                });</script>-->

