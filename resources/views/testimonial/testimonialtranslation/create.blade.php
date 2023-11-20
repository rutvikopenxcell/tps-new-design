@extends('common.main') 
@section('css')
@include('common.includefile.css.datatable')
@include('common.includefile.css.select2')
@include('common.includefile.css.parsley')
@endsection
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Testimonial Translation [ID : {{$testimonial->id}} ] <a href="{{url('testimonial')}}" class="btn btn-outline-success btn-sm" role="button"> <i class="fa fa-plus-square-o"></i> Go Back</a></h5>
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
                <form class="needs-validation" method="POST" action="{{ url('storetestimonialtranslation/'.$testimonial->id) }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                @csrf
                 <div class="form-row">   
                        <div class="col-md-4 mb-3"> 
                              <img src="{{asset('storage/app/public/'.$testimonial->imgpath)}}" style="width: 78px;height: 78px;">
                         </div>
                 </div>

                     <div class="form-row">   
                        <div class="col-md-4 mb-3"> 
                              <select class="singleselect form-control" name="languagename" required="">
                                    <option value="">Select Language</option>
                                    @foreach($languagelist as $val)    
                                    <option value="{{$val->code}}">{{$val->name.' ('.$val->code.')'}}</option> 
                                     @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="form-row">   
                        <div class="col-md-4 mb-3"> 
                               <label for="name">{{$testimonial->name}}</label>                              
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{$testimonial->name}}" value="" required="" autocomplete="off"> 
                                <input type="hidden" name="testimonial" value="{{$testimonial->id}}"> 
                        </div>                     
                        </div>  
                    <div class="form-row">   

                        <div class="col-md-4 mb-3">   
                              <label for="name">{{$testimonial->message}}</label>                            
                                <textarea class="form-control" name="message" id="message" placeholder="{{$testimonial->message}}" rows="5" required="" autocomplete="off"></textarea>  
                         </div>                   
                      </div>
                    <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit">Submit</button>
                             </div>
                    </div> 
                </form>  


                 <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" style="font-size:12px">
                        <thead>
                            <tr>                              
                                <th>Action</th>                              
                                <th>Language </th>
                                <th>Name </th>
                                <th>Message </th>                                
                                <th>Updated At</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($testimonialtranslation))
                         <?php foreach($testimonialtranslation as $val){ ?>                       
                         <tr>                               
                               <td>                                    
                                <a href="{{url('edittestimonialtranslation/'.$val->testimonialid.'/'.$val->id)}}" title="Edit"><i class="fa fa-edit"></i></a>
                             
                               </td>
                                <td>                                    
                              {{$val->languagename.' ('.$val->languagecode.')'}}
                               </td>
                               <td>{{$val->name}}</td>                              
                                <td>{{$val->message}}</td>                              
                                 <td>{{ Carbon\Carbon::parse($val->updated_at)->format('d-M-Y H:i:s A') }}</td>
                                <td>{{ Carbon\Carbon::parse($val->created_at)->format('d-M-Y H:i:s A') }}</td>
                              
                             </tr>
                            <?php } ?>
                            @else 
                        <div>
                            No Records found.
                        </div>
                            @endif 
                        </tbody>
                        <tfoot>
                             <tr>                              
                                <th>Action</th>
                                <th>Name </th>
                                <th>Message </th>                                
                                <th>Updated At</th>
                                <th>Created At</th>
                              </tr>
                        </tfoot>
                    </table>
                </div>      
        </div>
   </div>
</div>
</div>
</div>
@endsection
@section('script')
@include('common.includefile.js.select2')
@include('common.includefile.js.datatable')
@include('common.includefile.js.parsley')
@endsection
 