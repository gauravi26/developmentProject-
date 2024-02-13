<h1>Custom Manage Page Themes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => new CActiveDataProvider('Themes'),
    'columns' => array(
        'ID',
        'theme_name',
        'description',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => array(
                'view' => array(
                    'label' => 'View',
                    'url' => 'Yii::app()->createUrl("themes/cssinputview", array("id" => $data->ID))',
                ),
                'update' => array(
                    'label' => 'Update',
                    'url' => 'Yii::app()->createUrl("themes/cssinputcustomupdate", array("id" => $data->ID))',
                ),
             // Grid view configuration
'delete' => array(
    'label' => 'Delete',
'url' => 'Yii::app()->createUrl("themes/customdelete", array("id" => $data->ID))',
    'click' => 'js:function() {
        if (confirm("Are you sure you want to delete this item?")) {
            $.ajax({
                type: "POST",
                url: $(this).attr("href"),
                success: function(data) {
                    // Assuming the server responds with JSON indicating success or failure
                    var response = $.parseJSON(data);
                    if (response.success) {
                        $.fn.yiiGridView.update("themes-grid");
                        // Optionally display a success message
                        alert(response.message);
                    } else {
                        // Handle the deletion failure
                        alert("Failed to delete item: " + response.message);
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    // Handle the AJAX error
                    alert("AJAX request failed: " + errorThrown);
                }
            });
        }
        return false;
    }',
),


            ),
        ),
    ),
)); ?>
