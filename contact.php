<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));

    if ($name == "" || $email == "" || $message == "") {
        $error_message = "Please fill in the required field: Name, Email, Message";
    }

    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Your form submission has an error.";
    }

    require_once("inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
      $error_message = "You must specify a valid email address.";
    }
    if (!isset($error_message)) {
      $email_body = "";
      $email_body = $email_body . "Name: " . $name . "<br>";
      $email_body = $email_body . "Email: " . $email . "<br>";
      $email_body = $email_body . "Message: " . $message;

      $mail->SetFrom($email, $name);
      $address = "codedawncode@gmail.com";
      $mail->AddAddress($address, "Dawn Monroe");
      $mail->isHTML(false);
      $mail->Subject = "EAT ME Sugar Form Submission | " . $name;
      $mail->Body = $email_body;

      if($mail->send()) {
            header("location:contact.php?status=thanks");
            exit;
          }

        $error_message =  "There was a problem sending the email: " . $mail->ErrorInfo;
      }
    }
?>

<?php
$pageTitle = "Contact Eat Me Sugar";
$section = "contact";
include('inc/header.php');

?>

<div class="container-fluid">
    <div class="section page">

            <h1>Contact</h1>

            <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") { ?>
                <h2> Thanks! </h2>
                <p> We greatly appreciate you reaching out. We will get back to you shortly.</p>
                <p> In the meantime, please check out our delectable sugar <a href= "scrubs.php">scrubs</a>!</p>
            <?php  } else {
              if(isset($error_message)){
                echo "<h2>" . $error_message . "</h2>";
              } else {
                echo "<p>We want to hear from you! Complete the form to send me an email.</p>";
              }
            ?>

                <form method="post" action="contact.php">
                    <table>
                        <tr>
                            <th> <!--Table Header-->
                                <label for="name">Name</label>
                            </th>
                            <td> <!--Table Data-->
                                <input type="text" name="name" id="name" value="<?php if(isset($name)) {echo $name;} ?>" />
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email" value="<?php if(isset($email)) {echo $email;} ?>" />
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"><?php if(isset($message)) {echo htmlspecialchars($_POST["message"]);} ?></textarea>
                            </td>
                        </tr>
                        <!--HONEY POT-->
                        <tr style="display: none;">
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>Please leave this field blank.</p>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Send">

                </form>

            <?php } ?>

        </div>
</div>
<div class="container-fluid">
<?php include('inc/footer.php') ?>
</div>
