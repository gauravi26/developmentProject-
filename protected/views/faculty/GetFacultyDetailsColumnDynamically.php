
<?php Yii::app()->clientScript->registerCoreScript('yiiactiveform'); ?>

<h1><?php echo "Get Faculty Deatails With CSS"; ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="http://localhost/newproject/AjaxFiles/faculty_dynamic.js"></script>


</h1>
<div class="form">
<?php echo CHtml::dropDownList('faculty-list', null, 
    CHtml::listData(Faculty::model()->findAll(), 'id', 'faculty_name'), 
    array('empty'=>'Select Faculty Name')); 
?>
</div>

<div class="form">
    
    <div >
    <table id="faculty-info">
        
            
    </table>
</div>

    
</div>

<div id="faculty-info">
    <!-- Faculty details will be displayed here -->
</div>
