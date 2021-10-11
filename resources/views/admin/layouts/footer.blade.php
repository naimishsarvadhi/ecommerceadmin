<footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/bootstrap/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}">
</script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('assets/js/waves.js') }}"></script>
<!--Counter js -->
<script src="{{ asset('assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ asset('assets/plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('assets/plugins/bower_components/morrisjs/morris.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('assets/js/custom.min.js') }}"></script>
<!-- Sparkline chart JavaScript -->
{{-- <script src="{{ asset('assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
   <script src="{{ asset('assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script> --}}
<script src="{{ asset('assets/js/dashboard1.js') }}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{ asset('assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
<script src="{{ asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<!--Style Switcher -->
<script src="{{ asset('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group +
                                '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
</script>
@stack("scripts")
</body>

</html>
