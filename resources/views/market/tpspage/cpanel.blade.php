<?php include(app_path() . '/libraries/common/topheader.php'); ?>

<?php include(app_path() . '/libraries/common/qlib.php');?>
 
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
</head>


<body>

<!-- Section - 5 Starts Here -->

<section class="sec-5" id="sec5">
  <div class="row mt-5 pt-5">
    <div class="col-lg-5 col-md-6 col-sm-6 text-center mt-lg-5 pt-lg-5 mb-5">
      <h1 class="fw-bold" style="color: #157C92;">form</h1>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 p-3 offset-lg-1">
      <form id="tpsnewform">
      <div class="input-group flex-nowrap">
        <input type="text" name="fname" aria-label="First name" placeholder="<?php echo $fname; ?>" class="form-control form-user-input me-3" required>
        <input type="text" aria-label="Last name" placeholder="<?php echo $lname; ?>" class="form-control form-user-input" required>
      </div>
      <div class="input-group mt-3 w-100">
        <input type="email" class="form-control form-user-input" placeholder="<?php echo $email; ?>" aria-label="Email id" aria-describedby="addon-wrapping" required>
        <input type="file" class="form-control" id="actual-btn" hidden>
        <label for="actual-btn" class="file-upload ms-2"><i style="font-size:18px" class="fa  pe-2">&#xf093;</i>Upload file</label>
      </div>
      
      @if($_GET['countrycoderemote'] == "IN")
      <!-- for india market-->
      <div id="view-form" style="display: block;">
            <div class="input-group flex-nowrap mt-3">
              <input type="password" aria-label="Password" placeholder="Password" class="form-control form-user-input me-3" maxlength="12" id="id_password" onfocus="message()">
              <span class="input-group-addon" role="button" title="veiw password" id="passBtn" style="cursor: pointer;
            position: relative;
            right: 30px;
            top: 7px;z-index: 11;">
              <i class="fa fa-eye-slash" aria-hidden="true"></i>
            </span>
            
              <input type="password" aria-label="Confirm Password" placeholder="Confirm Password" class="form-control form-user-input" maxlength="12" id="id_password-1" onfocus="message1()">
              <span class="input-group-addon" role="button" title="veiw password" id="passBtnn" style="cursor: pointer;
            position: relative;
            right: 15px;
            top: 7px;z-index: 11;">
              <i class="fa fa-eye-slash" aria-hidden="true"></i>
            </span>
            </div>

            <div class="text-center mt-3">
              <p class="textArea2" id="textArea2" style="display: block;">To keep a strong new password make sure to add 8-12 characters containing at least one numeric value, one upper case letter and one special character</p>
            </div>


            <div class="input-group flex-nowrap mt-3">
                <select class="form-select form-user-input" id="inputGroupSelect02">
                  <option selected="">Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="3">Other</option>
                </select>
              <input type="text" aria-label="Date" placeholder="Date of Birth" onfocus="(this.type='date')" class="form-control form-user-input ms-3">
            </div>

            <div class="input-group flex-nowrap mt-3">
              <span class="input-group-text me-1">+ 91</span>
            <input type="number" maxlength="10" placeholder="Mobile Number" class="form-control form-user-input" aria-label="Mobile Number">
            <input type="button" value="Generate OTP" class="btn mob-btn ms-3">
          </div>

          <div class="input-group flex-nowrap mt-3">
          <input type="number" placeholder="Enter OTP" class="form-control form-user-input" aria-label="Enter OTP">
          <input type="button" value="Verify" aria-label="Verify" placeholder="Verify" class="btn mob-btn ms-3">
        </div>

        <div class="input-group flex-nowrap mt-3">
          <input type="text" placeholder="Enter Referral Code (Optional)" class="form-control form-user-input" aria-label="Enter OTP">
          <input type="button" value="Referral Code" aria-label="Verify" placeholder="Verify" class="btn mob-btn ms-3">
        </div>

      </div>
      @endif
      <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
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
    
// alert("Submitted");
$("#view-form").css("display", "block");

});



//  $('#tpsnewform').validate({
//   rules: {
//     "fname": {
//          required: true,
//          minlength: 5,
//          digits: true
//      }
//   },
//   messages: {
//     "fname": {
//          required: "this field is required",
//          minlength: "this field must contain at least {0} characters",
//          digits: "this field can only contain numbers"
//      }
//   }
// });
</script>
</body>

</html>