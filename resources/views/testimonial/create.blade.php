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
                <form class="needs-validation" method="POST" action="{{ url('storetestimonial') }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                @csrf
                     <div class="form-row">   
                        <div class="col-md-4 mb-3"> 
                     <div class="custom-file">
                            <input id="logo" type="file" name="imgfile" class="custom-file-input" required="">
                            <label for="logo" class="custom-file-label">Choose file...</label>
                    </div>
                    </div>
                    </div>
                    <div class="form-row">   
                        <div class="col-md-4 mb-3">                               
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="" required="" autocomplete="off">  
                        </div>                     
                        </div>  
                    <div class="form-row">   

                        <div class="col-md-4 mb-3">                               
                                <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5" required="" autocomplete="off"></textarea>  
                         </div>                   
                      </div>
                    <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit" onclick="ValidateExtension()">Submit</button>
                             </div>
                    </div> 
                </form>  


                 <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" style="font-size:12px">
                        <thead>
                            <tr>                              
                                <th>Action</th>
                                <th>Image </th>
                                <th>Name </th>
                                <th>Message </th>                                
                                <th>Updated At</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($content))
                         <?php foreach($content as $val){ ?>                       
                         <tr>                               
                               <td>                                    
                                <a href="{{url('edittestimonial/'.$val->id)}}" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{url('addtestimonialtranslation/'.$val->id)}}" title="Add Translation" class="btn btn-primary btn-xs" role="button" style="font-size: 8px;" target="_blank"><i class="fa fa-plus"></i>Add Translation</a> 
                                 @if($val->status==0)
                                  <a href="{{url('managetestimonial/'.$val->id.'/1')}}" title="Activate Testimonial"><i class="fa fa-check"></i></a>                         
                                 @else
                                     <a href="{{url('managetestimonial/'.$val->id.'/0')}}" title="Deactivate Testimonial"><i class="fa fa-remove"></i></a>
                                   
                                @endif
                               </td>
                                <td>                                    
                               <img src="{{asset('storage/app/public/'.$val->imgpath)}}" style="width: 78px;height: 78px;">
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
<script type="text/javascript">

    $('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
}); 
    function ValidateExtension(){ 
            
        var allowedFiles = [".png"];
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$"); 
        var check=true;        
        
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
</script>
@include('common.includefile.js.datatable')
@include('common.includefile.js.parsley')
@endsection
 