/* ============================================================
 * DataTables
 * Generate advanced tables with sorting, export options using
 * jQuery DataTables plugin
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */
(function($) {

    'use strict';

    var responsiveHelper = undefined;
    var breakpointDefinition = {
        tablet: 1024,
        phone: 480
    };
    // Initialize datatable with ability to add rows dynamically
    var initTableWithDynamicRows = function() {
        var table = $('#tableWithDynamicRows');


        var settings = {
            "sDom": "<t><'row'<p i>>",
            "destroy": true,
            "scrollCollapse": true,
            "oLanguage": {
                "sLengthMenu": "_MENU_ ",
                "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
            },
            "iDisplayLength": 5
        };


        table.dataTable(settings);

        $('#show-modal').click(function() {
            $('#addNewAppModal').modal('show');
        });

        $('#add-app').click(function() {
            table.dataTable().fnAddData([
                $("#appName").val(),
                $("#appDescription").val(),
                $("#appPrice").val(),
                $("#appNotes").val(),
                `<div class="btn-group" role="group">
                <button class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Edit</button>
                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
              </div>`
            ]);
            $('#addNewAppModal').modal('hide');

        });
    }
    initTableWithDynamicRows();

})(window.jQuery);