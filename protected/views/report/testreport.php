
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
          <td>25</td> <!-- Placeholder for Total column -->
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
          <td>25</td> <!-- Placeholder for Total column -->
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
          <td>25</td> <!-- Placeholder for Total column -->
        </tr>
        <tr>
          <td>05</td>
          <td>Nikhil</td>
          <td>86</td>
          <td>37</td>
          <td>87</td>
          <td>67</td>
          <td>100</td>
          <td>100</td> <!-- Placeholder for Total column -->
        </tr>
        
      </tbody>
    
    </table>
  </div>

 
<script>
  // Assigning functions to window
window.calculateMin = function(numbers) {
    return Math.min(...numbers);
};

window.changeBackgroundColor = function(element, bgcolor) {
    element.style.backgroundColor = bgcolor;
};

// Function to fetch data based on user input (column name, row index, etc.)
function fetchData(input) {
    var selectorType = input.selectorType; // Selector type: column, row, cell
    var selectorValue = input.selectorValue; // Value based on selector type
    var targetElements;

    // Select elements based on selector type and value
    switch (selectorType) {
        case 'reportColumn':
            // Find column index based on column name
            var columnIndex = Array.from(document.querySelectorAll('table th')).findIndex(th => th.textContent.trim() === selectorValue);
            if (columnIndex !== -1) {
                // Get all elements in the target column
                targetElements = document.querySelectorAll('table td:nth-child(' + (columnIndex + 1) + ')');

                // Extract values from the target column
                var values = [];
                targetElements.forEach(function(element) {
                    var value = parseInt(element.textContent.trim()); // Ensure to trim whitespace
                    if (!isNaN(value)) {
                        values.push(value);
                    }
                });

                return { elements: targetElements, values: values }; // Return both elements and values
            }
            break;

        default:
            console.error('Invalid selector type');
    }

    return null; // Return null if selector type is invalid or column is not found
}

// Sample data fetched from the database
var selectorType = 'reportColumn';
var targetColumnName = 'Maths';
var conditionFunction = 'calculateMin';
var action = 'changeBackgroundColor';
var actionParams = { color: 'blue' };

// Call fetchData function with dynamic column name
var data = fetchData({ selectorType: selectorType, selectorValue: targetColumnName });

if (data !== null) {
    // Execute the condition function
    var minValue = window.calculateMin(data.values);

    // Execute the action on matching elements
    data.elements.forEach(function(element) {
        var value = parseInt(element.textContent.trim()); // Ensure to trim whitespace
        if (!isNaN(value) && value === minValue) {
            // Execute the style action
            window.changeBackgroundColor(element, actionParams.color);
        }
    });
} else {
    console.log("Unable to fetch values for the given column name or no values in the column.");
}


</script>

</body>

<!--<script src="http://localhost/report/AjaxFiles/reportScript.js"></script>-->
