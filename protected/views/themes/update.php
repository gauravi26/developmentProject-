<?php
/* @var $this ThemesController */
/* @var $theme Themes */

$this->breadcrumbs=array(
	'Themes'=>array('index'),
	$theme->ID=>array('cssinputview','id'=>$theme->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Themes', 'url'=>array('index')),
	array('label'=>'Create Themes', 'url'=>array('cssinput')),
	array('label'=>'View Themes', 'url'=>array('cssinputview', 'id'=>$Themes->ID)),
	array('label'=>'Manage Themes', 'url'=>array('admin')),
);
?>

<h1>Update Themes <?php echo $theme->ID; ?></h1>

<?php $this->renderPartial('cssinputupdate', array('model'=>$Themes)); ?>
