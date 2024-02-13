<?php

/**
 * This is the model class for table "themes".
 *
 * The followings are the available columns in table 'themes':
 * @property integer $ID
 * @property string $theme_name
 * @property string $created_at
 * @property string $color
 * @property string $font_size
 * @property string $background_color
 * @property string $background
 * @property string $padding
 * @property string $margin
 * @property string $border
 * @property string $text_align
 * @property string $display
 * @property string $clear
 * @property string $position
 * @property string $text_shadow
 * @property string $text_indent
 * @property string $letter_spacing
 * @property string $word_spacing
 * @property string $line_height
 * @property string $text_transform
 * @property string $text_decoration
 * @property string $font_family
 * @property string $font_weight
 * @property string $text_overflow
 * @property string $white_space
 * @property string $text_orientation
 * @property string $text_wrap
 * @property string $text_justify
 * @property string $text_emphasis
 * @property string $text_spacing
 * @property string $text_shadow_color
 * @property string $text_shadow_x
 * @property string $text_shadow_y
 * @property string $background_image
 * @property string $background_repeat
 * @property string $background_attachment
 * @property string $background_position
 * @property string $border_width
 * @property string $border_style
 * @property string $border_color
 * @property string $margin_top
 * @property string $margin_right
 * @property string $margin_bottom
 * @property string $margin_left
 * @property string $padding_top
 * @property string $padding_right
 * @property string $padding_bottom
 * @property string $padding_left
 * @property string $height
 * @property string $width
 * @property string $max_height
 * @property string $max_width
 * @property string $min_height
 * @property string $min_width
 * @property string $box_sizing
 * @property string $outline
 * @property string $outline_color
 * @property string $outline_style
 * @property string $outline_width
 * @property string $text_color
 * @property string $text_opacity
 * @property string $text_shadow_blur
 * @property string $text_shadow_spread
 * @property string $font_style
 * @property string $font_variant
 * @property string $font_stretch
 * @property string $font_size_adjust
 * @property string $font_variant_caps
 * @property string $font_variant_numeric
 * @property string $font_variant_alternates
 * @property string $font_variant_ligatures
 * @property string $font_variant_position
 * @property string $font_kerning
 * @property string $font_language_override
 * @property string $font_feature_settings
 * @property string $icon_size
 * @property string $icon
 * @property string $link_color
 * @property string $hover
 * @property string $visited
 * @property string $list_style
 * @property string $list_style_type
 * @property string $list_style_position
 * @property string $grid_template_rows
 * @property string $grid_template_columns
 * @property string $grid_template_areas
 * @property string $grid_template
 * @property string $grid_row_gap
 * @property string $grid_column_gap
 * @property string $grid_gap
 * @property string $grid_auto_rows
 * @property string $grid_auto_columns
 * @property string $grid_auto_flow
 * @property string $grid
 * @property string $grid_row_start
 * @property string $grid_column_start
 * @property string $grid_row_end
 * @property string $grid_column_end
 * @property string $grid_area
 * @property string $justify_items
 * @property string $align_items
 * @property string $justify_content
 * @property string $align_content
 * @property string $place_items
 * @property string $place_content
 * @property string $grid_template_rows_mobile
 * @property string $grid_template_columns_mobile
 * @property string $grid_template_areas_mobile
 * @property string $grid_template_mobile
 * @property string $grid_row_gap_mobile
 * @property string $grid_column_gap_mobile
 * @property string $grid_gap_mobile
 * @property string $grid_auto_rows_mobile
 * @property string $grid_auto_columns_mobile
 * @property string $grid_auto_flow_mobile
 * @property string $grid_mobile
 * @property string $grid_row_start_mobile
 * @property string $grid_column_start_mobile
 * @property string $grid_row_end_mobile
 * @property string $grid_column_end_mobile
 * @property string $grid_area_mobile
 * @property string $justify_items_mobile
 * @property string $align_items_mobile
 * @property string $justify_content_mobile
 * @property string $align_content_mobile
 * @property string $place_items_mobile
 * @property string $place_content_mobile
 * @property double $float_property
 * @property string $tab_background_color
 * @property string $tab_border_color
 * @property string $tab_border_width
 * @property string $tab_padding
 * @property string $tab_margin
 * @property string $tab_font_color
 * @property string $tab_font_size
 * @property string $tab_font_weight
 * @property string $tab_text_transform
 * @property string $tab_text_decoration
 * @property string $box_shadow
 * @property string $opacity
 * @property string $transition_property
 * @property string $transition_duration
 * @property string $transition_timing_function
 * @property string $resize
 * @property string $transform
 * @property string $transform_origin
 * @property string $animation_name
 * @property string $animation_duration
 * @property string $animation_timing_function
 * @property string $animation_delay
 * @property string $animation_iteration_count
 * @property string $animation_direction
 * @property string $border_radius
 * @property string $textarea
 *
 * The followings are the available model relations:
 * @property ElementCssPropertiesCopy[] $elementCssPropertiesCopies
 * @property Faculty[] $faculties
 * @property FacultyColumnThemeMapping[] $facultyColumnThemeMappings
 * @property FacultyThemeMapping[] $facultyThemeMappings
 * @property FormTheme[] $formThemes
 * @property FormThemeMapping[] $formThemeMappings
 * @property SelectedTheme[] $selectedThemes
 * @property StudentInformation[] $studentInformations
 */
