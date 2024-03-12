<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $data = "Name: $name\nEmail: $email\n";

    $file = fopen("data.txt", "a"); // Opens file in append mode
    fwrite($file, $data); // Writes data to the file
    fclose($file); // Closes the file

    echo "Data has been saved successfully.";
} else {
    echo "Error: Invalid request.";
}
?>
