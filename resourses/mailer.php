<?php
//Get form fields, remove html tags and whitspace.
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r", "\n"),array(" ", " "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

// Check a data
if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("location : http://smykserhi.com/omnifood/index.php?seccess=-1#form"); //send to id "form" on page
    exit;
}
// set the recipent email adress, update this to your desired email addres
$recipient = "smyk.serhi@gmail.com";
// set the email subject
$subject = "New contact from $name";

//bild the enail content
$email_content = "Name: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .="Message:\n$message\n";

//bild the email headers
$email_headers = "Form: $name <$email>";

//send the email

mail($recipient, $subject, $email_content, &email_headers);

//redirect to the index.html page with auccsess code
header("Location: http://smykserhi.com/omnifood/index.php?success=1#form");

?>