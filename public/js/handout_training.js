$('document').ready(function () {
    var editor; 
    var tba = $('#table-biceps-antebraco').DataTable({
    	"paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false
    });

    editor = new $.fn.dataTable.Editor( {
        //ajax: "../php/staff.php",
        table: "#table-biceps-antebraco",
        fields: [ {
                label: "Ordem:",
                name: "ordem"
            }, {
                label: "Exercicio:",
                name: "exercicio"
            }, {
                label: "Séries:",
                name: "series"
            }, {
                label: "Repet.:",
                name: "repet"
            }, {
                label: "Máq.:",
                name: "map"
            }
        ]
    } );
    $('#table-biceps-antebraco').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
    } );

});