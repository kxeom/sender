<?php
    if (isset($_POST['send'])) {
        $to = $_POST['receiver'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = "From: akira@pwned.org";
        
        $mail = mail($to, $subject, $message, $headers);
        
        if ($mail) {
            echo "<script>alert('Mail Send Successfully.');</script>";
        }else {
            echo "<script>alert('Mail Not Send.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Email Sender | Brave Coder</title>
</head>
<body class="bg-primary">
    
    <div class="container shadow-lg">
        <h1 class="title">Simple Email Sender</h1>
        <p class="text-center">Lorem ipsum dolor sit amet.</p>
        <form action="" method="post" class="form">
            <div class="form-group mb-3">
                <input type="text" name="receiver" class="form-control" placeholder="Enter Receiver">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
            </div>
            <div class="form-group mb-3">
                <textarea cols="30" rows="10" name="message" class="form-control" placeholder="Enter Message"></textarea>
            </div>
            <button class="btn btn-primary w-100 shadow" name="send">Send</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
