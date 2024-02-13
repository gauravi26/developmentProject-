<?php
/* @var $this ThemesController */
/* @var $model Themes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'theme_name'); ?>
		<?php echo $form->textField($model,'theme_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_size'); ?>
		<?php echo $form->textField($model,'font_size',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'background_color'); ?>
		<?php echo $form->textField($model,'background_color',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'background'); ?>
		<?php echo $form->textField($model,'background',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padding'); ?>
		<?php echo $form->textField($model,'padding',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'margin'); ?>
		<?php echo $form->textField($model,'margin',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'border'); ?>
		<?php echo $form->textField($model,'border',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_align'); ?>
		<?php echo $form->textField($model,'text_align',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'display'); ?>
		<?php echo $form->textField($model,'display',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clear'); ?>
		<?php echo $form->textField($model,'clear',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_shadow'); ?>
		<?php echo $form->textField($model,'text_shadow',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_indent'); ?>
		<?php echo $form->textField($model,'text_indent',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_spacing'); ?>
		<?php echo $form->textField($model,'letter_spacing',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'word_spacing'); ?>
		<?php echo $form->textField($model,'word_spacing',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'line_height'); ?>
		<?php echo $form->textField($model,'line_height',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_transform'); ?>
		<?php echo $form->textField($model,'text_transform',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_decoration'); ?>
		<?php echo $form->textField($model,'text_decoration',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_family'); ?>
		<?php echo $form->textField($model,'font_family',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_weight'); ?>
		<?php echo $form->textField($model,'font_weight',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_overflow'); ?>
		<?php echo $form->textField($model,'text_overflow',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'white_space'); ?>
		<?php echo $form->textField($model,'white_space',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_orientation'); ?>
		<?php echo $form->textField($model,'text_orientation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_wrap'); ?>
		<?php echo $form->textField($model,'text_wrap',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_justify'); ?>
		<?php echo $form->textField($model,'text_justify',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_emphasis'); ?>
		<?php echo $form->textField($model,'text_emphasis',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_spacing'); ?>
		<?php echo $form->textField($model,'text_spacing',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_shadow_color'); ?>
		<?php echo $form->textField($model,'text_shadow_color',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_shadow_x'); ?>
		<?php echo $form->textField($model,'text_shadow_x',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_shadow_y'); ?>
		<?php echo $form->textField($model,'text_shadow_y',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'background_image'); ?>
		<?php echo $form->textField($model,'background_image',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'background_repeat'); ?>
		<?php echo $form->textField($model,'background_repeat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'background_attachment'); ?>
		<?php echo $form->textField($model,'background_attachment',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'background_position'); ?>
		<?php echo $form->textField($model,'background_position',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'border_width'); ?>
		<?php echo $form->textField($model,'border_width',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'border_style'); ?>
		<?php echo $form->textField($model,'border_style',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'border_color'); ?>
		<?php echo $form->textField($model,'border_color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'margin_top'); ?>
		<?php echo $form->textField($model,'margin_top',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'margin_right'); ?>
		<?php echo $form->textField($model,'margin_right',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'margin_bottom'); ?>
		<?php echo $form->textField($model,'margin_bottom',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'margin_left'); ?>
		<?php echo $form->textField($model,'margin_left',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padding_top'); ?>
		<?php echo $form->textField($model,'padding_top',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padding_right'); ?>
		<?php echo $form->textField($model,'padding_right',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padding_bottom'); ?>
		<?php echo $form->textField($model,'padding_bottom',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padding_left'); ?>
		<?php echo $form->textField($model,'padding_left',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width'); ?>
		<?php echo $form->textField($model,'width',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_height'); ?>
		<?php echo $form->textField($model,'max_height',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_width'); ?>
		<?php echo $form->textField($model,'max_width',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_height'); ?>
		<?php echo $form->textField($model,'min_height',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_width'); ?>
		<?php echo $form->textField($model,'min_width',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'box_sizing'); ?>
		<?php echo $form->textField($model,'box_sizing',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outline'); ?>
		<?php echo $form->textField($model,'outline',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outline_color'); ?>
		<?php echo $form->textField($model,'outline_color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outline_style'); ?>
		<?php echo $form->textField($model,'outline_style',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outline_width'); ?>
		<?php echo $form->textField($model,'outline_width',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_color'); ?>
		<?php echo $form->textField($model,'text_color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_opacity'); ?>
		<?php echo $form->textField($model,'text_opacity',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_shadow_blur'); ?>
		<?php echo $form->textField($model,'text_shadow_blur',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_shadow_spread'); ?>
		<?php echo $form->textField($model,'text_shadow_spread',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_style'); ?>
		<?php echo $form->textField($model,'font_style',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_variant'); ?>
		<?php echo $form->textField($model,'font_variant',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_stretch'); ?>
		<?php echo $form->textField($model,'font_stretch',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_size_adjust'); ?>
		<?php echo $form->textField($model,'font_size_adjust',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_variant_caps'); ?>
		<?php echo $form->textField($model,'font_variant_caps',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_variant_numeric'); ?>
		<?php echo $form->textField($model,'font_variant_numeric',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_variant_alternates'); ?>
		<?php echo $form->textField($model,'font_variant_alternates',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_variant_ligatures'); ?>
		<?php echo $form->textField($model,'font_variant_ligatures',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_variant_position'); ?>
		<?php echo $form->textField($model,'font_variant_position',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_kerning'); ?>
		<?php echo $form->textField($model,'font_kerning',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_language_override'); ?>
		<?php echo $form->textField($model,'font_language_override',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font_feature_settings'); ?>
		<?php echo $form->textField($model,'font_feature_settings',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'icon_size'); ?>
		<?php echo $form->textField($model,'icon_size',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'icon_color'); ?>
		<?php echo $form->textField($model,'icon_color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link_color'); ?>
		<?php echo $form->textField($model,'link_color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link_hover_color'); ?>
		<?php echo $form->textField($model,'link_hover_color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link_visited_color'); ?>
		<?php echo $form->textField($model,'link_visited_color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_style'); ?>
		<?php echo $form->textField($model,'list_style',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_style_type'); ?>
		<?php echo $form->textField($model,'list_style_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_style_position'); ?>
		<?php echo $form->textField($model,'list_style_position',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_template_rows'); ?>
		<?php echo $form->textField($model,'grid_template_rows',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_template_columns'); ?>
		<?php echo $form->textField($model,'grid_template_columns',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_template_areas'); ?>
		<?php echo $form->textField($model,'grid_template_areas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_template'); ?>
		<?php echo $form->textField($model,'grid_template',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_row_gap'); ?>
		<?php echo $form->textField($model,'grid_row_gap',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_column_gap'); ?>
		<?php echo $form->textField($model,'grid_column_gap',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_gap'); ?>
		<?php echo $form->textField($model,'grid_gap',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_auto_rows'); ?>
		<?php echo $form->textField($model,'grid_auto_rows',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_auto_columns'); ?>
		<?php echo $form->textField($model,'grid_auto_columns',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_auto_flow'); ?>
		<?php echo $form->textField($model,'grid_auto_flow',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid'); ?>
		<?php echo $form->textField($model,'grid',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_row_start'); ?>
		<?php echo $form->textField($model,'grid_row_start',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_column_start'); ?>
		<?php echo $form->textField($model,'grid_column_start',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_row_end'); ?>
		<?php echo $form->textField($model,'grid_row_end',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_column_end'); ?>
		<?php echo $form->textField($model,'grid_column_end',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_area'); ?>
		<?php echo $form->textField($model,'grid_area',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'justify_items'); ?>
		<?php echo $form->textField($model,'justify_items',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'align_items'); ?>
		<?php echo $form->textField($model,'align_items',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'justify_content'); ?>
		<?php echo $form->textField($model,'justify_content',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'align_content'); ?>
		<?php echo $form->textField($model,'align_content',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_items'); ?>
		<?php echo $form->textField($model,'place_items',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_content'); ?>
		<?php echo $form->textField($model,'place_content',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_template_rows_mobile'); ?>
		<?php echo $form->textField($model,'grid_template_rows_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_template_columns_mobile'); ?>
		<?php echo $form->textField($model,'grid_template_columns_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_template_areas_mobile'); ?>
		<?php echo $form->textField($model,'grid_template_areas_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_template_mobile'); ?>
		<?php echo $form->textField($model,'grid_template_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_row_gap_mobile'); ?>
		<?php echo $form->textField($model,'grid_row_gap_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_column_gap_mobile'); ?>
		<?php echo $form->textField($model,'grid_column_gap_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_gap_mobile'); ?>
		<?php echo $form->textField($model,'grid_gap_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_auto_rows_mobile'); ?>
		<?php echo $form->textField($model,'grid_auto_rows_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_auto_columns_mobile'); ?>
		<?php echo $form->textField($model,'grid_auto_columns_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_auto_flow_mobile'); ?>
		<?php echo $form->textField($model,'grid_auto_flow_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_mobile'); ?>
		<?php echo $form->textField($model,'grid_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_row_start_mobile'); ?>
		<?php echo $form->textField($model,'grid_row_start_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_column_start_mobile'); ?>
		<?php echo $form->textField($model,'grid_column_start_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_row_end_mobile'); ?>
		<?php echo $form->textField($model,'grid_row_end_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_column_end_mobile'); ?>
		<?php echo $form->textField($model,'grid_column_end_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grid_area_mobile'); ?>
		<?php echo $form->textField($model,'grid_area_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'justify_items_mobile'); ?>
		<?php echo $form->textField($model,'justify_items_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'align_items_mobile'); ?>
		<?php echo $form->textField($model,'align_items_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'justify_content_mobile'); ?>
		<?php echo $form->textField($model,'justify_content_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'align_content_mobile'); ?>
		<?php echo $form->textField($model,'align_content_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_items_mobile'); ?>
		<?php echo $form->textField($model,'place_items_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_content_mobile'); ?>
		<?php echo $form->textField($model,'place_content_mobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'float_property'); ?>
		<?php echo $form->textField($model,'float_property'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_background_color'); ?>
		<?php echo $form->textField($model,'tab_background_color',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_border_color'); ?>
		<?php echo $form->textField($model,'tab_border_color',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_border_width'); ?>
		<?php echo $form->textField($model,'tab_border_width',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_padding'); ?>
		<?php echo $form->textField($model,'tab_padding',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_margin'); ?>
		<?php echo $form->textField($model,'tab_margin',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_font_color'); ?>
		<?php echo $form->textField($model,'tab_font_color',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_font_size'); ?>
		<?php echo $form->textField($model,'tab_font_size',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_font_weight'); ?>
		<?php echo $form->textField($model,'tab_font_weight',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_text_transform'); ?>
		<?php echo $form->textField($model,'tab_text_transform',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tab_text_decoration'); ?>
		<?php echo $form->textField($model,'tab_text_decoration',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'box_shadow'); ?>
		<?php echo $form->textField($model,'box_shadow',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opacity'); ?>
		<?php echo $form->textField($model,'opacity',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transition_property'); ?>
		<?php echo $form->textField($model,'transition_property',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transition_duration'); ?>
		<?php echo $form->textField($model,'transition_duration',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transition_timing_function'); ?>
		<?php echo $form->textField($model,'transition_timing_function',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resize'); ?>
		<?php echo $form->textField($model,'resize',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transform'); ?>
		<?php echo $form->textField($model,'transform',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transform_origin'); ?>
		<?php echo $form->textField($model,'transform_origin',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'animation_name'); ?>
		<?php echo $form->textField($model,'animation_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'animation_duration'); ?>
		<?php echo $form->textField($model,'animation_duration',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'animation_timing_function'); ?>
		<?php echo $form->textField($model,'animation_timing_function',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'animation_delay'); ?>
		<?php echo $form->textField($model,'animation_delay',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'animation_iteration_count'); ?>
		<?php echo $form->textField($model,'animation_iteration_count',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'animation_direction'); ?>
		<?php echo $form->textField($model,'animation_direction',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'border_radius'); ?>
		<?php echo $form->textField($model,'border_radius',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'textarea'); ?>
		<?php echo $form->textField($model,'textarea',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->