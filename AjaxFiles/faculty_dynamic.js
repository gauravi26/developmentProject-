 /* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


$(document).ready(function() {
    $('#faculty-list').change(function()
    
                  

    
    {
        
      /* alert("Gauravi");
                  die();*/
       // var facultyList = $(this).val();
        $.ajax({
            url: 'index.php?r=faculty/fetchFaculty&faculty_id=',
            //alert("Gauravi");
                //  die();
            type: 'GET',
            data: {faculty_id: $(this).val()},
            dataType: 'json',
            success: function(response) {
                
                
                                var html = '';
                 html += '<h2>Faculty Information</h2>';
                 html += '<table>';
                 html += '<tr><th>Faculty Code</th><td>' + response.faculty_code + '</td></tr>';
                 html += '<tr><th>Name</th><td>' + response.faculty_name + '</td></tr>';
                 html += '<tr><th>Email</th><td>' + response.email + '</td></tr>';
                 html += '<tr><th>Phone</th><td>' + response.phone + '</td></tr>';
                 html += '</table>';
                 html += '<h2>Course Information</h2>';
                 html += '<p>Course Name: ' + response.course_name + '</p>';
                 html += '<p>Department: ' + response.department_name + '</p>';
                 html += '<p>Course Type: ' + response.courseTypes + '</p>';

                 // Apply theme properties to HTML elements
$('body').css({
  'background-color': response.themeProperties['background-color'],
  'font-size': response.themeProperties['font-size'],
  'color': response.themeProperties['color'],
  // Add the remaining properties here
  'padding': response.themeProperties['padding'],
  'margin': response.themeProperties['margin'],
  'border': response.themeProperties['border'],
  'text-align': response.themeProperties['text_align'],
  'text-shadow': response.themeProperties['text_shadow'],
  'text-indent': response.themeProperties['text_indent'],
  'letter-spacing': response.themeProperties['letter_spacing'],
  'word-spacing': response.themeProperties['word_spacing'],
  'line-height': response.themeProperties['line_height'],
  'text-transform': response.themeProperties['text_transform'],
  'text-decoration': response.themeProperties['text_decoration'],
  'font-family': response.themeProperties['font_family'],
  'font-weight': response.themeProperties['font_weight'],
  'text-overflow': response.themeProperties['text_overflow'],
  'white-space': response.themeProperties['white_space'],
  'text-orientation': response.themeProperties['text_orientation'],
  'text-wrap': response.themeProperties['text_wrap'],
  'text-justify': response.themeProperties['text_justify'],
  'text-emphasis': response.themeProperties['text_emphasis'],
  'text-spacing': response.themeProperties['text_spacing'],
  'text-shadow-color': response.themeProperties['text_shadow_color'],
  'text-shadow-x': response.themeProperties['text_shadow_x'],
  'text-shadow-y': response.themeProperties['text_shadow_y'],
  'background-image': response.themeProperties['background_image'],
  'background-repeat': response.themeProperties['background_repeat'],
  'background-attachment': response.themeProperties['background_attachment'],
  'background-position': response.themeProperties['background_position'],
  'border-width': response.themeProperties['border_width'],
  'border-style': response.themeProperties['border_style'],
  'border-color': response.themeProperties['border_color'],
  'margin-top': response.themeProperties['margin_top'],
  'margin-right': response.themeProperties['margin_right'],
  'margin-bottom': response.themeProperties['margin_bottom'],
  'margin-left': response.themeProperties['margin_left'],
  'padding-top': response.themeProperties['padding_top'],
  'padding-right': response.themeProperties['padding_right'],
  'padding-bottom': response.themeProperties['padding_bottom'],
  'padding-left': response.themeProperties['padding_left'],
  'height': response.themeProperties['height'],
  'width': response.themeProperties['width'],
  'max-height': response.themeProperties['max_height'],
  'max-width': response.themeProperties['max_width'],
  'min-height': response.themeProperties['min_height'],
  'min-width': response.themeProperties['min_width'],
  'box-sizing': response.themeProperties['box_sizing'],
  'outline': response.themeProperties['outline'],
  'outline-color': response.themeProperties['outline_color'],
  'outline-style': response.themeProperties['outline_style'],
  'outline-width': response.themeProperties['outline_width'],
  'text-color': response.themeProperties['text_color'],
  'text-opacity': response.themeProperties['text_opacity'],
  'text-shadow-blur': response.themeProperties['text_shadow_blur'],
  'text-shadow-spread': response.themeProperties['text_shadow_spread'],
  'font-style': response.themeProperties['font_style'],
  'font-variant': response.themeProperties['font_variant'],
  'font-stretch': response.themeProperties['font_stretch'],
  'font-size-adjust': response.themeProperties['font_size_adjust'],
  'font-variant-caps': response.themeProperties['font_variant_caps'],
  'font-variant-numeric': response.themeProperties['font_variant_numeric'],
  'font-variant-alternates': response.themeProperties['font_variant_alternates'],
  'font-variant-ligatures': response.themeProperties['font_variant_ligatures'],
  'font-variant-position': response.themeProperties['font_variant_position'],
  'font-kerning': response.themeProperties['font_kerning'],
  'font-language-override': response.themeProperties['font_language_override'],
  'font-feature-settings': response.themeProperties['font_feature_settings'],
  'icon-size': response.themeProperties['icon_size'],
  'icon-color': response.themeProperties['icon_color'],
  'link-color': response.themeProperties['link_color'],
  'link-hover-color': response.themeProperties['link_hover_color'],
  'link-visited-color': response.themeProperties['link_visited_color'],
  'list-style': response.themeProperties['list_style'],
  'list-style-type': response.themeProperties['list_style_type'],
  'list-style-position': response.themeProperties['list_style_position'],
  'grid-template-rows': response.themeProperties['grid_template_rows'],
  'grid-template-columns': response.themeProperties['grid_template_columns'],
  'grid-template-areas': response.themeProperties['grid_template_areas'],
  'grid-template': response.themeProperties['grid_template'],
  'grid-row-gap': response.themeProperties['grid_row_gap'],
  'grid-column-gap': response.themeProperties['grid_column_gap'],
  'grid-gap': response.themeProperties['grid_gap'],
  'grid-auto-rows': response.themeProperties['grid_auto_rows'],
  'grid-auto-columns': response.themeProperties['grid_auto_columns'],
  'grid-auto-flow': response.themeProperties['grid_auto_flow'],
  'grid': response.themeProperties['grid'],
  'grid-row-start': response.themeProperties['grid_row_start'],
  'grid-column-start': response.themeProperties['grid_column_start'],
  'grid-row-end': response.themeProperties['grid_row_end'],
  'grid-column-end': response.themeProperties['grid_column_end'],
  'grid-area': response.themeProperties['grid_area'],
  'justify-items': response.themeProperties['justify_items'],
  'align-items': response.themeProperties['align_items'],
  'justify-content': response.themeProperties['justify_content'],
  'align-content': response.themeProperties['align_content'],
  'place-items': response.themeProperties['place_items'],
  'place-content': response.themeProperties['place_content'],
  'grid-template-rows-mobile': response.themeProperties['grid_template_rows_mobile'],
  'grid-template-columns-mobile': response.themeProperties['grid_template_columns_mobile'],
  'grid-template-areas-mobile': response.themeProperties['grid_template_areas_mobile'],
  'grid-template-mobile': response.themeProperties['grid_template_mobile'],
  'grid-row-gap-mobile': response.themeProperties['grid_row_gap_mobile'],
  'grid-column-gap-mobile': response.themeProperties['grid_column_gap_mobile'],
  'grid-gap-mobile': response.themeProperties['grid_gap_mobile'],
  'grid-auto-rows-mobile': response.themeProperties['grid_auto_rows_mobile'],
  'grid-auto-columns-mobile': response.themeProperties['grid_auto_columns_mobile'],
  'grid-auto-flow-mobile': response.themeProperties['grid_auto_flow_mobile'],
  'grid-mobile': response.themeProperties['grid_mobile'],
  'grid-row-start-mobile': response.themeProperties['grid_row_start_mobile'],
  'grid-column-start-mobile': response.themeProperties['grid_column_start_mobile'],
  'grid-row-end-mobile': response.themeProperties['grid_row_end_mobile'],
  'grid-column-end-mobile': response.themeProperties['grid_column_end_mobile'],
  'grid-area-mobile': response.themeProperties['grid_area_mobile'],
  'justify-items-mobile': response.themeProperties['justify_items_mobile'],
  'align-items-mobile': response.themeProperties['align_items_mobile'],
  'justify-content-mobile': response.themeProperties['justify_content_mobile'],
  'align-content-mobile': response.themeProperties['align_content_mobile'],
  'place-items-mobile': response.themeProperties['place_items_mobile'],
  'place-content-mobile': response.themeProperties['place_content_mobile'],
  'float': response.themeProperties['float_property'],
  'tab-background-color': response.themeProperties['tab_background_color'],
  'tab-border-color': response.themeProperties['tab_border_color'],
  'tab-border-width': response.themeProperties['tab_border_width'],
  'tab-padding': response.themeProperties['tab_padding'],
  'tab-margin': response.themeProperties['tab_margin'],
  'tab-font-color': response.themeProperties['tab_font_color'],
  'tab-font-size': response.themeProperties['tab_font_size'],
  'tab-font-weight': response.themeProperties['tab_font_weight'],
  'tab-text-transform': response.themeProperties['tab_text_transform'],
  'tab-text-decoration': response.themeProperties['tab_text_decoration'],
  'box-shadow': response.themeProperties['box_shadow'],
  'opacity': response.themeProperties['opacity'],
  'transition-property': response.themeProperties['transition_property'],
  'transition-duration': response.themeProperties['transition_duration'],
  'transition-timing-function': response.themeProperties['transition_timing_function'],
  'transform': response.themeProperties['transform'],
  'transform-origin': response.themeProperties['transform_origin'],
  'animation-name': response.themeProperties['animation_name'],
  'animation-duration': response.themeProperties['animation_duration'],
  'animation-timing-function': response.themeProperties['animation_timing_function'],
  'animation-delay': response.themeProperties['animation_delay'],
  'animation-iteration-count': response.themeProperties['animation_iteration_count'],
  'animation-direction': response.themeProperties['animation_direction']
});


                 $('#faculty-info').html(html);

                
               /*console.log(response);
                $('#faculty-details').empty();
               var faculty = response.faculty;
               var courseTypes = response.courseTypes;
               var themeProperties = response.themeProperties;

 var styleTag = document.createElement('style');
    styleTag.innerHTML = 
        '#faculty-details {' +
        'background-color: ' + themeProperties['background-color'] + ';' +
        'font-size: ' + themeProperties['font-size'] + ';' +
        'color: ' + themeProperties['color'] + ';' +
        '}';

    document.head.appendChild(styleTag);

    var html = '<table id="faculty-details">';
    html += '<tr class="row1"><td>Faculty Name:</td><td>' + response.faculty_name + '</td></tr>';
    html += '<tr class="row2"><td>Faculty Code:</td><td>' + response.faculty_code + '</td></tr>';
    html += '<tr class="row1"><td>Department ID:</td><td>' + response.department_name + '</td></tr>';
    html += '<tr class="row2"><td>Course ID:</td><td>' + response.course_name + '</td></tr>';
    html += '<tr class="row1"><td>Email:</td><td>' + response.email + '</td></tr>';
    html += '<tr class="row2"><td>Phone:</td><td>' + response.phone + '</td></tr>';
    html += '<tr class="row1"><td>Address:</td><td>' + response.address + '</td></tr>';
    html += '<tr class="row2"><td>Course Type:</td><td>' + courseTypes + '</td></tr>';
    html += '</table>';

    $('#faculty-details').html(html);*/
      
                 
            },
          error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
});
