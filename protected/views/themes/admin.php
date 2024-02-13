<?php
/* @var $this ThemesController */
/* @var $model Themes */

$this->breadcrumbs=array(
	'Themes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Themes', 'url'=>array('index')),
	array('label'=>'Create Themes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#themes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Themes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'themes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'theme_name',
		'color',
		'font_size',
		'background_color',
		'background',
		/*
		'padding',
		'margin',
		'border',
		'text_align',
		'display',
		'clear',
		'position',
		'text_shadow',
		'text_indent',
		'letter_spacing',
		'word_spacing',
		'line_height',
		'text_transform',
		'text_decoration',
		'font_family',
		'font_weight',
		'text_overflow',
		'white_space',
		'text_orientation',
		'text_wrap',
		'text_justify',
		'text_emphasis',
		'text_spacing',
		'text_shadow_color',
		'text_shadow_x',
		'text_shadow_y',
		'background_image',
		'background_repeat',
		'background_attachment',
		'background_position',
		'border_width',
		'border_style',
		'border_color',
		'margin_top',
		'margin_right',
		'margin_bottom',
		'margin_left',
		'padding_top',
		'padding_right',
		'padding_bottom',
		'padding_left',
		'height',
		'width',
		'max_height',
		'max_width',
		'min_height',
		'min_width',
		'box_sizing',
		'outline',
		'outline_color',
		'outline_style',
		'outline_width',
		'text_color',
		'text_opacity',
		'text_shadow_blur',
		'text_shadow_spread',
		'font_style',
		'font_variant',
		'font_stretch',
		'font_size_adjust',
		'font_variant_caps',
		'font_variant_numeric',
		'font_variant_alternates',
		'font_variant_ligatures',
		'font_variant_position',
		'font_kerning',
		'font_language_override',
		'font_feature_settings',
		'icon_size',
		'icon_color',
		'link_color',
		'link_hover_color',
		'link_visited_color',
		'list_style',
		'list_style_type',
		'list_style_position',
		'grid_template_rows',
		'grid_template_columns',
		'grid_template_areas',
		'grid_template',
		'grid_row_gap',
		'grid_column_gap',
		'grid_gap',
		'grid_auto_rows',
		'grid_auto_columns',
		'grid_auto_flow',
		'grid',
		'grid_row_start',
		'grid_column_start',
		'grid_row_end',
		'grid_column_end',
		'grid_area',
		'justify_items',
		'align_items',
		'justify_content',
		'align_content',
		'place_items',
		'place_content',
		'grid_template_rows_mobile',
		'grid_template_columns_mobile',
		'grid_template_areas_mobile',
		'grid_template_mobile',
		'grid_row_gap_mobile',
		'grid_column_gap_mobile',
		'grid_gap_mobile',
		'grid_auto_rows_mobile',
		'grid_auto_columns_mobile',
		'grid_auto_flow_mobile',
		'grid_mobile',
		'grid_row_start_mobile',
		'grid_column_start_mobile',
		'grid_row_end_mobile',
		'grid_column_end_mobile',
		'grid_area_mobile',
		'justify_items_mobile',
		'align_items_mobile',
		'justify_content_mobile',
		'align_content_mobile',
		'place_items_mobile',
		'place_content_mobile',
		'float_property',
		'tab_background_color',
		'tab_border_color',
		'tab_border_width',
		'tab_padding',
		'tab_margin',
		'tab_font_color',
		'tab_font_size',
		'tab_font_weight',
		'tab_text_transform',
		'tab_text_decoration',
		'box_shadow',
		'opacity',
		'transition_property',
		'transition_duration',
		'transition_timing_function',
		'resize',
		'transform',
		'transform_origin',
		'animation_name',
		'animation_duration',
		'animation_timing_function',
		'animation_delay',
		'animation_iteration_count',
		'animation_direction',
		'border_radius',
		'textarea',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
