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
                <h5>Update Testimonial  [ID : {{$testimonial->id}} ] Translation in  {{ $testimonialtranslation->languagename.' ('.$testimonialtranslation->languagecode.')' }} 
                  <a href="{{url('addtestimonialtranslation/'.$testimonialtranslation->testimonialid)}}" class="btn btn-outline-success btn-sm" role="button"> <i class="fa fa-plus-square-o"></i> Go Back</a></h5>
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
                <form class="needs-validation" method="POST" action="{{ url('updatetestimonialtranslation/'.$testimonialtranslation->testimonialid.'/'.$testimonialtranslation->id) }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                @method('put')
                @csrf

                     <div class="form-row">   
                        <div class="col-md-4 mb-3"> 
                              <img src="{{asset('storage/app/public/'.$testimonial->imgpath)}}" style="width: 78px;height: 78px;">
                         </div>
                      </div>
                  
                    <div class="form-row">   
                        <div class="col-md-4 mb-3">    
                               <label for="name">{{$testimonial->name}}</label>                           
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$testimonialtranslation->name}}" required="" autocomplete="off">  
                        </div>                     
                        </div>  
                    <div class="form-row">   

                        <div class="col-md-4 mb-3">  
                          <label for="name">{{$testimonial->message}}</label>                             
                                <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5" required="" autocomplete="off">{{$testimonialtranslation->message}}</textarea>  
                         </div>                   
                      </div>
                    <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit">Submit</button>
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
@include('common.includefile.js.datatable')
@include('common.includefile.js.parsley')
@endsection
 