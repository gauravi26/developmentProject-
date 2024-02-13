$(document).ready(function() {
    $('#faculty-list').change(function()
    
                  

    
    {
        
      /*alert("Gauravi");
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
                console.log(response);
                $('#faculty-details').empty();
               $('#faculty-details').append(  
       '<tr class="row1"><td style="font-weight:bold; color: #333;">Faculty Name:</td><td style="color:blue; font-weight:bold;">' + response.faculty_name + '</td></tr>' +
            '<tr class="row2"><td style="font-weight:bold; color: #333;">Faculty Code:</td><td style="color:red; font-style:italic;">' + response.faculty_code + '</td></tr>' +
            '<tr class="row1"><td style="font-weight:bold; color: #333;">Department ID:</td><td style="color:green; text-decoration:underline;">' + response.department_name + '</td></tr>' +
            '<tr class="row2"><td style="font-weight:bold; color: #333;">Course ID:</td><td style="color:orange; font-size:20px; text-shadow: 2px 2px #666;">' + response.course_name + '</td></tr>' +
            '<tr class="row1"><td style="font-weight:bold; color: #333;">Email:</td><td style="color:white; background-color:black; padding: 5px;">' + response.email + '</td></tr>' +
            '<tr class="row2"><td style="font-weight:bold; color: #333;">Phone:</td><td style="color:red; padding:5px; border: 1px solid #ccc;">' + response.phone + '</td></tr>' +
            '<tr class="row1"><td style="font-weight:bold; color: #333;">Address:</td><td style="color:blue; border:1px solid black; padding: 5px;">' + response.address + '</td></tr>' +
            '<tr class="row2"><td style="font-weight:bold; color: #333;">Course Type:</td><td style="color:purple; margin:10px; text-transform: uppercase;">' + response.courseTypes + '</td></tr>'


                    );
                 $('.row1').css({
          'background-color': '#f2f2f2',
          'font-family': 'Arial, sans-serif',
          'color': '#333'
        });
        $('.row2').css({
          'background-color': '#e6e6e6',
          'font-family': 'Verdana, sans-serif',
          'color': '#555'
        });
      
                 
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
});
