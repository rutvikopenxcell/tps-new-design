<?php include(app_path() . '/libraries/common/topheader.php'); ?>

<?php include(app_path() . '/libraries/common/qlib.php');?>
 
<?php include(app_path() . '/libraries/whconsentlang.php');?>

 

<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

 <title>TPS Campaign</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Arsenal&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 @include('registration.tps_new_css')
 <style>
     .error{
         color:red;
     }
 </style>
</head>


<body>

 <!-- Section - 5 Starts Here -->
 
 
 <section class="sec-5" id="sec5">
   <div class="row mt-5 pt-5">
     <div class="col-lg-5 col-md-6 col-sm-6 text-center mt-lg-5 pt-lg-5 mb-5">
       <h1 class="fw-bold" style="color: #157C92;">form</h1>
     </div>

     <div class="col-lg-6 col-md-6 col-sm-6 p-3 offset-lg-1">
       <form id="tpsnewform" novalidate>
       <input type="hidden"  name="otpcodeget" id="otpcode">

       <div class="input-group flex-nowrap">
           
           <div class="form-user-input me-5" style="width:60%">
         <input type="text" name="fname" aria-label="First name" placeholder="<?php echo $fname; ?>" class="form-control form-user-input me-5" >
        </div>
        
           <div class="form-user-input "  style="width:60%">
         <input type="text" aria-label="Last name" name ="lname" placeholder="<?php echo $lname; ?>" class="form-control form-user-input" >
         </div>
       </div>
       <div class="input-group mt-3 w-100">
           
           <div class="form-user-input" style="width:79%">
         <input type="email" name="email" class="form-control form-user-input" placeholder="<?php echo $email; ?>" aria-label="Email id" aria-describedby="addon-wrapping" >
            </div>
            
         <input type="file" class="form-control" id="actual-btn" hidden>
          
         <label for="actual-btn" style="height:10%;" class="file-upload ms-2"><i style="font-size:18px" class="fa  pe-2">&#xf093;</i>Upload file<span></span></label>

       </div>

       
       @if($_GET['countrycoderemote'] == "IN")
       <!-- for india market-->
       <div id="view-form" style="display: hide;">
             <div class="input-group flex-nowrap mt-3">
                   <div class="form-user-input me-5" style="width:50%">
               <input type="password" aria-label="Password" placeholder="Password" name="password" class="form-control form-user-input me-3" maxlength="12" id="id_password" onfocus="message()">
               </div>
               <span class="input-group-addon" role="button" title="veiw password" id="passBtn" style="cursor: pointer;
             position: relative;
             right: 30px;
             top: 7px;z-index: 11;">
               <i class="fa fa-eye-slash" id="password_1" aria-hidden="true"></i>
             </span>
              <div class="form-user-input me-5" style="width:50%">
               <input type="password" aria-label="Confirm Password" placeholder="Confirm Password" name="password_confirm" class="form-control form-user-input" maxlength="12" id="id_password_1" onfocus="message1()">
               </div>
               <span class="input-group-addon" role="button" title="veiw password" id="passBtnn" style="cursor: pointer;
             position: relative;
             right: 15px;
             top: 7px;z-index: 11;">
               <i class="fa fa-eye-slash" id="password_2" aria-hidden="true"></i>
             </span>
             </div>

             <div class="text-center mt-3">
               <p class="textArea2" id="textArea2" style="display: block;">To keep a strong new password make sure to add 8-12 characters containing at least one numeric value, one upper case letter and one special character</p>
             </div>


             <div class="input-group flex-nowrap mt-3">
               <div class="form-user-input me-5" style="width:50%">

                 <select class="form-select form-user-input" id="inputGroupSelect02" name="inputGroupSelect02">
                   <option value="" selected="">Gender</option>
                   <option value="1">Male</option>
                   <option value="2">Female</option>
                   <option value="3">Other</option>
                 </select>
                 </div>
                 
                  <div class="form-user-input me-5" style="width:50%">
               <input type="text" aria-label="Date" name="date" placeholder="Date of Birth" onfocus="(this.type='date')" class="form-control form-user-input">
               </div>
             </div>

             <div class="input-group flex-nowrap mt-3">
               <span class="input-group-text me-1">+ 91</span>
               
              <div class="form-user-input "  style="width:79%">
             <input type="number" maxlength="10" placeholder="Mobile Number" class="form-control form-user-input" name ="mobilenum" id="mobilenum" aria-label="Mobile Number">
             
             </div>
             
             
             <input type="button" id="generateotp" style="height:10%" value="Generate OTP" class="btn mob-btn ms-3">
           </div>
           
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="errorotp"></div>


           <div class="input-group flex-nowrap mt-3">
                 <div class="form-user-input me-5" style="width:79%">
           <input type="number" placeholder="Enter OTP" class="form-control form-user-input" aria-label="Enter OTP" style="
   width: 109%;
