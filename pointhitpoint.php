<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
	// Check if form fields are filled in and not empty. 
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) &&
        !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {

        // Set cookies with data from form.
		setcookie("name", $_POST["name"], time() + (86400 * 30), "/"); // 30 days expiration on everything, the math here was fun...
        setcookie("email", $_POST["email"], time() + (86400 * 30), "/"); 
        setcookie("subject", $_POST["subject"], time() + (86400 * 30), "/"); 
        setcookie("message", $_POST["message"], time() + (86400 * 30), "/"); 

        // Redirect to a thank you page or any other page really.
        header("Location: thank_you.php");
        exit;
    } else {
        echo "All form fields are required.";
    }
}
?>
