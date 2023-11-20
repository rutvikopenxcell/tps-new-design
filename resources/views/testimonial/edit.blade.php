@extends('common.main') 
@section('css')
@include('common.includefile.css.datatable')
@include('common.includefile.css.parsley')
@endsection
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Testimonial (English)</h5>
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
                @include('./common.alert')
                @include('./common.error')
                <form class="needs-validation" method="POST" action="{{ url('updatetestimonial/'.$content->id) }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                @method('put')
                @csrf
                      <p>
                        <img src="{{asset('storage/app/public/'.$content->imgpath)}}" alt="{{$content->name}}" style="width:130px;height:130px;"  class=img/> 
                </p>
                     <div class="form-row">   
                        <div class="col-md-4 mb-3"> 
                     <div class="custom-file">
                            <input id="logo" type="file" name="imgfile" class="custom-file-input">
                            <label for="logo" class="custom-file-label">Choose file...</label>
                    </div>
                    </div>
                    </div>
                    <div class="form-row">   
                        <div class="col-md-4 mb-3">                               
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$content->name}}" required="" autocomplete="off">  
                        </div>                     
                        </div>  
                    <div class="form-row">   

                        <div class="col-md-4 mb-3">                               
                                <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5" required="" autocomplete="off">{{$content->message}}</textarea>  
                         </div>                   
                      </div>
                    <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit" onclick="ValidateExtension()">Submit</button>
                             </div>
                    </div> 
                </form>  


                  
        </div>
   </div>
</div>
</div>
</div>
@endsection
@section('script')
<script type="text/javascript">

    $('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
}); 
    function ValidateExtension(){ 
            
        var allowedFiles = [".png"];
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$"); 
        var check=true; 
        if(document.getElementById("logo").files.length != 0){      
        
          if (!regex.test($("#logo").val().toLowerCase())){               
                alert("Please upload files having extensions: " + allowedFiles.join(', ') + " only.");
                check=false;
          } 
        
        if(check===true){
            return true;
        }else{
            return false;
        }
      }
    }   
</script>
@include('common.includefile.js.datatable')
@include('common.includefile.js.parsley')
@endsection
 