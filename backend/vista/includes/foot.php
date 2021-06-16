<script type="text/javascript" src="vista/vendors/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="vista/js/materialize.min.js"></script>
<script type="text/javascript" src="vista/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="vista/js/plugins.js"></script>
<script type="text/javascript" src="vista/js/custom-script.js"></script>
<script src="vista/plugins/pickadate/picker.js"></script>
<script src="vista/plugins/pickadate/picker.date.js"></script>
<script src="vista/plugins/pickadate/picker.time.js"></script>
<script src="vista/plugins/pickadate/legacy.js"></script>

<script type="text/javascript">
    var input_date = $('.datepicker').pickadate({
        min: true,
        format: 'yyyy-m-d',
        formatSubmit: 'yyyy-m-d',
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        disable: [
            1
        ]
    });
    var date_picker = input_date.pickadate('picker');

    var input_time = $('.timepicker').pickatime({
        min: [8, 0],
        max: [20, 0],
        format: 'HH:i',
        formatSubmit: 'HH:i',
        disable: [
            13
        ]
    });
    var time_picker = input_time.pickatime('picker');
</script>