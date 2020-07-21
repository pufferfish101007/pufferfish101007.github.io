Black Lives Matter. Read our official statement here.


can-i-make-a-contact-form

index.md
<!doctype html>

<html> <head> <!--<link rel="stylesheet" type="text/css" href="style.css">--> </head> <body> <?php if($_POST) { $visitor_name = ""; $visitor_email = ""; $email_title = ""; $concerned_department = ""; $visitor_message = ""; if(isset($_POST['visitor_name'])) { $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING); } if(isset($_POST['visitor_email'])) { $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']); $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL); } if(isset($_POST['email_title'])) { $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING); } if(isset($_POST['concerned_department'])) { $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING); } if(isset($_POST['visitor_message'])) { $visitor_message = htmlspecialchars($_POST['visitor_message']); } if($concerned_department == "billing") { $recipient = "llamabob666@gmail.com"; } else if($concerned_department == "marketing") { $recipient = "llamabob666@gmail.com"; } else if($concerned_department == "technical support") { $recipient = "llamabob666@gmail.com"; } else { $recipient = "llamabob666@gmail.com"; } $headers = 'MIME-Version: 1.0' . "\r\n" .'Content-type: text/html; charset=utf-8' . "\r\n" .'From: ' . $visitor_email . "\r\n"; if(mail($recipient, $email_title, $visitor_message, $headers)) { echo 'Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.'; } else { echo 'We are sorry but the email did not go through.'; } } else { echo 'Something went wrong'; } ?> </body> </html>
