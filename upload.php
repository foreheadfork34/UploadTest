<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo "<br>";
        echo "<img src='$target_file' alt='Uploaded Image'>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

</body>
</html>