" id="pincode-input2" name="pincode-input2">
           </div>
           <input type="button" value="Verify" style="height:10%" id="verify" aria-label="Verify" placeholder="Verify" class="btn mob-btn ms-3" disabled>
         </div>
         
          <div id="errorotp1323434" style="font-size: 20px;"></div>

         <div class="input-group flex-nowrap mt-3">
           <input type="text" placeholder="Enter Referral Code (Optional)" class="form-control form-user-input" aria-label="Enter OTP" style="
   width: 85%;
">
           <input type="button" value="Referral Code" aria-label="Verify" placeholder="Verify" class="btn mob-btn ms-3" >
         </div>

       </div>
       @endif
       <div class="form-check mt-3">
         <input class="form-check-input" type="checkbox" value="" id="termscond" name="termscond">
         <label class="form-check-label" for="termscond">
           Please click on the check box to agree to our <a href="" target="_blank" class="text-decoration-none">Terms & Conditions<span style="color: red;">*</span></a>
         </label>
       </div>
       
       
       
       <div class="form-check mt-3">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
         <label class="form-check-label" for="flexCheckDefault">
           I hereby give my consent for the utilization of the materials shared by me for any marketing purpose associated with the brand. Click to view the <a href="https://www.thepanelstation.com/in/privacypolicy" target="_blank" class="text-decoration-none">Privacy Policy</a> form<span style="color: red;">*</span>
         </label>
       </div>
       
       
       
       
       
       
       <div class="input-group flex-nowrap mt-3">

         <input type="submit" value="submit" class="btn submit-btn w-25">
       </div>
        </form>
     </div>
   </div>
 </section>



 <!-- Footer Starts Here -->
 <footer class="text-white pt-4" style="background-color: #136A7D;">
   <div class="row">
     <div class="col-lg-4 col-md-5 text-white d-inline ms-lg-5 mobile-footer">
       <a href="" class="footer-a">
         FAQ
       </a>
       |
       <a href="" class="footer-a">Privacy Policy</a>
       |
       <a href="" class="footer-a">Terms & Condition</a>
     </div>

     <div class="col-lg-7 col-md-6 float-end text-white d-inline mobile-footer">
       <p class="d-inline float-end" style="background-color: #136A7D;">Copyright &#169; ThePanelStation2023. All rights reserved</p>
     </div>
   </div>

   <div class="row">
     <div class="ms-lg-5 d-inline-block col-lg-3 col-md-3 mobile-footer">
       <img src="./assets/images/TPS-Logo.svg" class="w-75" alt="">
     </div>

     <div class="d-inline col-lg-8 col-md-8 text-lg-end mt-lg-2 text-md-end mobile-footer">
       <a href="" style="color: white;font-size: 24px;text-decoration: none;">
         <i class="fa fa-facebook-square p-1"></i>
       </a>
       <a href="" style="color: white;font-size: 24px;text-decoration: none;">
         <i class="fa fa-twitter-square p-1"></i>
       </a>
       <a href="" style="color: white;font-size: 24px;text-decoration: none;">
         <i class="fa fa-linkedin-square p-1"></i>
       </a>
       <a href="" style="color: white;font-size: 24px;text-decoration: none;">
         <i class="fa fa-instagram p-1"></i>
       </a>
     </div>
   </div>
 </footer>

 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body text-center mb-3">
         <h5 class="text-center fw-bold" style="color: #157C92;">Thank you for your response!</h5>
         <img class="w-50" src="./assets/images/Done-pana 1.svg" alt="">
         <p class="mb-0 mt-3">Your Details have been recorded successfully.</p>
         <p>Explore more ways to win rewards at The Panel Station</p>
         <button type="button" class="btn w-50 submit-btn">Log in</button>
       </div>
     </div>
   </div>
 </div>
 
 <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>

 <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 





 <script>
 
 
 $("#tpsnewform").submit(function(){
     
 //alert("Submitted");
 $("#view-form").css("display", "block");
 //$("#mobilenum").attr("required", "true");

 
 });
 
 $("#generateotp").click(function(){
     var errorMsg = "<p style='color:green;padding-left: 16px;'><?php echo $otpsentprocessing; ?></p>";
           document.getElementById("errorotp").innerHTML = errorMsg
           // $.alert("hello");  
           var data= document.getElementById("mobilenum").value;
           $("#mobileno").text(data);
           
           var checklent="<?php echo $mobilefield20; ?>";
           if(data.length!=parseInt(checklent)){
               console.log('enter1')
                 var errorMsg = "<p style='color:red;padding-left: 16px;'><?php echo $whinvalidmobileno; ?></p>"
                      document.getElementById("errorotp").innerHTML = errorMsg;
                      return false;
           }
           if(data.charAt(0)=="0"){
                console.log('enter2')
                 var errorMsg = "<p style='color:red;padding-left: 16px;'><?php echo $whinvalidmobileno; ?></p>"
                      document.getElementById("errorotp").innerHTML = errorMsg;
                      return false;
           }
           
           /*//$.alert(data);  
          //  if(document.getElementById("otpcodeverigy").value == "12345") { */
          $.ajax({
              type: "POST",
              url: "{{ url('sendsms') }}",
              data: {
                      "_token": "{{ csrf_token() }}",
                      "phonenum": data                       
                    }, 
             /* type: "POST",
              url: "../sendsms.php",
              data: {phonenum:data}, */
              /* //  dataType:'text'; //or HTML, JSON, etc. */
              success: function(response){
                  /* //   $.alert(response); */
                  if(data == "" || data == " "){
                      var errorMsg = "<p style='color:red;padding-left: 16px;'><?php echo $Mobilenumbercannotbeempty; ?></p>"
                      document.getElementById("errorotp").innerHTML = errorMsg
                  }
                  else if(response == '1'){
                      var errorMsg = "<p style='color:red;padding-left: 16px;'><?php echo $WereSorry." ".$Mobile. " ".$alreadyexists; ?></p>"
                      document.getElementById("errorotp").innerHTML = errorMsg
                  }
                  else {
                      
                      
                      

                       $('#verify').attr("disabled", false);
                      
                      
                      var errorMsg = "<p style='color:green;padding-left: 16px;'><?php echo $otpsent; ?></p>"
                      document.getElementById("errorotp").innerHTML = errorMsg

                      $("#exampleModal").modal('show');
                      $('#exampleModal').modal({backdrop: 'static', keyboard: false})
                      /*//$.alert("OTP sent ");
                      //$.alert(response);
                      //  document.getElementById("otpcodeverigy").value = response; */
                      
                  } /*//echo what the server sent back... */
               }
          });
 });

 $("#verify").click(function(){
   var data= document.getElementById("mobilenum").value;
             var pincodeinputval = $("#pincode-input2").val();
             $("#otpcode").val(pincodeinputval);
             var otp = $("#otpcode").val();
             $.ajax({
              type: "POST",
              url: "{{ url('smsgetotp') }}",
              data: {
                      "_token": "{{ csrf_token() }}",
                      "phonenum": data,
                      "checkotp" : otp
                    }, 
        
              success: function(response){
                  
                             
         
          if (otp == "") {    
              var errorMsg = "<p style='color:red;padding-left: 16px;'><?php echo $IncorrectOTP; ?></p>"
            //  document.getElementById("errorotp").innerHTML = errorMsg
              document.getElementById("errorotp1323434").innerHTML = errorMsg
              return false;
          }
          else if (parseInt(response)!=2) {   
              var errorMsg = "<p style='color:red;padding-left: 16px;'><?php echo $IncorrectOTP; ?></p>"
            //  document.getElementById("errorotp").innerHTML = errorMsg
              document.getElementById("errorotp1323434").innerHTML = errorMsg  
              return false;
              } else {    
                  
                     $('#verify').attr("disabled", true);
                    $('#generateotp').attr("disabled", true);

                    $("#otpcodeverigy").val("Mobile number verified");
                    $("#mobilenum11").val($("#mobilenum").val());        
                   var errorMsg = "<p style='color:green;padding-left: 16px;'><?php echo $Mobilenumberverified; ?></p>"
                //  document.getElementById("errorotp").innerHTML = errorMsg
                  document.getElementById("errorotp1323434").innerHTML = errorMsg
                  document.getElementById("mobilenum").disabled = true;
                  document.getElementById("gotp").style.display = "none";
                  document.getElementById("votp").style.display = "none"; 
                  document.getElementById("otpcode").style.display = "none";
                  document.getElementById("otpinput").style.display = "none";
                  $("#otpcodeverigy").val("Mobile number verified");
                  
                  <?php /* if($mobileverification == 1 && ($countycode1 == 'IN'|| $countycode1 == 'ZA')) { */ ?>
                  $("#exampleModal").modal('hide');
                  $('#myModal26').modal({ backdrop: 'static', keyboard: false });
                  <?php /* }*/ ?>

               }
             }
           });
 });


 $('#tpsnewform').validate({
 rules: {
 "fname": {
        required: true,
        minlength: 5,
    },
   "mobilenum": {
        required: true,
        minlength: 5,
    },
     "lname": {
        required: true,
        minlength: 5,
    },
     "email": {
        required: true,
        minlength: 5,
    },
     "inputGroupSelect02": {
        required: true,
    },
     "date": {
        required: true,
    },
    "pincode-input2":{
         required: true,
    },
    "password": {
           required: true,
           minlength: 8,
           maxlength:12
       },
    "password_confirm": {
           required: true,
           minlength: 8,
           maxlength:12,
           equalTo: "#password"
       }
 },
 
//   messages: {
//     "fname": {
//          required: "this field is required",
//          minlength: "this field must contain at least {0} characters",
//      }
//   }
});





