<script type="text/javascript" src="{{ asset('public/assets/js/plugins/fullcalendar/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript">
    $(function() {
       var start = moment().subtract(29, 'days');
        var end = moment();    
        function cb(start, end) {           
            $('#daterange span').html(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));         
        }
    
        $('#daterange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
    
        cb(start, end);
        <?php if(isset($daterange)) { ?>
        $('#daterange').val('{{$daterange}}');
        <?php }else{ ?>
        $('#daterange').val('');
        <?php } ?>


    
    });
    </script>
