@extends('common.main') 
@section('css') 
<link href="{{ asset('public/assets/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/daterangepicker.css') }}" media="all" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/prism.css') }}" media="all" />
<style>
.select2-container .select2-selection--single {
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    height: 44px;   
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
   line-height: 36px;
}
</style>
@endsection
@section('content')
<div class="row">
  <!-- Server side start -->
  <div class="col-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="header-title">Email Editor</h4>                            
                @include('./common.alert')
                @include('./common.error')
                <form class="needs-validation" id="serveyrequestform" method="POST" action="{{ url('test-tiny') }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data" >
                        @csrf
                    
                        <div class="form-row">  
                            <div class="col-md-12 mb-3"> 
                                <textarea name="tinytext" rows="20"></textarea>
                            </div> 
                        </div> 
                       
                        <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{url('questions-list')}}" class="btn btn-success">Go To Back</a>
                            </div>
                        </div> 
                </form>      
            </div>
         </div>
    </div>
    <!-- Server side end -->
</div>
@endsection
@section('script')
 <!-- Parsley Js Include --> 
<script src="{{ asset('public/assets/parsley/dist/parsley.js')}}"></script>
<script src="{{ asset('public/assets/parsley/dist/i18n/en.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/daterangepicker.min.js')}}"></script>
{{-- <script type="text/javascript" src="{{ asset('public/assets/tinymce/js/tinymce/jquery.tinymce.min.js')}}"></script> --}}
<script type="text/javascript" src="{{ asset('public/assets/js/prism.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/tinymce/js/tinymce/tinymce.min.js')}}"></script>
 
{{-- <script>tinymce.init({ selector:'textarea' });</script> --}}
<script>
// tinymce.init({
//   selector: 'textarea',
//   plugins: 'codesample',
//   codesample_languages: [
//         {text: 'HTML/XML', value: 'markup'},
//         {text: 'JavaScript', value: 'javascript'},
//         {text: 'CSS', value: 'css'},
//         {text: 'PHP', value: 'php'},
//         {text: 'Ruby', value: 'ruby'},
//         {text: 'Python', value: 'python'},
//         {text: 'Java', value: 'java'},
//         {text: 'C', value: 'c'},
//         {text: 'C#', value: 'csharp'},
//         {text: 'C++', value: 'cpp'}
//     ],
//   toolbar: 'codesample'
// });

 

tinymce.init({
  selector: "textarea",  // change this value according to your HTML
  plugins: "code",
  
//   toolbar: "code",
//   menubar: "tools"
});

// tinymce.init({
//   selector: "textarea",  // change this value according to your HTML
//   plugins: "fullscreen",
//   toolbar: "code"
// });


$(document).ready(function() {
    $('.singleselect').select2();
}); 
</script>

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#daterange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
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

    // $('#daterange').val('');

});

$('#launchdate, #closuredate').daterangepicker({
    "singleDatePicker": true  
});
$('#launchdate, #closuredate').val('');
</script>
@endsection
