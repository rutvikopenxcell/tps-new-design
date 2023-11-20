<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialCms;
use App\Models\Country;
use App\Models\CountryLanguage;
use App\Models\LanguageList;
use Illuminate\Support\Facades\Storage;
use Validator; 
use Auth;



class TestimonialCmsController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    public function getTestimonial(Request $request){       
      
        $data['content']=TestimonialCms::paginate(50);
         
        return view('testimonial.create')->with($data);       
    } 

   
    /*
    |-------------------------------------------------------------
    | STORE FRONT END CONTENT
    |-------------------------------------------------------------
     */

    public function storeTestimonial(Request $request){
       
          
            $validatearr=[];
            
             $validatearr['message'] = 'required';
             $validatearr['name'] = 'required';
             $validatearr['imgfile'] = 'required';
           
             $validator=Validator::make($request->all(),$validatearr)->validate();

            

              $TestimonialCms=new TestimonialCms; 
              $TestimonialCms->languagename='English';
              $TestimonialCms->languagecode='en';
             
              $TestimonialCms->message=htmlentities($request->message);
              $TestimonialCms->name=htmlentities($request->name);
               if(($request->file('imgfile'))){
                $uploadedFile = $request->file('imgfile');
                $filename = time().$uploadedFile->getClientOriginalName();
                $path=Storage::disk('public')->putFileAs(
                    'imgfile/',
                    $uploadedFile,
                    $filename
                ); 
    
                $TestimonialCms->imgpath=$path;
              }

              $TestimonialCms->save();
              
             
             return redirect('/testimonial');
        
      }

       
 
    /*
    |-------------------------------------------------------------
    | STORE FRONT END CONTENT END
    |-------------------------------------------------------------
    */


    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT  START
    |-------------------------------------------------------------
    */



     public function editTestimonial($id=null, Request $request){ 

       

         if($id===null){
            return redirect('/testimonial')->with('warning','Invalid Access!');
        }     
        

         $data['content']=TestimonialCms::where('id', $id)->first();

         if(empty($data['content'])){
              return redirect('/testimonial')->with('warning','Invalid Access!');
         }

        return view('testimonial.edit')->with($data);       
    } 


     public function updateTestimonial($id, Request $request){
       
      if($id===null){
            return redirect('/testimonial')->with('warning','Invalid Access!');
      } 

      $data['content']=TestimonialCms::where('id', $id)->first();
     
   
      if(empty($data['content'])){
          return redirect('/testimonial')->with('warning','Invalid Access!');
      }
      
    
       $validatearr=[];
   
       $validatearr['name'] = 'required';
       $validatearr['message'] = 'required';
      
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $TestimonialCms=TestimonialCms::where('id',$id); 
      $dataupdate['name']=htmlentities($request->name);
      $dataupdate['message']=htmlentities($request->message);
   
       $TestimonialCms->update($dataupdate);

        if(($request->file('imgfile'))){
                 $uploadedFile = $request->file('imgfile');
                 $filename = time().$uploadedFile->getClientOriginalName();
                 $path=Storage::disk('public')->putFileAs(
                   'testimonialimg/',
                   $uploadedFile,
                   $filename
                 ); 
        TestimonialCms::where('id', $id)->update(['imgpath' => $path]);
      }
     return redirect('/testimonial')->with('info','Success');
        
  }  



  public function manageTestimonialStatus($id = null, $option = null)
    {

        $optionarr = ['0', '1'];
        if ($id === null || $option === null) {
            return redirect('/testimonial')->with('warning', 'invalid access');
        }
        if (!in_array($option, $optionarr)) {
            return redirect('/testimonial')->with('warning', 'invalid access');
        }

        $TestimonialCms = TestimonialCms::where('id', $id);
        $data['TestimonialCms'] = $TestimonialCms->first();

        if (empty($data['TestimonialCms'])) {
            return redirect('/testimonial')->with('warning', 'Invalid Access...');
        }

        if ($TestimonialCms->update(['status' => $option])) {
            if ($option == 1) {
                $msg = "Testimonial has been activated";
            } else {
                $msg = "Testimonial has been deactivated";
            }
            return redirect('/testimonial')->with('success', $msg);
        } else {
            return redirect('/testimonial')->with('warning', 'Please Try After SomeTimes...');
        }
  }


 

  

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
