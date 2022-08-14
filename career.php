<?php

if(isset($_POST['submit'])){
    $postData = $uploadedFile = $statusMsg = '';
    $msgClass = 'errordiv';
    if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['email'];
    $name = $_POST['fname'];
    $subject = 'Shwet Patra';
    $message = 'Hi we send a file';
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) ){
    // Validate email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    $statusMsg = 'Please enter your valid email.';
    }else{
    $uploadStatus = 1;
    // Upload attachment file
    if(!empty($_FILES["attachment"]["cvupload"])){
    // File path config
    $targetDir = "upload/";
    $fileName = basename($_FILES["attachment"]["cvupload"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
    if(in_array($fileType, $allowTypes)){
    // Upload file to the server
    if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
    $uploadedFile = $targetFilePath;
    }else{
    $uploadStatus = 0;
    $statusMsg = "Sorry, there was an error uploading your file.";
    }
    }else{
    $uploadStatus = 0;
    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
    }
    }
    if($uploadStatus == 1){
    // Recipient
    $toEmail = 'mishra81shubham@gmail.com';
    // Sender
    $from = 'sender@example.com';
    $fromName = 'RexcelIT';
    // Subject
    $emailSubject = 'Contact Request Submitted by '.$name;
    // Message
    $htmlContent = '
    
    
    //Contact Request Submitted
    Name: '.$name.'
    Email: '.$email.'
    Subject: '.$subject.'
    Message:
    '.$message.'
    ';
    // Header for sender info
    $headers = "From: $fromName"." <".$from.">";
    if(!empty($uploadedFile) && file_exists($uploadedFile)){
    // Boundary
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    // Headers for attachment
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
    // Multipart boundary
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
    // Preparing attachment
    if(is_file($uploadedFile)){
    $message .= "--{$mime_boundary}\n";
    $fp = @fopen($uploadedFile,"rb");
    $data = @fread($fp,filesize($uploadedFile));
    @fclose($fp);
    $data = chunk_split(base64_encode($data));
    $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" .
    "Content-Description: ".basename($uploadedFile)."\n" .
    "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" .
    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $email;
    // Send email
    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
    // Delete attachment file from the server
    @unlink($uploadedFile);
    }else{
    // Set content-type header for sending HTML email
    $headers .= "\r\n". "MIME-Version: 1.0";
    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
    // Send email
    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
    }
    // If mail sent
    if($mail){
    $statusMsg = 'Your contact request has been submitted successfully !';
    $msgClass = 'succdiv';
    $postData = '';
    }else{
    $statusMsg = 'Your contact request submission failed, please try again.';
    }
    }
    }
    }else{
    $statusMsg = 'Please fill all the fields.';
    }
    }
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shwet Patra LLP | Services re Acquisition of Land</title>
    <link rel="canonical" href="index.php" />
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
                    <form class="mainformcar" action="#">

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Email</label>
                                <input type="email" class="form-control" id="Email" placeholder="abc@gmail.com">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Mobile Number</label>
                                <input type="number" class="form-control" id="number" placeholder="Mobile Number">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">City</label>
                                <input type="text" class="form-control" id="City" placeholder="City">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Country</label>
                                <input type="text" class="form-control" id="Country" placeholder="Country">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">CV Upload</label>
                                <input type="file" class="form-control" id="Country" placeholder="Country">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Number of years of experience</label>
                                <input type="number" class="form-control" id="number" placeholder="Years of experience">
                            </div>
                        </div>
                </div>
                <div class="submitbtn">
                    <button class="clsubmithd" type="submit" style="color:#fff;">Submit</button>
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