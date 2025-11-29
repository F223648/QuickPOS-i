<?php
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
    header("Location: thank-you.html");
    exit();
} else {
    echo "All fields required!";
}
?>