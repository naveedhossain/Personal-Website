<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform basic data validation (you can implement more robust validation)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the required fields.";
    }
    else {
      echo "Wazid bhai eta ki bollen?";
    }
} else {
    // If the form is not submitted via POST, handle this as needed
    echo "Form submission error. Please try again.";
}
?>
