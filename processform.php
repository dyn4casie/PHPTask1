<?php



$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$message = $_POST['message'];

$feedback = "Dear [Dyn4casie] \nA form has been filled \n";

    $feedback  .= "The Form details are given below: \n\n";

    $feedback  .= "First Name: " . $first_name . "\n";
    $feedback  .= "Last Name: " . $last_name . "\n";
    $feedback  .= "Email: " . $email . "\n";
    $feedback  .= "Department: " . $department . "\n";
    $feedback  .= "Gender: " . $gender . "\n";
    $feedback  .= "Message: " . $message . "\n";


$myfile = fopen($first_name . ".doc", "w") or die("Unable to open file!");
fwrite($myfile, $feedback);
fclose($myfile);

echo "Your file has been created, Please check your parent directory"
?>