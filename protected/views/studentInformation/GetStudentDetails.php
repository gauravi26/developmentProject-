
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <style>

 
</style>

<form >">
    <label for="student_id">Select a student ID:</label>
    <?php echo CHtml::dropDownList('student-list', null, 
    CHtml::listData(StudentInformation::model()->findAll(), 'student_id', 'first_name'), 
    array('empty'=>'Select Student Name')); 
?>
    <br>
</form>
  <script>
$(document).ready(function() {
    $('select').on('change', function() {
        var selectedId = $(this).val(); // get the selected student ID
        $.ajax({
            url: 'http://localhost/testproject/index.php?r=studentInformation/fetchstudentDetails&id=' + selectedId,
            method: 'GET',
            
           success: function(response) {
    // update the page with the response data
    var student = JSON.parse(response);
    var html = '<table>';
    for (var key in student) {
        if (key === 'css_properties') {
            // if the key is "css_properties", ignore it
            continue;
        } else {
            html += '<tr><td>' + key + '</td><td>' + student[key] + '</td></tr>';
        }
    }
    html += '</table>';
    
    // set the CSS properties of the student details div based on the fetched theme
            $('#student-details').css(student.css_properties);
           $('body').css({
          'font-size': student.css_properties['font_size'],
          'color': student.css_properties['color'],
          'background-color': student.css_properties['background_color'],
          'padding': student.css_properties['padding'],
          'margin': student.css_properties['margin'],
          'border': student.css_properties['border'],
          'text-align': student.css_properties['text_align'],
          'text-shadow': student.css_properties['text_shadow'],
          'text-indent': student.css_properties['text_indent'],
          'letter-spacing': student.css_properties['letter_spacing'],
          'word-spacing': student.css_properties['word_spacing'],
          'line-height': student.css_properties['line_height'],
          'text-transform': student.css_properties['text_transform'],
          'text-decoration': student.css_properties['text_decoration'],
          'font-family': student.css_properties['font_family'],
          'font-weight': student.css_properties['font_weight'],
          'text-overflow': student.css_properties['text_overflow'],
          'white-space': student.css_properties['white_space'],
          'text-orientation': student.css_properties['text_orientation'],
          'text-wrap': student.css_properties['text_wrap'],
          'text-justify': student.css_properties['text_justify'],
          'text-emphasis': student.css_properties['text_emphasis'],
          'text-spacing': student.css_properties['text_spacing'],
        });


    $('#student-details').html(html);
},

            
            error: function() {
                alert('Error retrieving student details');
            }
        });
    });
});
</script>

<!-- add a div to the page where the student details will be displayed -->
<div id="student-details"></div>
