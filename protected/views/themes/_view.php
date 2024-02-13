<?php
/* @var $this ThemesController */
/* @var $data Themes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme_name')); ?>:</b>
	<?php echo CHtml::encode($data->theme_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_size')); ?>:</b>
	<?php echo CHtml::encode($data->font_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('background_color')); ?>:</b>
	<?php echo CHtml::encode($data->background_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('background')); ?>:</b>
	<?php echo CHtml::encode($data->background); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padding')); ?>:</b>
	<?php echo CHtml::encode($data->padding); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('margin')); ?>:</b>
	<?php echo CHtml::encode($data->margin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('border')); ?>:</b>
	<?php echo CHtml::encode($data->border); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_align')); ?>:</b>
	<?php echo CHtml::encode($data->text_align); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('display')); ?>:</b>
	<?php echo CHtml::encode($data->display); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clear')); ?>:</b>
	<?php echo CHtml::encode($data->clear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_shadow')); ?>:</b>
	<?php echo CHtml::encode($data->text_shadow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_indent')); ?>:</b>
	<?php echo CHtml::encode($data->text_indent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('letter_spacing')); ?>:</b>
	<?php echo CHtml::encode($data->letter_spacing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('word_spacing')); ?>:</b>
	<?php echo CHtml::encode($data->word_spacing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('line_height')); ?>:</b>
	<?php echo CHtml::encode($data->line_height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_transform')); ?>:</b>
	<?php echo CHtml::encode($data->text_transform); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_decoration')); ?>:</b>
	<?php echo CHtml::encode($data->text_decoration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_family')); ?>:</b>
	<?php echo CHtml::encode($data->font_family); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_weight')); ?>:</b>
	<?php echo CHtml::encode($data->font_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_overflow')); ?>:</b>
	<?php echo CHtml::encode($data->text_overflow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('white_space')); ?>:</b>
	<?php echo CHtml::encode($data->white_space); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_orientation')); ?>:</b>
	<?php echo CHtml::encode($data->text_orientation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_wrap')); ?>:</b>
	<?php echo CHtml::encode($data->text_wrap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_justify')); ?>:</b>
	<?php echo CHtml::encode($data->text_justify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_emphasis')); ?>:</b>
	<?php echo CHtml::encode($data->text_emphasis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_spacing')); ?>:</b>
	<?php echo CHtml::encode($data->text_spacing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_shadow_color')); ?>:</b>
	<?php echo CHtml::encode($data->text_shadow_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_shadow_x')); ?>:</b>
	<?php echo CHtml::encode($data->text_shadow_x); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_shadow_y')); ?>:</b>
	<?php echo CHtml::encode($data->text_shadow_y); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('background_image')); ?>:</b>
	<?php echo CHtml::encode($data->background_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('background_repeat')); ?>:</b>
	<?php echo CHtml::encode($data->background_repeat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('background_attachment')); ?>:</b>
	<?php echo CHtml::encode($data->background_attachment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('background_position')); ?>:</b>
	<?php echo CHtml::encode($data->background_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('border_width')); ?>:</b>
	<?php echo CHtml::encode($data->border_width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('border_style')); ?>:</b>
	<?php echo CHtml::encode($data->border_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('border_color')); ?>:</b>
	<?php echo CHtml::encode($data->border_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('margin_top')); ?>:</b>
	<?php echo CHtml::encode($data->margin_top); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('margin_right')); ?>:</b>
	<?php echo CHtml::encode($data->margin_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('margin_bottom')); ?>:</b>
	<?php echo CHtml::encode($data->margin_bottom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('margin_left')); ?>:</b>
	<?php echo CHtml::encode($data->margin_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padding_top')); ?>:</b>
	<?php echo CHtml::encode($data->padding_top); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padding_right')); ?>:</b>
	<?php echo CHtml::encode($data->padding_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padding_bottom')); ?>:</b>
	<?php echo CHtml::encode($data->padding_bottom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padding_left')); ?>:</b>
	<?php echo CHtml::encode($data->padding_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width')); ?>:</b>
	<?php echo CHtml::encode($data->width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_height')); ?>:</b>
	<?php echo CHtml::encode($data->max_height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_width')); ?>:</b>
	<?php echo CHtml::encode($data->max_width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_height')); ?>:</b>
	<?php echo CHtml::encode($data->min_height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_width')); ?>:</b>
	<?php echo CHtml::encode($data->min_width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('box_sizing')); ?>:</b>
	<?php echo CHtml::encode($data->box_sizing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outline')); ?>:</b>
	<?php echo CHtml::encode($data->outline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outline_color')); ?>:</b>
	<?php echo CHtml::encode($data->outline_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outline_style')); ?>:</b>
	<?php echo CHtml::encode($data->outline_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outline_width')); ?>:</b>
	<?php echo CHtml::encode($data->outline_width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_color')); ?>:</b>
	<?php echo CHtml::encode($data->text_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_opacity')); ?>:</b>
	<?php echo CHtml::encode($data->text_opacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_shadow_blur')); ?>:</b>
	<?php echo CHtml::encode($data->text_shadow_blur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_shadow_spread')); ?>:</b>
	<?php echo CHtml::encode($data->text_shadow_spread); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_style')); ?>:</b>
	<?php echo CHtml::encode($data->font_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_variant')); ?>:</b>
	<?php echo CHtml::encode($data->font_variant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_stretch')); ?>:</b>
	<?php echo CHtml::encode($data->font_stretch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_size_adjust')); ?>:</b>
	<?php echo CHtml::encode($data->font_size_adjust); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_variant_caps')); ?>:</b>
	<?php echo CHtml::encode($data->font_variant_caps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_variant_numeric')); ?>:</b>
	<?php echo CHtml::encode($data->font_variant_numeric); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_variant_alternates')); ?>:</b>
	<?php echo CHtml::encode($data->font_variant_alternates); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_variant_ligatures')); ?>:</b>
	<?php echo CHtml::encode($data->font_variant_ligatures); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_variant_position')); ?>:</b>
	<?php echo CHtml::encode($data->font_variant_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_kerning')); ?>:</b>
	<?php echo CHtml::encode($data->font_kerning); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_language_override')); ?>:</b>
	<?php echo CHtml::encode($data->font_language_override); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font_feature_settings')); ?>:</b>
	<?php echo CHtml::encode($data->font_feature_settings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icon_size')); ?>:</b>
	<?php echo CHtml::encode($data->icon_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icon_color')); ?>:</b>
	<?php echo CHtml::encode($data->icon_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_color')); ?>:</b>
	<?php echo CHtml::encode($data->link_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_hover_color')); ?>:</b>
	<?php echo CHtml::encode($data->link_hover_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_visited_color')); ?>:</b>
	<?php echo CHtml::encode($data->link_visited_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_style')); ?>:</b>
	<?php echo CHtml::encode($data->list_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_style_type')); ?>:</b>
	<?php echo CHtml::encode($data->list_style_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_style_position')); ?>:</b>
	<?php echo CHtml::encode($data->list_style_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_template_rows')); ?>:</b>
	<?php echo CHtml::encode($data->grid_template_rows); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_template_columns')); ?>:</b>
	<?php echo CHtml::encode($data->grid_template_columns); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_template_areas')); ?>:</b>
	<?php echo CHtml::encode($data->grid_template_areas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_template')); ?>:</b>
	<?php echo CHtml::encode($data->grid_template); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_row_gap')); ?>:</b>
	<?php echo CHtml::encode($data->grid_row_gap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_column_gap')); ?>:</b>
	<?php echo CHtml::encode($data->grid_column_gap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_gap')); ?>:</b>
	<?php echo CHtml::encode($data->grid_gap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_auto_rows')); ?>:</b>
	<?php echo CHtml::encode($data->grid_auto_rows); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_auto_columns')); ?>:</b>
	<?php echo CHtml::encode($data->grid_auto_columns); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_auto_flow')); ?>:</b>
	<?php echo CHtml::encode($data->grid_auto_flow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid')); ?>:</b>
	<?php echo CHtml::encode($data->grid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_row_start')); ?>:</b>
	<?php echo CHtml::encode($data->grid_row_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_column_start')); ?>:</b>
	<?php echo CHtml::encode($data->grid_column_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_row_end')); ?>:</b>
	<?php echo CHtml::encode($data->grid_row_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_column_end')); ?>:</b>
	<?php echo CHtml::encode($data->grid_column_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_area')); ?>:</b>
	<?php echo CHtml::encode($data->grid_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('justify_items')); ?>:</b>
	<?php echo CHtml::encode($data->justify_items); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('align_items')); ?>:</b>
	<?php echo CHtml::encode($data->align_items); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('justify_content')); ?>:</b>
	<?php echo CHtml::encode($data->justify_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('align_content')); ?>:</b>
	<?php echo CHtml::encode($data->align_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_items')); ?>:</b>
	<?php echo CHtml::encode($data->place_items); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_content')); ?>:</b>
	<?php echo CHtml::encode($data->place_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_template_rows_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_template_rows_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_template_columns_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_template_columns_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_template_areas_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_template_areas_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_template_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_template_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_row_gap_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_row_gap_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_column_gap_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_column_gap_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_gap_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_gap_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_auto_rows_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_auto_rows_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_auto_columns_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_auto_columns_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_auto_flow_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_auto_flow_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_row_start_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_row_start_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_column_start_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_column_start_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_row_end_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_row_end_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_column_end_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_column_end_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grid_area_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->grid_area_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('justify_items_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->justify_items_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('align_items_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->align_items_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('justify_content_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->justify_content_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('align_content_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->align_content_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_items_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->place_items_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_content_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->place_content_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('float_property')); ?>:</b>
	<?php echo CHtml::encode($data->float_property); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_background_color')); ?>:</b>
	<?php echo CHtml::encode($data->tab_background_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_border_color')); ?>:</b>
	<?php echo CHtml::encode($data->tab_border_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_border_width')); ?>:</b>
	<?php echo CHtml::encode($data->tab_border_width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_padding')); ?>:</b>
	<?php echo CHtml::encode($data->tab_padding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_margin')); ?>:</b>
	<?php echo CHtml::encode($data->tab_margin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_font_color')); ?>:</b>
	<?php echo CHtml::encode($data->tab_font_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_font_size')); ?>:</b>
	<?php echo CHtml::encode($data->tab_font_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_font_weight')); ?>:</b>
	<?php echo CHtml::encode($data->tab_font_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_text_transform')); ?>:</b>
	<?php echo CHtml::encode($data->tab_text_transform); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tab_text_decoration')); ?>:</b>
	<?php echo CHtml::encode($data->tab_text_decoration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('box_shadow')); ?>:</b>
	<?php echo CHtml::encode($data->box_shadow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opacity')); ?>:</b>
	<?php echo CHtml::encode($data->opacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transition_property')); ?>:</b>
	<?php echo CHtml::encode($data->transition_property); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transition_duration')); ?>:</b>
	<?php echo CHtml::encode($data->transition_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transition_timing_function')); ?>:</b>
	<?php echo CHtml::encode($data->transition_timing_function); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resize')); ?>:</b>
	<?php echo CHtml::encode($data->resize); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transform')); ?>:</b>
	<?php echo CHtml::encode($data->transform); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transform_origin')); ?>:</b>
	<?php echo CHtml::encode($data->transform_origin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('animation_name')); ?>:</b>
	<?php echo CHtml::encode($data->animation_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('animation_duration')); ?>:</b>
	<?php echo CHtml::encode($data->animation_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('animation_timing_function')); ?>:</b>
	<?php echo CHtml::encode($data->animation_timing_function); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('animation_delay')); ?>:</b>
	<?php echo CHtml::encode($data->animation_delay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('animation_iteration_count')); ?>:</b>
	<?php echo CHtml::encode($data->animation_iteration_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('animation_direction')); ?>:</b>
	<?php echo CHtml::encode($data->animation_direction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('border_radius')); ?>:</b>
	<?php echo CHtml::encode($data->border_radius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('textarea')); ?>:</b>
	<?php echo CHtml::encode($data->textarea); ?>
	<br />

	*/ ?>

</div>