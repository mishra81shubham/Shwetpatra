<?php
if (isset($_POST['submit'])) {
  $ToEmail = 'shwetpatrallp@gmail.com';
  $EmailSubject = 'Shwet Patra';
  $mailheader = "From: " . $_POST["email"] . "\r\n";
  $mailheader .= "Reply-To: " . $_POST["email"] . "\r\n";
  $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $MESSAGE_BODY = "Name: " . $_POST["name"] . "<br>";
  $MESSAGE_BODY .= "Email: " . $_POST["email"] . "<br>";
  $MESSAGE_BODY .= "Phone: " . $_POST["phone"] . "<br>";
  $MESSAGE_BODY .= "Subject: " . nl2br($_POST["subject"]) . "<br>";
  $MESSAGE_BODY .= "Message: " . nl2br($_POST["message"]) . "<br>";
  if (mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die("Failure")) {
    echo "<script>alert('Enquiry submitted successfully')</script>";
  } else {
    echo "<script>alert('Something went wrong')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shwet Patra LLP | Contact Us</title>
  <meta name="description" content="If you have any problem regarding our finance and legal services please feel free to reach us. 
   We can talk about any queries, and doubt about our business and services."/>
  <meta name="keywords" content="Contact Us, Contact Us for Help"/>
  <link rel="canonical" href="http://shwetpatra.com/contact-us" />

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital@1&amp;display=swap" rel="stylesheet">
  
  <meta name="google-site-verification" content="ZYVjJ8yY7VAKIxZpg4kOL21H3y7VKWCdl8hQKxB16QQ" />

  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
  <link rel="manifest" href="assets/manifest.json">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="assets/css/color.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css" media="screen" />
  

  <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox-buttons3447.css?v=1.0.5" />
  <!-- main -->
  <link rel="stylesheet" type="text/css" href="assets/css/main2.css" />
  <link href="assets/mailchump-css/classic-10_7.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&amp;display=swap" rel="stylesheet">

  <!--slider css end-->

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-82LE9K9R0G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-82LE9K9R0G');
</script>




</head>

<body class="tg-home tg-homeversion 1">

  <div id="tg-wrapper" class="tg-wrapper tg-haslayout">

    <!-- header stsrt here  -->

    <?php include('header.php'); ?>

    <!-- header end here  -->

    <div class="clear-fixed clearfix" style="clear:both;"></div>




    <div id="tg-innerbanner" class=" tg-haslayout">
      <div class="mngtopbancon"><img style="max-width:100%;" src="assets/img/contact-us.jpg" alt="contact us" title="contact us"></div>

    </div>
    <main>
      <section class="tg-main-section">
        <div class="container">
          <div class="row">
            <div class=" col-lg-12   col-md-10  col-sm-12 col-xs-12">
              <div class="tg-sectionhead">
                <div class="tg-sectiontitle">
                  <h2>Let’s talk</h2>

                </div>
              </div>
              <div class="text-center">
                <h3 style="padding-bottom:14px">For any queries or assistance, Kindly feel free to reach out to us </h3>


              </div>
            </div>
            <div class=" col-lg-6   col-md-10  col-sm-12 col-xs-12">
              <div id="tg-sidebar" class="tg-siderbar contactUs">
                <div class="tg-widget tg-widgetbrochure">
                  <div class="tg-widgettitle">
                    <h3> Head office</h3>
                  </div>
                  <div class="tg-widgetcontent">
                    <div class="tg-brochure">
                      <ul>
                        <li>
                          <a href="#" target="_blank">
                            <i class="fa fa-map" aria-hidden="true"></i><span>118B, LGF, Sector 30 Gurugram, Haryana, India, 122001 </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="tg-brochure">
                      <ul>
                        <li> <i class="fa fa-envelope-o" aria-hidden="true"></i> <span>
                            <a href="mailto:info@shwetpatra.com">info@shwetpatra.com</a>
                          </span> </li>
                      </ul>
                    </div>
                    <div class="tg-brochure">
                      <ul>
                        <li> <i class="fa fa-phone" aria-hidden="true"></i> <span><a href="tel:919650244811"> +91 96502 44811</a></span> </li>
                      </ul>
                    </div>
                  </div>
                  <div></div>
                </div>
              </div>
            </div>
            <div class=" col-lg-6   col-md-10  col-sm-12 col-xs-12">
              <form class="tg-themeform" action="" method="post">
                <fieldset>
                  <div class="col-sm-12">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required id="name" maxlength="100">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Your Number" required id="phone" onkeypress="javascript:return isNumber(event);" maxlength="15">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email" required id="email" maxlength="100">
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <div class=" ">
                          <select name="subject" id="subject">
                            <option value="">Select Services</option>
                            <option value="Taxation">Taxation</option>
                            <option value="Accounting & Audit Support">Accounting Support</option>
                            <option value="Risk Assurance Services">Risk Assurance (RAS)</option>
                            <option value="Legal & Regulatory">Legal & Regulatory</option>
                            <option value="valuation">Valuation</option>
                            <option value="land-service">Land Related Services</option>
                            <!-- <option value="website-development.php">Website Design & Development</option> -->
                            <option value="Startups">Startups</option>
                            <option value="Loan Staffing">Loan Staffing</option>
                            <option value="Coaching for Leaders">Coaching for Leaders</option>
                            <option value="Virtual Chief Financial Officer (vCFO)">Virtual Chief Financial Officer (vCFO)</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 col-xs-12">
                      <div class="form-group">
                        <textarea placeholder="Message" name="message" id="message" required></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 text-center">

                      <button type="submit" name="submit" class="tg-btn" style="color:#1b3f74;"><span>Send</span></button>
                    </div>
                </fieldset>
              </form>
            </div>
            <div class="clearfix"></div>



          </div>

        </div>

        <div class="container">
          <div class="row">
            <div class="mapouter col-md-12 contactMap">
              <div class="mapouter">
                <div class="gmap_canvas">


                  <iframe src="https://maps.google.com/maps?q=118B,%20LGF,%20Sector%2030Gurugram%20%E2%80%93%20122001&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
                <style>
                  .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                  }

                  .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                  }
                </style>
              </div>
            </div>
          </div>

        </div>
      </section>

    </main>



    <div class="clearfix"></div>
    <section class="tg-haslayout tg-bglight tg-bgimage contForm contactfooterForm">
      <div class="container">
        <div class="row">
          <div class="tg-requestcallback">
            <div class="col-sm-3 hidden-xs">
              <figure> <img src="public/assets/img/call.png" alt="Chartered Accountant in New Delhi" title="request a call back"> </figure>
            </div>
            <div class="col-sm-9 col-xs-12">
              <div class="tg-contentbox">
                <div class="tg-sectionhead">
                  <div class="tg-sectiontitle">
                    <h3>Request a call back</h3>

                  </div>
                  <div class="tg-description">
                    <p>"Need to know more about our services or what we do? Drop us your contact details and one of our professionals will call you to answer your query!" </p>
                  </div>
                </div>
                <form class="tg-formtheme" id="contact-form" name="contact-form">
                  <fieldset>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" placeholder="Your Name" required id="name" maxlength="100" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <input type="number" class="form-control" name="phone" placeholder="Your Number" required id="phone" onkeypress="javascript:return isNumber(event);" maxlength="10" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Your Email" required id="email" maxlength="100">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <div class=" ">
                            <select name="subject" id="subject" required>
                              <option value="">Select Option</option>
                              <option value="">Select Option</option>
                              <option value="Taxation">Taxation</option>
                              <option value="Accounting & Audit Support">Accounting Support</option>
                              <option value="Risk Assurance Services">Risk Assurance (RAS)</option>
                              <option value="Legal & Regulatory">Legal & Regulatory</option>
                              <option value="valuation">Valuation</option>
                              <option value="land-service">Land Related Services</option>
                              <!-- <option value="website-development.php">Website Design & Development</option> -->
                              <option value="Startups">Startups</option>
                              <option value="Loan Staffing">Loan Staffing</option>
                              <option value="Executive Coaching for Women Leaders">Executive Coaching for Women Leaders</option>
                              <option value="Virtual Chief Financial Officer (vCFO)">Virtual Chief Financial Officer (vCFO)</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <p id="responseMsg"></p>
                      <div class="">
                        <div class="form-group Form-btn">
                          <input type="hidden" name="contact_generator" value="confirm">
                          <button type="button" class="tg-btn btn_bg tg-btn-lg" onclick="otpformfooter()"><span>Send</span></button>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- footer section start here  -->

    <?php include('footer.php'); ?>


</body>

</html>