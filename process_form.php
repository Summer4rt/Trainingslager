<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['demo-name'];
    $email = $_POST['demo-email'];
    $category = $_POST['demo-category'];
    $vereinsname = $_POST['demo-email'];
    $altersklasse = $_POST['demo-email'];
    $datum = $_POST['demo-email'];
    $spieleranzahl = $_POST['demo-email'];
    $gender = isset($_POST['demo-priority-low']) ? "Männlich" : "Weiblich";

    // Create email message
    $message = "Anfrage Details:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Kategorie: $category\n";
    $message .= "Vereinsname: $vereinsname\n";
    $message .= "Altersklasse: $altersklasse\n";
    $message .= "Datum: $datum\n";
    $message .= "Spieleranzahl: $spieleranzahl\n";
    $message .= "Geschlecht: $gender\n";

    // Email settings
    $to = "marco.summer@aktivpark-montafon.com";
    $subject = "Neue Anfrage vom Anfrage Trainingslager";
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect after sending the email (optional)
    header("Location: danke.html");
    exit();
}
?>
