jQuery(document).ready(function ($) {
            // Event handler for page load
            $(window).on('load', function () {              
                // Initialize DataTable after fetching CSS properties
                initializeDataTable();
            });
        });
        // Function to initialize DataTable
        function initializeDataTable() {
            $('.report-table').DataTable({
                
                 "paging": true,
            "ordering": true,
            "info": true
                // Add any DataTable options here
            });
        }