<?php

if (isset($_POST['submit'])) {
    $from_email = 'info@shwetpatra.com'; //from mail, sender email address

    //Load POST data from HTML form

    $reply_to_email = $_POST["email"]; //sender email, it will be used in "reply-to" header
    $MESSAGE_BODY = '';

    $ToEmail = 'shwetpatrallp@gmail.com';
    $subject = 'Shwet Patra';
    $mailheader = "From: " . $_POST["email"] . "\r\n";
    $mailheader .= "Reply-To: " . $_POST["email"] . "\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $MESSAGE_BODY = "Name: " . $_POST["name"] . "\r\n";
    $MESSAGE_BODY .= "Email: " . $_POST["email"] . "\r\n";
    $MESSAGE_BODY .= "Phone: " . $_POST["phone"] . "\r\n";
    $MESSAGE_BODY .= "City: " . $_POST["city"] . "\r\n";
    $MESSAGE_BODY .= "Country: " . $_POST["country"] . "\r\n";
    $MESSAGE_BODY .= "Subject: " . nl2br($_POST["subject"]) . "\r\n";
    $MESSAGE_BODY .= "Experience: " . nl2br($_POST["experience"]) . "\r\n";
    /*Always remember to validate the form fields like this
    if(strlen($sender_name)<1)
    {
        die('Name is too short or empty!');
    }
    */
    //Get uploaded file data using $_FILES array
    $tmp_name = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server
    $name     = $_FILES['attachment']['name']; // get the name of the file
    $size     = $_FILES['attachment']['size']; // get size of the file for size validation
    $type     = $_FILES['attachment']['type']; // get type of the file
    $error     = $_FILES['attachment']['error']; // get the error (if any)
    $MESSAGE_BODY .= "CV: " . $name . "\r\n";
    //validate form field for attaching the file
    if ($error > 0) {
        die('Upload error or No files uploaded');
    }

    //read from the uploaded file & base64_encode content
    $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
    $content = fread($handle, $size); // reading the file
    fclose($handle);                 // close upon completion

    $encoded_content = chunk_split(base64_encode($content));
    $boundary = md5("random"); // define boundary with a md5 hashed value

    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:" . $from_email . "\r\n"; // Sender Email
    $headers .= "Reply-To: " . $reply_to_email . "\r\n"; // Email address to reach back
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($MESSAGE_BODY));

    //attachment
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: $type; name=" . $name . "\r\n";
    $body .= "Content-Disposition: attachment; filename=" . $name . "\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
    $body .= $encoded_content; // Attaching the encoded file with email

    $sentMailResult = mail($ToEmail, $subject, $body, $headers);
    if ($sentMailResult) {
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
    <title>Shwet Patra LLP | Legal Careers</title>
    <meta name="description" content="We welcome new talent at Shwet Patra and if you want to start your finance and legal career 
    with us please fill out the form and we reach out to you as soon as possible."/>
    <meta name="keywords" content="legal career services, legal career options, legal careers"/>
    <meta name="google-site-verification" content="ZYVjJ8yY7VAKIxZpg4kOL21H3y7VKWCdl8hQKxB16QQ" />
    <link rel="canonical" href="http://shwetpatra.com/career" />

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital@1&amp;display=swap" rel="stylesheet">


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

<body>

    <!-- header satrt here -->

    <?php include('header.php'); ?>

    <!-- header end here -->

    <!-- section one start here  -->

    <section id="start-up-banner">
        <div class="start-up-banner">

            <h1>Career</h1>

        </div>
    </section>

    <!-- section two start here -->

    <section class="direct-sec">
        <div class="container">
            <div class="row direct1">
                <h1>Career</h1>
                <div class="col-md-12">
                    <form class="mainformcar" action=" " method="post" enctype="multipart/form-data">

                        <div class="form-row row">
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Full Name</label>
                                <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Services</label>
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


                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Email</label>
                                <input type="email" name="email" class="form-control" id="Email" placeholder="abc@gmail.com">
                            </div>

                        </div>

                        <div class="form-row row">

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Mobile Number</label>
                                <input type="number" name="phone" class="form-control" id="number" placeholder="Mobile Number">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">City</label>
                                <input type="text" name="city" class="form-control" id="City" placeholder="City">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Country</label>
                                <input type="text" name="country" class="form-control" id="Country" placeholder="Country">
                            </div>
                        </div>
                        <div class="form-row row">

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">CV Upload</label>
                                <input type="file" name="attachment" class="form-control" id="Country" placeholder="Country">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Number of years of experience</label>
                                <input type="number" name="experience" class="form-control" id="number" placeholder="Years of experience">
                            </div>
                        </div>
                </div>
                <div class="submitbtn">
                    <button class="clsubmithd" type="submit" name="submit" style="color:#fff;">Submit</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>


    <!-- footer section start here  -->

    <?php include('footer.php'); ?>


</body>

</html>