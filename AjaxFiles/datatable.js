$(window).on('load', function () {              
    if ($('.report-table').length > 0) {
        // Initialize DataTable after fetching CSS properties
        initializeDataTable();
    } else {
        console.log("Report not found with class .report-table");
    }
});

// Function to initialize DataTable
function initializeDataTable() {
    $('.report-table').DataTable({
        "paging": true,
        "ordering": true,
        "info": true
    });
}
