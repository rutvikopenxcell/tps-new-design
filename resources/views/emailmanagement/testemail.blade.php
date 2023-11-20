<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="The_Panel_Staion" content="The Panel Staion">
    <title>The Panel Station</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      
      /*All the styling goes here*/
      
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }

      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #f6f6f6;
        width: 100%; 
      }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        Margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        Margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }

      a {
        color: #3498db;
        text-decoration: underline; 
      }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }

      .btn-primary table td {
        background-color: #3498db; 
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }

      .align-right {
        text-align: right; 
      }

      .align-left {
        text-align: left; 
      }

      .clear {
        clear: both; 
      }

      .mt0 {
        margin-top: 0; 
      }

      .mb0 {
        margin-bottom: 0; 
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }

      .powered-by a {
        text-decoration: none; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; 
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }

    </style>
  </head>
  <body class="">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader">The_Panel_Staion</span>
            <table role="presentation" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <img src="https://recruitment.thepanelstation.com/engagement_creatives/Survey_Template_Emailer_English.png" alt="TPS_Hero">
                       <p align="center"; style="font-family: sans-serif; font-size: 18px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><br>You have the time, we have the survey! </p>

                         <p align="Center"style="font-family: sans-serif; font-size: 13px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Your opinions make the world better and so here's a new survey for you! </p>

                        <p align="Center"; style="font-family: sans-serif; font-size: 13px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Partake now and start earning!</p>

                        <table  align="Center"; width="40%"  cellspacing="2" cellpadding="2" style="width:40%">
                          <tr align="center" font-size="10px">
                            <td style="font-family: sans-serif; font-size:12px; border: 1px solid black;";><b>SurveyID</b></td>
                            <td style="font-family: sans-serif; font-size: 12px; border: 1px solid black;";><b>Points</b></td>
                          </tr>
                          <tr align="center">
                            <td style="font-family: sans-serif; font-size:12px; border: 1px solid black;";><b>#ProjectID#</b></td>
                            <td style="font-family: sans-serif; font-size:12px; border: 1px solid black;";><b>#Points#</b></td>
                          </tr>                          
                        </table>
                        <br/>
                        <p align="Center"; style="font-family: sans-serif; font-size: 13px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Click on "Let's Begin" to participate. </p>

                      <p align="Center"; style="font-family: sans-serif; font-size: 13px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Be honest! Be real! Be YOU!!</p>

                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td align="center"> <a href="#SurveyURL#" target="_blank">Let's Begin</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                          <p align="center" ; style="font-family: sans-serif; font-size: 13px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Button not working? 
                            <a href="#SurveyURL#">Click here</a></p>
                              <p style="font-family: sans-serif; font-size: 13px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Warm Regards,<br>The Panel Station Team.</p>

                        <br>

                         <p align="center" ; style="font-family: sans-serif; font-size:12px; font-weight: normal; margin: 0; Margin-bottom: 15px;"> You Can download our App:</p>

                          <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td align="center">
                                        <a href="http://goo.gl/FDxc1c" target="_blank">
                                          <img src="http://thepanelstation.com/images/mailimages/app-store-reminder.png" alt="Available on the App Store"  border="0" />
                                        </a>
                                        <a href="http://goo.gl/cw8FY1" target="_blank">
                                          <img src="http://thepanelstation.com/images/mailimages/google-play-reminder.png" border="0" alt="Get it on Google Play"/>
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>            
            <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                      <p align="center" ; style="font-family: sans-serif; font-size:08px; font-weight: normal; margin: 0;color: #000;">Please add us to the safe sender list to receive our emails in your inbox.</p>

                       <p align="center" style="font-family:Normal; font-size:08px; color:#999999;"> <b>Address:</b> Embassy Tech Village, Building 2A Ground Floor, East Tower <br> Sarjapura, Outer Ring Rd, Bengaluru, Karnataka 560103<br>
                            <a href="https://thepanelstation.com/India/terms_and_conditions" target="_blank" style="font-family:Normal; font-size:09px; text-decoration:none; color:#999999;"><u>Terms and</u></a> |
                              <a href="https://thepanelstation.com/India/privacy_policy" target="_blank" style="font-family:Normal; font-size:09px; text-decoration:none; color:#999999;"><u>Privacy Policy</u></a> |

                            <a href="http://www.thepanelstation.com/mystation/newunsubscribe.aspx?PID=#PanelistID#" onclick="return true" target="_blank" style="font-family:Normal; font-size:09px; text-decoration:none; color:#999999;"><u>Unsubscribe</u></a> 
                            <br/>
                            <a href="mailto:uk@thepanelstationsurveys3.com" style="font-family:Normal; font-size:09px; text-decoration:none; color:#999999;">Email:india@thepanelstationsurveys3.com</a>
                      </p>
                 </td>
                </tr>
                <tr>
                  <td class="social-link">
                   <a href="https://www.facebook.com/TPSIndiaOfficial/">
                    <img src="https://thepanelstation.com/images/mails/Facebook.png" alt="Facebook" style="width:26px;height:Auto;border;"></a>
                      <a href="https://twitter.com/TPS_India">
                       <img src="https://thepanelstation.com/images/mails/Twitter.png" alt="Twitter" style="width:26px;height:Auto;border:0;"></a>
                      <a href="https://www.instagram.com/thepanelstation/">
                       <img src="https://thepanelstation.com/images/mails/instagram.png" alt="Instagram" style="width:26px; height:Auto;border:0;">
                      </a>
                      <a href="https://in.pinterest.com/thepanelstation">
                        <img src="https://thepanelstation.com/images/mails/pinterest.png" alt ="Pinterest" style="width:26px;height:Auto;border:0;">
                      </a>
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
