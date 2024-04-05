<!doctype html></<html>
    <?php
    $form = Forms::model()->findAll(array('order'=>'FORM_NAME'));
    $formList = CHtml::listData($form, 'FORM_ID','FORM_NAME');
     ?>
    <head>
        <title>Delete Form Styles</title>
    </head>
    <body>
        <h2>Delete Styling of Form</h2>
        <form id="deleteForm" action = "index.php?r=formFieldCsspropertyValueMapping/formDelete" method="post">
        <label for="formId">Select Form to delete its styles</label>
       
        <select id="formId" name="formId">
             <option value="">Select Form</option>
            <?php foreach ($formList as $id => $formName): ?>
            <option value="<?php echo $id;?>"><?php echo $formName;?></option>
<?php endforeach;?>  
            </select>   
            <input type="submit" value="Submit"><br><br>
            <p style="font-weight: bolder">NOTE THIS WILL DELETE ALL STYLES FOR SELECTED FORM </p>
       </form>
           
    </body>
</html>