$('#actual-btn').change(function() {
 //  alert('hello')
 var i = $(this).prev('label').clone();
 var file = $('#actual-btn')[0].files[0].name;
 
var ext = $('#actual-btn').val().split('.').pop().toLowerCase();
var filesize = $('#actual-btn')[0].files[0].size;
console.log('filesuize',filesize)
if($.inArray(ext, ['gif','png','jpg','jpeg','txt','mp4','mov','3pg']) != -1) {
    
  if($.inArray(ext, ['gif','png','jpg','jpeg','txt']) != -1 && filesize<5000000 ){
    //  alert('inv')
    console.log(file)
  }
  
  if($.inArray(ext, ['mp4','mov','3pg']) != -1 && filesize<25000000){
    //  alert('inv')
         console.log(file)
  }
}
 //$(this).prev('label').text(file);
});


//password show

$('#password_1').click(function(){
     var passInput=$("#id_password");
     if(passInput.attr('type')==='password')
       {
       //alert('enter')
        // $('#id_password').attr('type','text');
         document.getElementById('id_password').setAttribute('type', 'text');
         $('#id_password').removeClass('fa-eye-slash')
         $('#id_password').addClass('fa-eye')

     }else{
        //passInput.attr('type','password');
       document.getElementById('id_password').setAttribute('type', 'password');
     }
})


$('#password_2').click(function(){
   // alert('hjhjhh')
     var passInput=$("#id_password_1");
     if(passInput.attr('type')==='password')
       {
       //alert('enter')
        // $('#id_password').attr('type','text');
         document.getElementById('id_password_1').setAttribute('type', 'text');
         $('#id_password_1').removeClass('fa-eye-slash')
         $('#id_password_1').addClass('fa-eye')

     }else{
        //passInput.attr('type','password');
       document.getElementById('id_password_1').setAttribute('type', 'password');
     }
})






 </script>
</body>

</html>