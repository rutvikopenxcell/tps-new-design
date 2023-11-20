
<form class="needs-validation" method="POST" action="{{url('/storesocialfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=7')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
     
    <div class="form-row"> 
        <div class="input-group col-md-6 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="googlepluslink"><i class="fa fa-google-plus fa-2x"></i></span>
            </div>
        <input type="url" id="googlepluslink" name="googlepluslink" value="{{old('googlepluslink')}}" class="form-control" placeholder="Enter Google+ Url" aria-label="googlepluslink" autocomplete="off" aria-describedby="googlepluslink">
        </div>

        <div class="input-group col-md-6 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="facebooklink"><i class="fa fa-facebook-official fa-2x"></i></span>
            </div>
            <input type="url" id="facebooklink" name="facebooklink" value="{{old('facebooklink')}}" class="form-control" placeholder="Enter Facebook Url" aria-label="facebooklink" autocomplete="off" aria-describedby="facebooklink">
        </div>
    </div>

    <div class="form-row"> 
    <div class="input-group col-md-6 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="instagramlink"><i class="fa fa-instagram fa-2x"></i></span>
            </div>
            <input type="url" id="instagramlink" name="instagramlink"  value="{{old('instagramlink')}}" class="form-control" placeholder="Enter Instagram Url" aria-label="instagramlink" autocomplete="off" aria-describedby="instagramlink">
    </div>

    <div class="input-group col-md-6 mb-3">
            <div class="input-group-prepend">
                 <span class="input-group-text" id="twitterlink"><i class="fa fa-twitter fa-2x"></i></span>
             </div>
             <input type="url" id="twitterlink" name="twitterlink" value="{{old('twitterlink')}}"  class="form-control" placeholder="Enter Twitter Url" aria-label="twitterlink" autocomplete="off" aria-describedby="twitterlink">
    </div>
   </div>

   <div class="form-row"> 
    <div class="input-group col-md-6 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="pinterestlink"><i class="fa fa-pinterest-p fa-2x"></i></span>
            </div>
            <input type="url" id="pinterestlink" name="pinterestlink"  value="{{old('pinterestlink')}}" class="form-control" placeholder="Enter Pinterest Url" aria-label="pinterestlink" autocomplete="off" aria-describedby="pinterestlink">
    </div>

    <div class="input-group col-md-6 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="linkedinlink"><i class="fa fa-linkedin fa-2x"></i></span>
            </div>
            <input type="url" id="linkedinlink" name="linkedinlink"  value="{{old('linkedinlink')}}" class="form-control" placeholder="Enter Linkedin Url" aria-label="linkedinlink" autocomplete="off" aria-describedby="linkedinlink">
    </div>
  </div>

  <div class="form-row"> 
    <div class="input-group col-md-6 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="weibolink"><i class="fa fa-weibo fa-2x"></i></span>
            </div>
            <input type="url" id="weibolink" name="weibolink" value="{{old('linkedinlink')}}" class="form-control" placeholder="Enter Weibo Url" aria-label="weibolink" autocomplete="off" aria-describedby="weibolink">
   </div>
  </div>

               
       <div class="form-row">                     
                <div class="col-md-4 mb-3">                 
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{url('country-lang-list')}}" class="btn btn-success">Go To Back</a>
                </div>
        </div>                              
</form>  
