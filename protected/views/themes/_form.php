<?php
/* @var $this ThemesController */
/* @var $model Themes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'themes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'theme_name'); ?>
		<?php echo $form->textField($model,'theme_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'theme_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_size'); ?>
		<?php echo $form->textField($model,'font_size',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'font_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'background_color'); ?>
		<?php echo $form->textField($model,'background_color',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'background_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'background'); ?>
		<?php echo $form->textField($model,'background',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'background'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'padding'); ?>
		<?php echo $form->textField($model,'padding',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'padding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'margin'); ?>
		<?php echo $form->textField($model,'margin',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'margin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'border'); ?>
		<?php echo $form->textField($model,'border',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'border'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_align'); ?>
		<?php echo $form->textField($model,'text_align',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_align'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'display'); ?>
		<?php echo $form->textField($model,'display',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'display'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clear'); ?>
		<?php echo $form->textField($model,'clear',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'clear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_shadow'); ?>
		<?php echo $form->textField($model,'text_shadow',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_shadow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_indent'); ?>
		<?php echo $form->textField($model,'text_indent',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_indent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'letter_spacing'); ?>
		<?php echo $form->textField($model,'letter_spacing',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'letter_spacing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'word_spacing'); ?>
		<?php echo $form->textField($model,'word_spacing',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'word_spacing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'line_height'); ?>
		<?php echo $form->textField($model,'line_height',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'line_height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_transform'); ?>
		<?php echo $form->textField($model,'text_transform',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_transform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_decoration'); ?>
		<?php echo $form->textField($model,'text_decoration',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_decoration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_family'); ?>
		<?php echo $form->textField($model,'font_family',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'font_family'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_weight'); ?>
		<?php echo $form->textField($model,'font_weight',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'font_weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_overflow'); ?>
		<?php echo $form->textField($model,'text_overflow',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_overflow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'white_space'); ?>
		<?php echo $form->textField($model,'white_space',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'white_space'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_orientation'); ?>
		<?php echo $form->textField($model,'text_orientation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_orientation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_wrap'); ?>
		<?php echo $form->textField($model,'text_wrap',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_wrap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_justify'); ?>
		<?php echo $form->textField($model,'text_justify',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_justify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_emphasis'); ?>
		<?php echo $form->textField($model,'text_emphasis',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_emphasis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_spacing'); ?>
		<?php echo $form->textField($model,'text_spacing',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_spacing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_shadow_color'); ?>
		<?php echo $form->textField($model,'text_shadow_color',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_shadow_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_shadow_x'); ?>
		<?php echo $form->textField($model,'text_shadow_x',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_shadow_x'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_shadow_y'); ?>
		<?php echo $form->textField($model,'text_shadow_y',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'text_shadow_y'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'background_image'); ?>
		<?php echo $form->textField($model,'background_image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'background_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'background_repeat'); ?>
		<?php echo $form->textField($model,'background_repeat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'background_repeat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'background_attachment'); ?>
		<?php echo $form->textField($model,'background_attachment',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'background_attachment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'background_position'); ?>
		<?php echo $form->textField($model,'background_position',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'background_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'border_width'); ?>
		<?php echo $form->textField($model,'border_width',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'border_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'border_style'); ?>
		<?php echo $form->textField($model,'border_style',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'border_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'border_color'); ?>
		<?php echo $form->textField($model,'border_color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'border_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'margin_top'); ?>
		<?php echo $form->textField($model,'margin_top',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'margin_top'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'margin_right'); ?>
		<?php echo $form->textField($model,'margin_right',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'margin_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'margin_bottom'); ?>
		<?php echo $form->textField($model,'margin_bottom',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'margin_bottom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'margin_left'); ?>
		<?php echo $form->textField($model,'margin_left',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'margin_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'padding_top'); ?>
		<?php echo $form->textField($model,'padding_top',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'padding_top'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'padding_right'); ?>
		<?php echo $form->textField($model,'padding_right',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'padding_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'padding_bottom'); ?>
		<?php echo $form->textField($model,'padding_bottom',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'padding_bottom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'padding_left'); ?>
		<?php echo $form->textField($model,'padding_left',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'padding_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width'); ?>
		<?php echo $form->textField($model,'width',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_height'); ?>
		<?php echo $form->textField($model,'max_height',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'max_height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_width'); ?>
		<?php echo $form->textField($model,'max_width',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'max_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_height'); ?>
		<?php echo $form->textField($model,'min_height',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'min_height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_width'); ?>
		<?php echo $form->textField($model,'min_width',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'min_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'box_sizing'); ?>
		<?php echo $form->textField($model,'box_sizing',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'box_sizing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outline'); ?>
		<?php echo $form->textField($model,'outline',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'outline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outline_color'); ?>
		<?php echo $form->textField($model,'outline_color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'outline_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outline_style'); ?>
		<?php echo $form->textField($model,'outline_style',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'outline_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outline_width'); ?>
		<?php echo $form->textField($model,'outline_width',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'outline_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_color'); ?>
		<?php echo $form->textField($model,'text_color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_opacity'); ?>
		<?php echo $form->textField($model,'text_opacity',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_opacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_shadow_blur'); ?>
		<?php echo $form->textField($model,'text_shadow_blur',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_shadow_blur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_shadow_spread'); ?>
		<?php echo $form->textField($model,'text_shadow_spread',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_shadow_spread'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_style'); ?>
		<?php echo $form->textField($model,'font_style',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_variant'); ?>
		<?php echo $form->textField($model,'font_variant',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_variant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_stretch'); ?>
		<?php echo $form->textField($model,'font_stretch',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_stretch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_size_adjust'); ?>
		<?php echo $form->textField($model,'font_size_adjust',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_size_adjust'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_variant_caps'); ?>
		<?php echo $form->textField($model,'font_variant_caps',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_variant_caps'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_variant_numeric'); ?>
		<?php echo $form->textField($model,'font_variant_numeric',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_variant_numeric'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_variant_alternates'); ?>
		<?php echo $form->textField($model,'font_variant_alternates',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_variant_alternates'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_variant_ligatures'); ?>
		<?php echo $form->textField($model,'font_variant_ligatures',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_variant_ligatures'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_variant_position'); ?>
		<?php echo $form->textField($model,'font_variant_position',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_variant_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_kerning'); ?>
		<?php echo $form->textField($model,'font_kerning',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_kerning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_language_override'); ?>
		<?php echo $form->textField($model,'font_language_override',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_language_override'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_feature_settings'); ?>
		<?php echo $form->textField($model,'font_feature_settings',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'font_feature_settings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'icon_size'); ?>
		<?php echo $form->textField($model,'icon_size',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'icon_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'icon_color'); ?>
		<?php echo $form->textField($model,'icon_color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'icon_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_color'); ?>
		<?php echo $form->textField($model,'link_color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_hover_color'); ?>
		<?php echo $form->textField($model,'link_hover_color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link_hover_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_visited_color'); ?>
		<?php echo $form->textField($model,'link_visited_color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link_visited_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_style'); ?>
		<?php echo $form->textField($model,'list_style',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'list_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_style_type'); ?>
		<?php echo $form->textField($model,'list_style_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'list_style_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_style_position'); ?>
		<?php echo $form->textField($model,'list_style_position',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'list_style_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_template_rows'); ?>
		<?php echo $form->textField($model,'grid_template_rows',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_template_rows'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_template_columns'); ?>
		<?php echo $form->textField($model,'grid_template_columns',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_template_columns'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_template_areas'); ?>
		<?php echo $form->textField($model,'grid_template_areas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_template_areas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_template'); ?>
		<?php echo $form->textField($model,'grid_template',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_template'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_row_gap'); ?>
		<?php echo $form->textField($model,'grid_row_gap',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_row_gap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_column_gap'); ?>
		<?php echo $form->textField($model,'grid_column_gap',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_column_gap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_gap'); ?>
		<?php echo $form->textField($model,'grid_gap',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_gap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_auto_rows'); ?>
		<?php echo $form->textField($model,'grid_auto_rows',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_auto_rows'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_auto_columns'); ?>
		<?php echo $form->textField($model,'grid_auto_columns',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_auto_columns'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_auto_flow'); ?>
		<?php echo $form->textField($model,'grid_auto_flow',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_auto_flow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid'); ?>
		<?php echo $form->textField($model,'grid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_row_start'); ?>
		<?php echo $form->textField($model,'grid_row_start',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_row_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_column_start'); ?>
		<?php echo $form->textField($model,'grid_column_start',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_column_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_row_end'); ?>
		<?php echo $form->textField($model,'grid_row_end',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_row_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_column_end'); ?>
		<?php echo $form->textField($model,'grid_column_end',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_column_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_area'); ?>
		<?php echo $form->textField($model,'grid_area',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'justify_items'); ?>
		<?php echo $form->textField($model,'justify_items',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'justify_items'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'align_items'); ?>
		<?php echo $form->textField($model,'align_items',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'align_items'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'justify_content'); ?>
		<?php echo $form->textField($model,'justify_content',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'justify_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'align_content'); ?>
		<?php echo $form->textField($model,'align_content',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'align_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_items'); ?>
		<?php echo $form->textField($model,'place_items',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_items'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_content'); ?>
		<?php echo $form->textField($model,'place_content',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_template_rows_mobile'); ?>
		<?php echo $form->textField($model,'grid_template_rows_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_template_rows_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_template_columns_mobile'); ?>
		<?php echo $form->textField($model,'grid_template_columns_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_template_columns_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_template_areas_mobile'); ?>
		<?php echo $form->textField($model,'grid_template_areas_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_template_areas_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_template_mobile'); ?>
		<?php echo $form->textField($model,'grid_template_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_template_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_row_gap_mobile'); ?>
		<?php echo $form->textField($model,'grid_row_gap_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_row_gap_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_column_gap_mobile'); ?>
		<?php echo $form->textField($model,'grid_column_gap_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_column_gap_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_gap_mobile'); ?>
		<?php echo $form->textField($model,'grid_gap_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_gap_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_auto_rows_mobile'); ?>
		<?php echo $form->textField($model,'grid_auto_rows_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_auto_rows_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_auto_columns_mobile'); ?>
		<?php echo $form->textField($model,'grid_auto_columns_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_auto_columns_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_auto_flow_mobile'); ?>
		<?php echo $form->textField($model,'grid_auto_flow_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_auto_flow_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_mobile'); ?>
		<?php echo $form->textField($model,'grid_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_row_start_mobile'); ?>
		<?php echo $form->textField($model,'grid_row_start_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_row_start_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_column_start_mobile'); ?>
		<?php echo $form->textField($model,'grid_column_start_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_column_start_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_row_end_mobile'); ?>
		<?php echo $form->textField($model,'grid_row_end_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_row_end_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_column_end_mobile'); ?>
		<?php echo $form->textField($model,'grid_column_end_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_column_end_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grid_area_mobile'); ?>
		<?php echo $form->textField($model,'grid_area_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'grid_area_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'justify_items_mobile'); ?>
		<?php echo $form->textField($model,'justify_items_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'justify_items_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'align_items_mobile'); ?>
		<?php echo $form->textField($model,'align_items_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'align_items_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'justify_content_mobile'); ?>
		<?php echo $form->textField($model,'justify_content_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'justify_content_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'align_content_mobile'); ?>
		<?php echo $form->textField($model,'align_content_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'align_content_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_items_mobile'); ?>
		<?php echo $form->textField($model,'place_items_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_items_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_content_mobile'); ?>
		<?php echo $form->textField($model,'place_content_mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_content_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'float_property'); ?>
		<?php echo $form->textField($model,'float_property'); ?>
		<?php echo $form->error($model,'float_property'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_background_color'); ?>
		<?php echo $form->textField($model,'tab_background_color',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_background_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_border_color'); ?>
		<?php echo $form->textField($model,'tab_border_color',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_border_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_border_width'); ?>
		<?php echo $form->textField($model,'tab_border_width',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_border_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_padding'); ?>
		<?php echo $form->textField($model,'tab_padding',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_padding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_margin'); ?>
		<?php echo $form->textField($model,'tab_margin',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_margin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_font_color'); ?>
		<?php echo $form->textField($model,'tab_font_color',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_font_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_font_size'); ?>
		<?php echo $form->textField($model,'tab_font_size',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_font_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_font_weight'); ?>
		<?php echo $form->textField($model,'tab_font_weight',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_font_weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_text_transform'); ?>
		<?php echo $form->textField($model,'tab_text_transform',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_text_transform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tab_text_decoration'); ?>
		<?php echo $form->textField($model,'tab_text_decoration',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tab_text_decoration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'box_shadow'); ?>
		<?php echo $form->textField($model,'box_shadow',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'box_shadow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opacity'); ?>
		<?php echo $form->textField($model,'opacity',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'opacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transition_property'); ?>
		<?php echo $form->textField($model,'transition_property',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'transition_property'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transition_duration'); ?>
		<?php echo $form->textField($model,'transition_duration',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'transition_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transition_timing_function'); ?>
		<?php echo $form->textField($model,'transition_timing_function',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'transition_timing_function'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resize'); ?>
		<?php echo $form->textField($model,'resize',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'resize'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transform'); ?>
		<?php echo $form->textField($model,'transform',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'transform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transform_origin'); ?>
		<?php echo $form->textField($model,'transform_origin',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'transform_origin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'animation_name'); ?>
		<?php echo $form->textField($model,'animation_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'animation_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'animation_duration'); ?>
		<?php echo $form->textField($model,'animation_duration',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'animation_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'animation_timing_function'); ?>
		<?php echo $form->textField($model,'animation_timing_function',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'animation_timing_function'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'animation_delay'); ?>
		<?php echo $form->textField($model,'animation_delay',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'animation_delay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'animation_iteration_count'); ?>
		<?php echo $form->textField($model,'animation_iteration_count',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'animation_iteration_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'animation_direction'); ?>
		<?php echo $form->textField($model,'animation_direction',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'animation_direction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'border_radius'); ?>
		<?php echo $form->textField($model,'border_radius',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'border_radius'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'textarea'); ?>
		<?php echo $form->textField($model,'textarea',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'textarea'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->