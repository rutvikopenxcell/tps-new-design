@extends('common.main') 
@section('css') 

<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" />
@endsection 
@section('content')
<div class="row">
    <!-- Server side start -->
    <div class="col-12">
          <div class="card mt-2">
              <div class="card-body">
                  <h4 class="header-title">Email</h4>                            
                  @include('./common.alert')
                  @include('./common.error')
                  <form class="needs-validation" id="serveyrequestform" method="POST" action="" novalidate="" data-parsley-validate="" enctype="multipart/form-data" >
                   @csrf
                   <pre style="display:none;">
                        Welcome to The Panel Station
                   </pre>
                                    <div class="row my-4"> 
                                        <div class="col-md-8">
                                              <label  for="subject">Subject</label>
                                     
                                           <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required/>
                                        </div>
                                    </div>
                                    <div class="row my-4"> 
                                        <div class="col-md-8">
                                              <label  for="emailid">To Email Address</label>
                                       
                                             <input type="text" class="form-control" name="email" id="emailid" placeholder="Email Address" required/>
                                        </div>
                                    </div>

                                    <div class="row my-4"> 
                                        <div class="col-md-12"> 
                                               <label  for="emailnote1">Email Template</label>
                                      
                                            <textarea class="emailnote form-control col-md-9" name="emailnote" placeholder="Template"  id="emailnote1" required=""></textarea>
                                        </div>
                                     </div>
                                     <div class="row my-4 mx-auto"> 
                                            <div class="col-md-12">
                                              <button name="submit" type="submit" class="btn btn-success">Submit</button>
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
 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
 <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
 <script>
  $('.emailnote').summernote({
  height:150,   //set editable area's height
  codemirror: { // codemirror options
    theme: 'monokai'
  }
});
  </script>  
@endsection