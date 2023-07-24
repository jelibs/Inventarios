</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    
<script type="application/javascript">
    $(document).ready( function () {
        var table = $('#theTableGeneral').DataTable({
            ajax: 'obtener_datos.php',
            language: {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
            dom: 'Blfrtip',
            pagingType: "full_numbers",
            stateSave: "true",
            buttons: [,'copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
            lengthMenu: [[ 10, 25, 50, 100, -1 ],[ '10', '25', '50', 100, 'Motrar Todos' ]],
            buttons: {
                "pageLength": {
                    _: "Mostrar %d Registros"
                }
            },
        });
    } );
</script>
<br>
<p>Copyright © 2023 Generadores de Proyectos en Comunciación S.A de C.V. Calle 16 de Septiembre No. 5313, Colonia Las Palmas, 72550 Puebla, Pue.</p>
</html>