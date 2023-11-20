@extends('common.main') 
@section('css')
@include('common.includefile.css.select2') 
@include('common.includefile.css.parsley') 
@endsection
@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Create Country language</h5>
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
                <form class="needs-validation" id="serveyrequestform" method="POST" action="{{ url('create-country-lang-list') }}" novalidate="" data-parsley-validate="" >
                        @csrf
                        <div class="form-row">  
                            <div class="col-md-6 mb-3"> 
                               <select class="singleselect form-control" name="market" required="">
                                    <option value="">Select Country</option>
                                    @foreach($countrylist as $key=>$val)	
                                    <option value="{{$val->iso}}">{{$val->name}}</option>						 
                                    @endforeach
                                </select>
                            </div> 
                        </div> 

                        <div class="form-row">  
                                <div class="col-md-6 mb-3"> 
                                   <select class="singleselect form-control" name="languagecode" required="">
                                        <option value="">Select Language</option>
                                        @foreach($languagelist as $key=>$val)	
                                        <option value="{{$val->code}}">{{$val->name}}</option>						 
                                        @endforeach
                                    </select>
                                </div> 
                       </div> 

                       <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{url('country-lang-list')}}" class="btn btn-success">Go To Back</a>
                            </div>
                        </div> 
                </form>      
            </div>
         </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
@section('script')
@include('common.includefile.js.select2') 
@include('common.includefile.js.parsley') 
@endsection