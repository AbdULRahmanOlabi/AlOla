<?php 
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];

  $emailheader = "From:" .$name."<" .$email. ">\r\n";

  $recipient = "abd.alrahman.olabi@gmail.com";  //Company Email (That Will Recive The Mail)

  $body = $comments."\nThis Message Come From: $first_name $last_name"."\nThe Email Address Is: $email"."\nPhone-Number Is: $phone";
  
  $email_subject = "AL-HEKMA Virtual School";

  if (mail($recipient, $email_subject, $body, $emailheader)) {
    echo '<script>alert("Email Sent Successfully")</script>';
    header('Location: index.html');
  } else {
    echo '<script>alert("Sorry, Failed While Sending Mail!")</script>';
  }
?>
