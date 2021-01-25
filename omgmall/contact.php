<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$to_name = "Hannah Leung";
$to_email = "leunghiuyan219@gmail.com";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "To: $to_name <$to_email>\r\n";
$headers .= "From: $name <$email_address>\r\n";

$subject = "OMG聯絡我們";
$body = 
"姓名 / Name: " . $name . "\r\n" . 
"電話 / Phone no.: " . $phone . "\r\n" . 
"電郵 / E-mail: " . $email_address . "\r\n" . 
"信息 / Message: " . $message;

if (!mail($to_email, $subject, $body, $headers)) {
  print_r(error_get_last());
} else { ?>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
    <link rel="stylesheet" href="resources/styles.css">
    <title>已提交 Submitted</title>
  </head>
      
  <body>
    <div class="w3-container">
      <div class="w3-display-middle">
        <h2>表格已提交！</h2>
        <h5>Form has been submitted!</h5>
        <p>謝謝，我們會盡快聯絡您。</p>
        <p>Thank you, we will contact you soon.</p>
      </div>
      <div class="w3-display-bottommiddle">
        <p><a href="index.html">返回 Back</a></p>
      </div>
    </div>
  </body>
<?php
  }
?>