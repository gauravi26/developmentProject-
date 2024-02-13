<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	$model->id,
);
$departments = Departments::model()->findAll(array('order' => 'department_name'));
$departmentList = CHtml::listData($departments, 'id', 'department_name');
$courses = Courses::model()->findAll(array('order' => 'course_name'));
$courseList = CHtml::listData($courses, 'id', 'course_name');


$this->menu=array(
	array('label'=>'List Faculties', 'url'=>array('index')),
	array('label'=>'Create Faculty', 'url'=>array('create')),
	array('label'=>'Update Faculty', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Faculty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Faculties', 'url'=>array('admin')),
);
?>
<h1><?php echo CHtml::encode($model->id); ?></h1>




<h1>View Faculty #<?php echo $model->id; ?></h1>

<?php 

/*$facultyModel = Faculty::model()->findAll();

// Loop through all columns of the faculty table
$columns = $facultyModel->tableSchema->getColumnName();
foreach ($columns as $column_name) {
    // Fetch the theme ID for the current column from the mapping table
    $mappingModel = FacultyColumnThemeMapping::model()->findByAttributes(array('column_name' => $column_name));
    if ($mappingModel !== null) {
        $theme_ID = $mappingModel->theme_ID;
        // rest of the code
    }
    
    // Fetch the theme details from the themes table using the theme ID
    $themeModel = Themes::model()->findByPk($theme_ID);
    $css_properties = "color: " . $themeModel->color . ";";
    $css_properties .= "font-size: " . $themeModel->font_size . ";";
    $css_properties .= "background-color: " . $themeModel->background_color . ";";
    // Add more CSS properties as needed
    
    // Apply the theme CSS properties to the current column
    echo '<div style="' . $css_properties . '">' . $facultyModel->$column_name . '</div>';
}*/


// This error occurred at line 42 of file newview.php
// Undefined variable: theme_ID

// Iterate over all columns in the faculty model
/*$facultyModels = Faculty::model()->findAll();
foreach ($facultyModels as $facultyModel) {
    // Fetch the theme ID for the current column from the mapping table
    $column_name = 'faculty_name'; // Change this to the current column name
    $mappingModel = FacultyColumnThemeMapping::model()->findByAttributes(array('column_name' => $column_name));
    $theme_ID = $mappingModel->theme_ID;

    // Fetch the theme details from the themes table using the theme ID
    $themeModel = Themes::model()->findByPk($theme_ID);

    // Build the CSS properties string for the current column
    $css_properties = "color: " . $themeModel->color . ";";
    $css_properties .= "font-size: " . $themeModel->font_size . ";";
    $css_properties .= "background-color: " . $themeModel->background_color . ";";
    $css_properties .= "padding: " . $themeModel->padding . ";";
    $css_properties .= "margin: " . $themeModel->margin . ";";
    $css_properties .= "border: " . $themeModel->border . ";";
    $css_properties .= "text-align: " . $themeModel->text_align . ";";
    $css_properties .= "text-shadow: " . $themeModel->text_shadow . ";";
    $css_properties .= "text-indent: " . $themeModel->text_indent . ";";
    $css_properties .= "letter-spacing: " . $themeModel->letter_spacing . ";";
    $css_properties .= "word-spacing: " . $themeModel->word_spacing . ";";
    $css_properties .= "line-height: " . $themeModel->line_height . ";";
    $css_properties .= "text-transform: " . $themeModel->text_transform . ";";
    $css_properties .= "text-decoration: " . $themeModel->text_decoration . ";";
    $css_properties .= "font-family: " . $themeModel->font_family . ";";
    $css_properties .= "font-weight: " . $themeModel->font_weight . ";";
    $css_properties .= "text-overflow: " . $themeModel->text_overflow . ";";
    $css_properties .= "white-space: " . $themeModel->white_space . ";";
    $css_properties .= "text-orientation: " . $themeModel->text_orientation . ";";
    $css_properties .= "text-wrap: " . $themeModel->text_wrap . ";";
    $css_properties .= "text-justify: " . $themeModel->text_justify . ";";
    $css_properties .= "text-emphasis: " . $themeModel->text_emphasis . ";";
    $css_properties .= "text-spacing: " . $themeModel->text_spacing . ";";
    $css_properties .= "text-shadow-color: " . $themeModel->text_shadow_color . ";";
    $css_properties .= "text-shadow-x: " . $themeModel->text_shadow_x . ";";
    $css_properties .= "text-shadow-y: " . $themeModel->text_shadow_y . ";";
    // Add more CSS properties as needed

    // Apply the theme CSS properties to the current column
    echo '<div style="' . $css_properties . '">' . $facultyModel->faculty_name . '</div>';
}*/


// Assuming $model->faculty_id contains the faculty ID of the selected record
$facultyModel = Faculty::model()->findByPk($model->id);

if ($facultyModel !== null)

{
    // Array of faculty columns with their corresponding theme IDs
// Fetch the mapping of faculty columns and their corresponding theme IDs from the FacultyColumnThemeMapping table
$facultyColumnThemeMapping = FacultyColumnThemeMapping::model()->findAll();

// Create an array with the column names and their corresponding theme IDs
$facultyColumns = array();
foreach ($facultyColumnThemeMapping as $mapping) {
    $facultyColumns[$mapping->column_name] = $mapping->theme_ID;
}

// Loop through each faculty column and apply the corresponding theme CSS properties
foreach ($facultyColumns as $columnName => $themeId) {
    // ...
}


// Loop through each faculty column and apply the corresponding theme CSS properties
foreach ($facultyColumns as $columnName => $themeId) {
    
    //print_r($facultyColumns );
   //die();
    $mappingModel = FacultyColumnThemeMapping::model()->findByAttributes(array('column_name' => $columnName));
    $themeModel = Themes::model()->findByPk($themeId);

    $css_properties = "color: " . $themeModel->color . ";";
    $css_properties .= "font-size: " . $themeModel->font_size . ";";
    $css_properties .= "background-color: " . $themeModel->background_color . ";";
    $css_properties .= "padding: " . $themeModel->padding . ";";
    $css_properties .= "margin: " . $themeModel->margin . ";";
    $css_properties .= "border: " . $themeModel->border . ";";
    $css_properties .= "text-align: " . $themeModel->text_align . ";";
    $css_properties .= "text-indent: " . $themeModel->text_indent . ";";
    $css_properties .= "letter-spacing: " . $themeModel->letter_spacing . ";";
    $css_properties .= "word-spacing: " . $themeModel->word_spacing . ";";
    $css_properties .= "line-height: " . $themeModel->line_height . ";";
    $css_properties .= "text-transform: " . $themeModel->text_transform . ";";
    $css_properties .= "text-decoration: " . $themeModel->text_decoration . ";";
    $css_properties .= "font-family: " . $themeModel->font_family . ";";
    $css_properties .= "font-weight: " . $themeModel->font_weight . ";";
    $css_properties .= "text-overflow: " . $themeModel->text_overflow . ";";
    $css_properties .= "white-space: " . $themeModel->white_space . ";";
    $css_properties .= "text-orientation: " . $themeModel->text_orientation . ";";
    $css_properties .= "text-wrap: " . $themeModel->text_wrap . ";";
    $css_properties .= "text-justify: " . $themeModel->text_justify . ";";
    $css_properties .= "text-emphasis: " . $themeModel->text_emphasis . ";";
    $css_properties .= "text-spacing: " . $themeModel->text_spacing . ";";
    $css_properties .= "text-shadow-color: " . $themeModel->text_shadow_color . ";";
    $css_properties .= "text-shadow-x: " . $themeModel->text_shadow_x . ";";
    $css_properties .= "text-shadow-y: " . $themeModel->text_shadow_y . ";";
    // Add more CSS properties as needed
      // Check if the current column is the department or course column
    if ($columnName == 'department_id') {
        // Look up the corresponding department name from the $departmentList array
        $departmentName = isset($departmentList[$facultyModel->$columnName]) ? $departmentList[$facultyModel->$columnName] : '';
        echo '<div style="' . $css_properties . '">' . $departmentName . '</div>';
    } elseif ($columnName == 'course_id') {
        // Look up the corresponding course name from the $courseList array
        $courseName = isset($courseList[$facultyModel->$columnName]) ? $courseList[$facultyModel->$columnName] : '';
        echo '<div style="' . $css_properties . '">' . $courseName . '</div>';
    } else {
        // Apply the theme CSS properties to the current column
        echo '<div style="' . $css_properties . '">' . $facultyModel->$columnName . '</div>';
    }
}







    // Apply the theme CSS properties to the current column
   // echo '<div style="' . $css_properties . '">' . $facultyModel->$columnName . '</div>';
  
}


    //print_r($facultyModel);
    //die();
    // Fetch the theme ID for the current column from the mapping table
    /*$column_name = 'faculty_name'; // Change this to the current column name
    $mappingModel = FacultyColumnThemeMapping::model()->findByAttributes(array('column_name' => $column_name));
    $theme_id = $mappingModel->theme_ID;

    // Fetch the theme details from the themes table using the theme ID
    $themeModel = Themes::model()->findByPk($theme_id);
    $css_properties = "color: " . $themeModel->color . ";";
    $css_properties .= "font-size: " . $themeModel->font_size . ";";
    $css_properties .= "background-color: " . $themeModel->background_color . ";";
    $css_properties .= "padding: " . $themeModel->padding . ";";
    $css_properties .= "margin: " . $themeModel->margin . ";";
    $css_properties .= "border: " . $themeModel->border . ";";
    $css_properties .= "text-align: " . $themeModel->text_align . ";";
    // Add more CSS properties as needed

    // Apply the theme CSS properties to the current column
    echo '<div style="' . $css_properties . '">' . $facultyModel->faculty_name . '</div>';*/




// Assuming $model->faculty_id contains the faculty ID of the selected record

  /*  $facultyModel = Faculty::model()->findByPk($model->id);
if ($facultyModel !== null) {
    ?>
    <table>
        <tr>
            <td>ID:</td>
            <td><?php echo $facultyModel->id; ?></td>
        </tr>
        <tr>
            <td>Faculty Name:</td>
            <td><?php echo $facultyModel->faculty_name; ?></td>
        </tr>
        <tr>
            <td>Faculty Code:</td>
            <td><?php echo $facultyModel->faculty_code; ?></td>
        </tr>
        <tr>
            <td>Department ID:</td>
            <td><?php echo $facultyModel->department_id; ?></td>
        </tr>
        <tr>
            <td>Course ID:</td>
            <td><?php echo $facultyModel->course_id; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $facultyModel->email; ?></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><?php echo $facultyModel->phone; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $facultyModel->address; ?></td>
        </tr>
    </table>
    <?php
}*/
    // You can access the faculty details using the model attributes
   /* echo "ID: " . $facultyModel->id . "<br>";
    echo "Faculty Name: " . $facultyModel->faculty_name . "<br>";
    echo "Faculty Code: " . $facultyModel->faculty_code . "<br>";
    echo "Department ID: " . $facultyModel->department_id . "<br>";
    echo "Course ID: " . $facultyModel->course_id . "<br>";
    echo "Email: " . $facultyModel->email . "<br>";
    echo "Phone: " . $facultyModel->phone . "<br>";
    echo "Address: " . $facultyModel->address . "<br>";*/
    
//}



 $courseTypes = array();
    $models = FacultyCourseType::model()->findAllByAttributes(array('faculty_id' =>$model->id ));
    foreach ($models as $model) {
        $courseTypeModel = CourseType::model()->findByPk($model->course_type_id);
        if ($courseTypeModel !== null) {
            $courseTypes[] = $courseTypeModel->course_type;
        }
    }
    //print_r($courseTypes)
?>

<table>
  <thead>
    <tr>
      <th>Course Types</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($courseTypes as $type) : ?>
      <tr>
        <td><?php echo $type; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>