class Themes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'themes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('background, display, clear, position, resize, textarea', 'required'),
			array('float_property', 'numerical'),
			array(' color, font_size, background_color, padding, margin, border, text_align, text_shadow, text_indent, letter_spacing, word_spacing, line_height, text_transform, text_decoration, font_family, font_weight, text_overflow, white_space, text_orientation, text_wrap, text_justify, text_emphasis, text_spacing, text_shadow_color, text_shadow_x, text_shadow_y, tab_background_color, tab_border_color, tab_border_width, tab_padding, tab_margin, tab_font_color, tab_font_size, tab_font_weight, tab_text_transform, tab_text_decoration, transition_duration, transition_timing_function, transform_origin, animation_duration, animation_timing_function, animation_delay, animation_iteration_count, animation_direction', 'length', 'max'=>50),
			array('background, display, clear, position, background_repeat, background_attachment, background_position, border_width, border_style, border_color, margin_top, margin_right, margin_bottom, margin_left, padding_top, padding_right, padding_bottom, padding_left, height, width, max_height, max_width, min_height, min_width, box_sizing, outline, outline_color, outline_style, outline_width, text_color, text_opacity, text_shadow_blur, text_shadow_spread, font_style, font_variant, font_stretch, font_size_adjust, font_variant_caps, font_variant_numeric, font_variant_alternates, font_variant_ligatures, font_variant_position, font_kerning, font_language_override, font_feature_settings, icon_size, icon, link_color, hover, visited, list_style, list_style_type, list_style_position, grid_template_rows, grid_template_columns, grid_template_areas, grid_template, grid_row_gap, grid_column_gap, grid_gap, grid_auto_rows, grid_auto_columns, grid_auto_flow, grid, grid_row_start, grid_column_start, grid_row_end, grid_column_end, grid_area, justify_items, align_items, justify_content, align_content, place_items, place_content, grid_template_rows_mobile, grid_template_columns_mobile, grid_template_areas_mobile, grid_template_mobile, grid_row_gap_mobile, grid_column_gap_mobile, grid_gap_mobile, grid_auto_rows_mobile, grid_auto_columns_mobile, grid_auto_flow_mobile, grid_mobile, grid_row_start_mobile, grid_column_start_mobile, grid_row_end_mobile, grid_column_end_mobile, grid_area_mobile, justify_items_mobile, align_items_mobile, justify_content_mobile, align_content_mobile, place_items_mobile, place_content_mobile, box_shadow, transition_property, resize, transform, animation_name, border_radius, textarea', 'length', 'max'=>255),
			array('opacity', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, color, font_size, background_color, background, padding, margin, border, text_align, display, clear, position, text_shadow, text_indent, letter_spacing, word_spacing, line_height, text_transform, text_decoration, font_family, font_weight, text_overflow, white_space, text_orientation, text_wrap, text_justify, text_emphasis, text_spacing, text_shadow_color, text_shadow_x, text_shadow_y, background_repeat, background_attachment, background_position, border_width, border_style, border_color, margin_top, margin_right, margin_bottom, margin_left, padding_top, padding_right, padding_bottom, padding_left, height, width, max_height, max_width, min_height, min_width, box_sizing, outline, outline_color, outline_style, outline_width, text_color, text_opacity, text_shadow_blur, text_shadow_spread, font_style, font_variant, font_stretch, font_size_adjust, font_variant_caps, font_variant_numeric, font_variant_alternates, font_variant_ligatures, font_variant_position, font_kerning, font_language_override, font_feature_settings, icon_size, icon, link_color, hover, visited, list_style, list_style_type, list_style_position, grid_template_rows, grid_template_columns, grid_template_areas, grid_template, grid_row_gap, grid_column_gap, grid_gap, grid_auto_rows, grid_auto_columns, grid_auto_flow, grid, grid_row_start, grid_column_start, grid_row_end, grid_column_end, grid_area, justify_items, align_items, justify_content, align_content, place_items, place_content, grid_template_rows_mobile, grid_template_columns_mobile, grid_template_areas_mobile, grid_template_mobile, grid_row_gap_mobile, grid_column_gap_mobile, grid_gap_mobile, grid_auto_rows_mobile, grid_auto_columns_mobile, grid_auto_flow_mobile, grid_mobile, grid_row_start_mobile, grid_column_start_mobile, grid_row_end_mobile, grid_column_end_mobile, grid_area_mobile, justify_items_mobile, align_items_mobile, justify_content_mobile, align_content_mobile, place_items_mobile, place_content_mobile, float_property, tab_background_color, tab_border_color, tab_border_width, tab_padding, tab_margin, tab_font_color, tab_font_size, tab_font_weight, tab_text_transform, tab_text_decoration, box_shadow, opacity, transition_property, transition_duration, transition_timing_function, resize, transform, transform_origin, animation_name, animation_duration, animation_timing_function, animation_delay, animation_iteration_count, animation_direction, border_radius, textarea', 'safe', 'on'=>'search'),
//                        array('background_image', 'file', 'types' => 'jpg, jpeg, png'), // Adjust as needed

                    );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'elementCssPropertiesCopies' => array(self::HAS_MANY, 'ElementCssPropertiesCopy', 'theme_id'),
			'faculties' => array(self::HAS_MANY, 'Faculty', 'theme_id'),
			'facultyColumnThemeMappings' => array(self::HAS_MANY, 'FacultyColumnThemeMapping', 'theme_ID'),
			'facultyThemeMappings' => array(self::HAS_MANY, 'FacultyThemeMapping', 'theme_ID'),
			'formThemes' => array(self::HAS_MANY, 'FormTheme', 'theme_ID'),
			'formThemeMappings' => array(self::HAS_MANY, 'FormThemeMapping', 'theme_ID'),
			'selectedThemes' => array(self::HAS_MANY, 'SelectedTheme', 'theme_ID'),
			'studentInformations' => array(self::HAS_MANY, 'StudentInformation', 'theme_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'theme_name' => 'Theme Name',
			'created_at' => 'Created At',
			'color' => 'Color',
			'font_size' => 'Font Size',
			'background_color' => 'Background Color',
			'background' => 'Background',
			'padding' => 'Padding',
			'margin' => 'Margin',
			'border' => 'Border',
			'text_align' => 'Text Align',
			'display' => 'Display',
			'clear' => 'Clear',
			'position' => 'Position',
			'text_shadow' => 'Text Shadow',
			'text_indent' => 'Text Indent',
			'letter_spacing' => 'Letter Spacing',
			'word_spacing' => 'Word Spacing',
			'line_height' => 'Line Height',
			'text_transform' => 'Text Transform',
			'text_decoration' => 'Text Decoration',
			'font_family' => 'Font Family',
			'font_weight' => 'Font Weight',
			'text_overflow' => 'Text Overflow',
			'white_space' => 'White Space',
			'text_orientation' => 'Text Orientation',
			'text_wrap' => 'Text Wrap',
			'text_justify' => 'Text Justify',
			'text_emphasis' => 'Text Emphasis',
			'text_spacing' => 'Text Spacing',
			'text_shadow_color' => 'Text Shadow Color',
			'text_shadow_x' => 'Text Shadow X',
			'text_shadow_y' => 'Text Shadow Y',
			'background_image' => 'Background Image',
			'background_repeat' => 'Background Repeat',
			'background_attachment' => 'Background Attachment',
			'background_position' => 'Background Position',
			'border_width' => 'Border Width',
			'border_style' => 'Border Style',
			'border_color' => 'Border Color',
			'margin_top' => 'Margin Top',
			'margin_right' => 'Margin Right',
			'margin_bottom' => 'Margin Bottom',
			'margin_left' => 'Margin Left',
			'padding_top' => 'Padding Top',
			'padding_right' => 'Padding Right',
			'padding_bottom' => 'Padding Bottom',
			'padding_left' => 'Padding Left',
			'height' => 'Height',
			'width' => 'Width',
			'max_height' => 'Max Height',
			'max_width' => 'Max Width',
			'min_height' => 'Min Height',
			'min_width' => 'Min Width',
			'box_sizing' => 'Box Sizing',
			'outline' => 'Outline',
			'outline_color' => 'Outline Color',
			'outline_style' => 'Outline Style',
			'outline_width' => 'Outline Width',
			'text_color' => 'Text Color',
			'text_opacity' => 'Text Opacity',
			'text_shadow_blur' => 'Text Shadow Blur',
			'text_shadow_spread' => 'Text Shadow Spread',
			'font_style' => 'Font Style',
			'font_variant' => 'Font Variant',
			'font_stretch' => 'Font Stretch',
			'font_size_adjust' => 'Font Size Adjust',
			'font_variant_caps' => 'Font Variant Caps',
			'font_variant_numeric' => 'Font Variant Numeric',
			'font_variant_alternates' => 'Font Variant Alternates',
			'font_variant_ligatures' => 'Font Variant Ligatures',
			'font_variant_position' => 'Font Variant Position',
			'font_kerning' => 'Font Kerning',
			'font_language_override' => 'Font Language Override',
			'font_feature_settings' => 'Font Feature Settings',
			'icon_size' => 'Icon Size',
			'icon' => 'Icon',
			'link_color' => 'Link Color',
			'hover' => 'Hover',
			'visited' => 'Visited',
			'list_style' => 'List Style',
			'list_style_type' => 'List Style Type',
			'list_style_position' => 'List Style Position',
			'grid_template_rows' => 'Grid Template Rows',
			'grid_template_columns' => 'Grid Template Columns',
			'grid_template_areas' => 'Grid Template Areas',
			'grid_template' => 'Grid Template',
			'grid_row_gap' => 'Grid Row Gap',
			'grid_column_gap' => 'Grid Column Gap',
			'grid_gap' => 'Grid Gap',
			'grid_auto_rows' => 'Grid Auto Rows',
			'grid_auto_columns' => 'Grid Auto Columns',
			'grid_auto_flow' => 'Grid Auto Flow',
			'grid' => 'Grid',
			'grid_row_start' => 'Grid Row Start',
			'grid_column_start' => 'Grid Column Start',
			'grid_row_end' => 'Grid Row End',
			'grid_column_end' => 'Grid Column End',
			'grid_area' => 'Grid Area',
			'justify_items' => 'Justify Items',
			'align_items' => 'Align Items',
			'justify_content' => 'Justify Content',
			'align_content' => 'Align Content',
			'place_items' => 'Place Items',
			'place_content' => 'Place Content',
			'grid_template_rows_mobile' => 'Grid Template Rows Mobile',
			'grid_template_columns_mobile' => 'Grid Template Columns Mobile',
			'grid_template_areas_mobile' => 'Grid Template Areas Mobile',
			'grid_template_mobile' => 'Grid Template Mobile',
			'grid_row_gap_mobile' => 'Grid Row Gap Mobile',
			'grid_column_gap_mobile' => 'Grid Column Gap Mobile',
			'grid_gap_mobile' => 'Grid Gap Mobile',
			'grid_auto_rows_mobile' => 'Grid Auto Rows Mobile',
			'grid_auto_columns_mobile' => 'Grid Auto Columns Mobile',
			'grid_auto_flow_mobile' => 'Grid Auto Flow Mobile',
			'grid_mobile' => 'Grid Mobile',
			'grid_row_start_mobile' => 'Grid Row Start Mobile',
			'grid_column_start_mobile' => 'Grid Column Start Mobile',
			'grid_row_end_mobile' => 'Grid Row End Mobile',
			'grid_column_end_mobile' => 'Grid Column End Mobile',
			'grid_area_mobile' => 'Grid Area Mobile',
			'justify_items_mobile' => 'Justify Items Mobile',
			'align_items_mobile' => 'Align Items Mobile',
			'justify_content_mobile' => 'Justify Content Mobile',
			'align_content_mobile' => 'Align Content Mobile',
			'place_items_mobile' => 'Place Items Mobile',
			'place_content_mobile' => 'Place Content Mobile',
			'float_property' => 'Float Property',
			'tab_background_color' => 'Tab Background Color',
			'tab_border_color' => 'Tab Border Color',
			'tab_border_width' => 'Tab Border Width',
			'tab_padding' => 'Tab Padding',
			'tab_margin' => 'Tab Margin',
			'tab_font_color' => 'Tab Font Color',
			'tab_font_size' => 'Tab Font Size',
			'tab_font_weight' => 'Tab Font Weight',
			'tab_text_transform' => 'Tab Text Transform',
			'tab_text_decoration' => 'Tab Text Decoration',
			'box_shadow' => 'Box Shadow',
			'opacity' => 'Opacity',
			'transition_property' => 'Transition Property',
			'transition_duration' => 'Transition Duration',
			'transition_timing_function' => 'Transition Timing Function',
			'resize' => 'Resize',
			'transform' => 'Transform',
			'transform_origin' => 'Transform Origin',
			'animation_name' => 'Animation Name',
			'animation_duration' => 'Animation Duration',
			'animation_timing_function' => 'Animation Timing Function',
			'animation_delay' => 'Animation Delay',
			'animation_iteration_count' => 'Animation Iteration Count',
			'animation_direction' => 'Animation Direction',
			'border_radius' => 'Border Radius',
			'textarea' => 'Textarea',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('theme_name',$this->theme_name,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('font_size',$this->font_size,true);
		$criteria->compare('background_color',$this->background_color,true);
		$criteria->compare('background',$this->background,true);
		$criteria->compare('padding',$this->padding,true);
		$criteria->compare('margin',$this->margin,true);
		$criteria->compare('border',$this->border,true);
		$criteria->compare('text_align',$this->text_align,true);
		$criteria->compare('display',$this->display,true);
		$criteria->compare('clear',$this->clear,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('text_shadow',$this->text_shadow,true);
		$criteria->compare('text_indent',$this->text_indent,true);
		$criteria->compare('letter_spacing',$this->letter_spacing,true);
		$criteria->compare('word_spacing',$this->word_spacing,true);
		$criteria->compare('line_height',$this->line_height,true);
		$criteria->compare('text_transform',$this->text_transform,true);
		$criteria->compare('text_decoration',$this->text_decoration,true);
		$criteria->compare('font_family',$this->font_family,true);
		$criteria->compare('font_weight',$this->font_weight,true);
		$criteria->compare('text_overflow',$this->text_overflow,true);
		$criteria->compare('white_space',$this->white_space,true);
		$criteria->compare('text_orientation',$this->text_orientation,true);
		$criteria->compare('text_wrap',$this->text_wrap,true);
		$criteria->compare('text_justify',$this->text_justify,true);
		$criteria->compare('text_emphasis',$this->text_emphasis,true);
		$criteria->compare('text_spacing',$this->text_spacing,true);
		$criteria->compare('text_shadow_color',$this->text_shadow_color,true);
		$criteria->compare('text_shadow_x',$this->text_shadow_x,true);
		$criteria->compare('text_shadow_y',$this->text_shadow_y,true);
		$criteria->compare('background_image',$this->background_image,true);
		$criteria->compare('background_repeat',$this->background_repeat,true);
		$criteria->compare('background_attachment',$this->background_attachment,true);
		$criteria->compare('background_position',$this->background_position,true);
		$criteria->compare('border_width',$this->border_width,true);
		$criteria->compare('border_style',$this->border_style,true);
		$criteria->compare('border_color',$this->border_color,true);
		$criteria->compare('margin_top',$this->margin_top,true);
		$criteria->compare('margin_right',$this->margin_right,true);
		$criteria->compare('margin_bottom',$this->margin_bottom,true);
		$criteria->compare('margin_left',$this->margin_left,true);
		$criteria->compare('padding_top',$this->padding_top,true);
		$criteria->compare('padding_right',$this->padding_right,true);
		$criteria->compare('padding_bottom',$this->padding_bottom,true);
		$criteria->compare('padding_left',$this->padding_left,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('width',$this->width,true);
		$criteria->compare('max_height',$this->max_height,true);
		$criteria->compare('max_width',$this->max_width,true);
		$criteria->compare('min_height',$this->min_height,true);
		$criteria->compare('min_width',$this->min_width,true);
		$criteria->compare('box_sizing',$this->box_sizing,true);
		$criteria->compare('outline',$this->outline,true);
		$criteria->compare('outline_color',$this->outline_color,true);
		$criteria->compare('outline_style',$this->outline_style,true);
		$criteria->compare('outline_width',$this->outline_width,true);
		$criteria->compare('text_color',$this->text_color,true);
		$criteria->compare('text_opacity',$this->text_opacity,true);
		$criteria->compare('text_shadow_blur',$this->text_shadow_blur,true);
		$criteria->compare('text_shadow_spread',$this->text_shadow_spread,true);
		$criteria->compare('font_style',$this->font_style,true);
		$criteria->compare('font_variant',$this->font_variant,true);
		$criteria->compare('font_stretch',$this->font_stretch,true);
		$criteria->compare('font_size_adjust',$this->font_size_adjust,true);
		$criteria->compare('font_variant_caps',$this->font_variant_caps,true);
		$criteria->compare('font_variant_numeric',$this->font_variant_numeric,true);
		$criteria->compare('font_variant_alternates',$this->font_variant_alternates,true);
		$criteria->compare('font_variant_ligatures',$this->font_variant_ligatures,true);
		$criteria->compare('font_variant_position',$this->font_variant_position,true);
		$criteria->compare('font_kerning',$this->font_kerning,true);
		$criteria->compare('font_language_override',$this->font_language_override,true);
		$criteria->compare('font_feature_settings',$this->font_feature_settings,true);
		$criteria->compare('icon_size',$this->icon_size,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('link_color',$this->link_color,true);
		$criteria->compare('hover',$this->hover,true);
		$criteria->compare('visited',$this->visited,true);
		$criteria->compare('list_style',$this->list_style,true);
		$criteria->compare('list_style_type',$this->list_style_type,true);
		$criteria->compare('list_style_position',$this->list_style_position,true);
		$criteria->compare('grid_template_rows',$this->grid_template_rows,true);
		$criteria->compare('grid_template_columns',$this->grid_template_columns,true);
		$criteria->compare('grid_template_areas',$this->grid_template_areas,true);
		$criteria->compare('grid_template',$this->grid_template,true);
		$criteria->compare('grid_row_gap',$this->grid_row_gap,true);
		$criteria->compare('grid_column_gap',$this->grid_column_gap,true);
		$criteria->compare('grid_gap',$this->grid_gap,true);
		$criteria->compare('grid_auto_rows',$this->grid_auto_rows,true);
		$criteria->compare('grid_auto_columns',$this->grid_auto_columns,true);
		$criteria->compare('grid_auto_flow',$this->grid_auto_flow,true);
		$criteria->compare('grid',$this->grid,true);
		$criteria->compare('grid_row_start',$this->grid_row_start,true);
		$criteria->compare('grid_column_start',$this->grid_column_start,true);
		$criteria->compare('grid_row_end',$this->grid_row_end,true);
		$criteria->compare('grid_column_end',$this->grid_column_end,true);
		$criteria->compare('grid_area',$this->grid_area,true);
		$criteria->compare('justify_items',$this->justify_items,true);
		$criteria->compare('align_items',$this->align_items,true);
		$criteria->compare('justify_content',$this->justify_content,true);
		$criteria->compare('align_content',$this->align_content,true);
		$criteria->compare('place_items',$this->place_items,true);
		$criteria->compare('place_content',$this->place_content,true);
		$criteria->compare('grid_template_rows_mobile',$this->grid_template_rows_mobile,true);
		$criteria->compare('grid_template_columns_mobile',$this->grid_template_columns_mobile,true);
		$criteria->compare('grid_template_areas_mobile',$this->grid_template_areas_mobile,true);
		$criteria->compare('grid_template_mobile',$this->grid_template_mobile,true);
		$criteria->compare('grid_row_gap_mobile',$this->grid_row_gap_mobile,true);
		$criteria->compare('grid_column_gap_mobile',$this->grid_column_gap_mobile,true);
		$criteria->compare('grid_gap_mobile',$this->grid_gap_mobile,true);
		$criteria->compare('grid_auto_rows_mobile',$this->grid_auto_rows_mobile,true);
		$criteria->compare('grid_auto_columns_mobile',$this->grid_auto_columns_mobile,true);
		$criteria->compare('grid_auto_flow_mobile',$this->grid_auto_flow_mobile,true);
		$criteria->compare('grid_mobile',$this->grid_mobile,true);
		$criteria->compare('grid_row_start_mobile',$this->grid_row_start_mobile,true);
		$criteria->compare('grid_column_start_mobile',$this->grid_column_start_mobile,true);
		$criteria->compare('grid_row_end_mobile',$this->grid_row_end_mobile,true);
		$criteria->compare('grid_column_end_mobile',$this->grid_column_end_mobile,true);
		$criteria->compare('grid_area_mobile',$this->grid_area_mobile,true);
		$criteria->compare('justify_items_mobile',$this->justify_items_mobile,true);
		$criteria->compare('align_items_mobile',$this->align_items_mobile,true);
		$criteria->compare('justify_content_mobile',$this->justify_content_mobile,true);
		$criteria->compare('align_content_mobile',$this->align_content_mobile,true);
		$criteria->compare('place_items_mobile',$this->place_items_mobile,true);
		$criteria->compare('place_content_mobile',$this->place_content_mobile,true);
		$criteria->compare('float_property',$this->float_property);
		$criteria->compare('tab_background_color',$this->tab_background_color,true);
		$criteria->compare('tab_border_color',$this->tab_border_color,true);
		$criteria->compare('tab_border_width',$this->tab_border_width,true);
		$criteria->compare('tab_padding',$this->tab_padding,true);
		$criteria->compare('tab_margin',$this->tab_margin,true);
		$criteria->compare('tab_font_color',$this->tab_font_color,true);
		$criteria->compare('tab_font_size',$this->tab_font_size,true);
		$criteria->compare('tab_font_weight',$this->tab_font_weight,true);
		$criteria->compare('tab_text_transform',$this->tab_text_transform,true);
		$criteria->compare('tab_text_decoration',$this->tab_text_decoration,true);
		$criteria->compare('box_shadow',$this->box_shadow,true);
		$criteria->compare('opacity',$this->opacity,true);
		$criteria->compare('transition_property',$this->transition_property,true);
		$criteria->compare('transition_duration',$this->transition_duration,true);
		$criteria->compare('transition_timing_function',$this->transition_timing_function,true);
		$criteria->compare('resize',$this->resize,true);
		$criteria->compare('transform',$this->transform,true);
		$criteria->compare('transform_origin',$this->transform_origin,true);
		$criteria->compare('animation_name',$this->animation_name,true);
		$criteria->compare('animation_duration',$this->animation_duration,true);
		$criteria->compare('animation_timing_function',$this->animation_timing_function,true);
		$criteria->compare('animation_delay',$this->animation_delay,true);
		$criteria->compare('animation_iteration_count',$this->animation_iteration_count,true);
		$criteria->compare('animation_direction',$this->animation_direction,true);
		$criteria->compare('border_radius',$this->border_radius,true);
		$criteria->compare('textarea',$this->textarea,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Themes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
