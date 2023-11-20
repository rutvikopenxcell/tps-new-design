<form class="needs-validation" method="POST" action="{{url('/storefaqfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=9')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
            
             <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="faqheadertext">FAQ Header</label>
                    <textarea class="form-control  {{ $errors->has('faqheadertext') ? ' is-invalid' : '' }}" name="faqheadertext" id="faqheadertext"  placeholder="Enter The FAQ Header Text" rows="5" required=""  autocomplete="off">{{ old('faqheadertext') }}</textarea>      
                          
                    @if($errors->has('faqheadertext'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="faqheadertextsec">FAQ Header ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control  {{ $errors->has('faqheadertextsec') ? ' is-invalid' : '' }}" name="faqheadertextsec" id="faqheadertextsec"  placeholder="Enter FAQ Header Text" rows="5" required="" autocomplete="off">{{ old('faqheadertextsec') }}</textarea>
                            @if($errors->has('faqheadertextsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

                 </div>       

              <div class="form-row">  
                <div class="col-md-12 mb-3"> 
                    <label  class="col-form-label" for="faqpara">FAQ Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('faqpara') ? ' is-invalid' : '' }}" name="faqpara" id="faqpara"  placeholder="Enter The FAQ Paragraph Text" rows="5" required=""  autocomplete="off">{{ old('faqpara') }}</textarea>      
                          
                    @if($errors->has('faqpara'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                </div>
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="form-row"> 
                    <div class="col-md-12 mb-3"> 
                            <label  class="col-form-label" for="faqparasec">FAQ Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('faqparasec') ? ' is-invalid' : '' }}" name="faqparasec" id="faqparasec"  placeholder="Enter FAQ Paragraph Text" rows="5" required="" autocomplete="off">{{ old('faqparasec') }}</textarea>
                            @if($errors->has('faqparasec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
                    </div>
                @endif                          
 
<div class="row my-4 mx-auto"> 
    <div class="col-md-12">
        <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </div>
</div>
</form>   


 <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" style="font-size:12px">
                        <thead>
                            <tr>                              
                                <th>Action</th>
                                <th>FAQ Header </th>
                                 @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                                <th>FAQ Header ({{ $countrylanguage->languagename }}) </th>
                                @endif
                                <th>Updated At</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($content))
                         <?php foreach($content as $val){ ?>                       
                         <tr>                               
                               <td>                                    
                                <a href="{{url('editfaqfrontendcms/'.$val->languageculture.'/'.$val->id.'?taboption=9')}}" title="Edit"><i class="fa fa-edit"></i></a>
                               </td>
                               <td>{{$val->faqheadertext}}</td>                              
                                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                               <td>{{$val->faqheadertextsec}}</td>
                                @endif                              
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
                                <th>FAQ Header ({{ $countrylanguage->languagename }}) </th>
                                 @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                                <th>FAQ Header ({{ $countrylanguage->languagename }}) </th>
                                @endif
                                <th>Updated At</th>
                                <th>Created At</th>
                              </tr>
                        </tfoot>
                    </table>
                </div>

 