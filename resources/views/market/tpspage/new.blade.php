<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TPS Campaign</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arsenal&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @include('market.tpspage.css')
</head>


<body>
  <nav class="navbar bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand d-inline" href="#">{!! $cmp_logo->text !!}</a>
      <div class="navbar-brand d-inline text-end">
        <a href="" class="fs-5 nav-link nav-text">{!! $cmp_name->text !!}</a>
      </div>
    </div>
  </nav>
  <!-- Section - 1 Starts Here -->
  <section class="sec-1">
    <div class="container pt-1 pb-5">
      <div class="row sec-row-1 mt-5 pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-end bg-img">
          <h1 class="text-white sec-1-h1">{!! $section_1_title->text !!}</h1>
          <a href="#sec5"><button class="btn btn-primary btn-sec-1 px-5 mt-4 py-2 fs-5">{!! $section_1_btn->text !!}</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - 2 Starts Here -->
  <section class="sec-2">
    <div class="row sec-row-2" style="background-color: #157C92;">
      <div class="col-lg-5 mt-lg-4">
        <h1 class="text-center mt-5 pt-lg-5 text-white">{!! $section_2_title->text !!}</h1>
      </div>
      <div class="col-lg-7 p-3 py-lg-5">
        <div class="">
          {!! $section_2_text->text !!}
        </div>
      </div>
    </div>
  </section>

  <!-- Section - 3 Starts Here -->
  <section class="sec-3">
    <div class="row sec-3-col m-lg-5 p-2">
      <div class="col-lg-5 col-md-5 col-sm-5 sec-3-col-1">
        {!! $section_3_image->text !!}
      </div>
      <div class="col-lg-7 col-md-7 col-sm-7 mt-lg-5 ps-3">
        <h3 class="fw-bolder sec-3-header"> {!! $section_3_title->text !!}</h3>
        {!! $section_3_text->text !!}
      </div>
    </div>

    <div class="row sec-3-col m-lg-5 p-2">
      <div class="col-lg-5 col-md-5 col-sm-5 text-center desktop-hide sec-3-col-1-1">
        {!! $section_4_image->text !!}
      </div>
      <div class="col-lg-7 col-md-7 col-sm-7 mt-lg-5 ps-3">
        <h3 class="fw-bolder sec-3-header">{!! $section_4_title->text !!}</h3>
        {!! $section_4_text->text !!}
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5 text-lg-end mobile-hide">
        {!! $section_4_image->text !!}
      </div>
    </div>
  </section>

  <!-- Section - 4 Starts Here -->
  <section class="sec-4 mt-5 pt-5 text-center">
    @if($section_enroll_title->text)
    <div>
      <h1 class="sec-4-header fw-bolder"> {!! $section_enroll_title->text !!}</h1>
    </div>
    @endif

    @if($section_step_1_title->text && $section_step_2_title->text && $section_step_3_title->text)
    <?php $col = 4; ?>
    @elseif($section_step_1_title->text && $section_step_2_title->text)
    <?php $col = 6; ?>
    @elseif($section_step_1_title->text && $section_step_3_title->text)
    <?php $col = 6; ?>
    @elseif($section_step_2_title->text && $section_step_3_title->text)
    <?php $col = 6; ?>
    @else
    <?php $col = 12; ?>
    @endif

    <div class="row sec-row-4 mt-lg-5 px-lg-5">
      @if($section_step_1_title->text &&  $section_step_1_image->text && $section_step_1_text->text )
      <div class="col-sm-{{$col}} sec-4-col p-3">
        <div class="card" style="background-color: #157C92;">
          <div class="p-4 text-white">
            <h4>{!! $section_step_1_title->text !!}</h4>
          </div>
          <div class="text-center card-img p-4">
            {!! $section_step_1_image->text !!}
          </div>
          <div class="card-body">
            <p class="card-text text-white p-lg-3"> {!! $section_step_1_text->text !!}</p>
          </div>
        </div>
      </div>
      @endif
      
      @if($section_step_2_title->text &&  $section_step_2_image->text && $section_step_2_text->text )
      <div class="col-sm-{{$col}} sec-4-col p-3">
        <div class="card" style="background-color: #157C92;">
          <div class="p-4 text-white">
            <h4>{!! $section_step_2_title->text !!}</h4>
          </div>
          <div class="text-center card-img p-4">
            {!! $section_step_2_image->text !!}
          </div>
          <div class="card-body">
            <p class="card-text text-white p-lg-3">{!! $section_step_2_text->text !!}</p>
          </div>
        </div>
      </div>
      @endif

      @if($section_step_3_title->text &&  $section_step_3_image->text && $section_step_3_text->text )
      <div class="col-sm-{{$col}} sec-4-col p-3">
        <div class="card" style="background-color: #157C92;">
          <div class="p-4 text-white">
            <h4>{!! $section_step_3_title->text !!}</h4>
          </div>
          <div class="text-center card-img p-4">
            {!! $section_step_3_image->text !!}
          </div>
          <div class="card-body">
            <p class="card-text text-white p-lg-3">{!! $section_step_3_text->text !!}</p>
          </div>
        </div>
      </div>
      @endif

    </div>
  </section>

  <!-- Section - 5 Starts Here -->
  <section class="sec-5" id="sec5">
    <div class="row mt-5 pt-5">
      <div class="col-lg-5 col-md-6 col-sm-6 text-center mt-lg-5 pt-lg-5 mb-5">
        <h1 class="fw-bold" style="color: #157C92;">{!! $section_form_title->text !!}</h1>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 p-3 offset-lg-1">
        <div class="input-group flex-nowrap">
          <input type="text" aria-label="First name" placeholder="First Name" class="form-control form-user-input me-3">
          <input type="text" aria-label="Last name" placeholder="Last Name" class="form-control form-user-input">
        </div>
        <div class="input-group mt-3 w-100">
          <input type="email" class="form-control form-user-input" placeholder="Email id" aria-label="Email id" aria-describedby="addon-wrapping">
          <input type="file" class="form-control" id="actual-btn" hidden>
          <label for="actual-btn" class="file-upload ms-2"><i style="font-size:18px" class="fa  pe-2">&#xf093;</i>Upload file</label>
        </div>
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

          <input type="button" value="Submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn submit-btn w-25">
        </div>

      </div>
    </div>
  </section>

  <!-- Section - 6 Starts here -->
  <section class="sec-6">
    <div class="row mt-5 pt-5">
      <div class="col-lg-6 col-md-6">
        <?php
        $var0 = str_contains($section_bottom_image->text, 'img');
        if ($var0) {
          $var1 = str_replace('<p>', '', $section_bottom_image->text);
          $var2 = str_replace('</p>', '', $section_bottom_image->text);
        } else {
          $var2 = $section_bottom_image->text;
        }
        ?>
        {!! $var2 !!}
      </div>

      <div class="col-lg-6 col-md-6 pt-5 pe-5" style="background-color: #157C92;">
        <h3 class="text-end text-white pt-lg-5 mt-lg-5">

          {!! $section_bottom_title->text !!}
        </h3>

        <p class="p-1 text-end mt-lg-5 text-white">
          {!! $section_bottom_text->text !!}
        </p>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>