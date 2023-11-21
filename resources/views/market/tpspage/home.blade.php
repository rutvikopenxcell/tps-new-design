@extends('common.main')
@section('css')
 @include('common.includefile.css.parsley')
 @include('common.includefile.css.summernote')  
@endsection
@section('content')
<style>
    .text-white{
        color:unset !important;
    }
</style>
<div class="main-content-inner">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Manage Front End Content</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                         
                        <ul class="nav nav-tabs nav-pills nav-fill nav-sm" id="myTab" role="tablist">
                        @foreach($section as $key => $val)  
                        <li class="nav-item">
                                <a class="nav-link {{$val->id == $firstdata->id  ? 'active' : ' '}}" href="{{route('section.edit',['id'=>$val->id])}}" role="tab" aria-controls="menuhome" aria-selected="true">{{$val->name}}</a>
                        </li> 
                        @endforeach
                        </ul>
                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade show active">
                                <form id="tpsform" method="POST" action ="{{url('/tpsection/store')}}" enctype="multipart/form-data">
                                    @csrf
                                 
                                    @foreach($firstdata->sections as $key =>$data)
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                        <label for="col-form-label">{{$data->name}}</label>
                                        
                                        <textarea class="form-control summernote" name="section{{$data->id}}" id="{{$data->name}}">{{$data->text}}</textarea>
                                    </div>
                                    </div>  

                                    @endforeach
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>

    </div>

    <!-- Scripts -->
    <!-- Mainly scripts -->
    <!-- Custom and plugin javascript -->
    <!-- SUMMERNOTE -->
   

</div>
@endsection
@section('script')
<script>
//     $('#tpsform').on('submit', function(e) {
//        e.preventDefault(); 
//        var name = $('#name').val();
//        var message = $('#message').val();
//        var postid = $('#post_id').val();
//      //  var photo = $('#myfile').prop('files')[0]; 
//        //console.log(photo)
//         var bannertitle = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
//     //    var textareaValue = $('#banner-title').summernote('code');
      
//     $.ajax({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         url : "{{ url('/tpsection/store') }}",
//         data :{
//           'data':'rutvik'
//         },
//         type : 'POST',
//         dataType : 'json',
//         success : function(result){

//             console.log("===== " + result + " =====");

//         }
//     });

//        console.log(bannertitle)

//        //alert('hjh')
      
//    });
</script>
@include('common.includefile.js.parsley')
@include('common.includefile.js.summernote')  
@endsection

