<?php
    if(isset($_POST['submit'])){
        $vardas = trim($_POST['vardas']);
        $email = trim($_POST['email']);
        $tel = trim($_POST['tel']);
        $message = trim($_POST['message']);

        if(!empty($vardas) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $from = "$email";
                $to = "aidas.petraitis66@gmail.com";
                $subject = "Nauja zinute";
                $autorius = 'Nuo: ' . $vardas . ', ' . $email . $tel;
                $zinute = htmlspecialchars($message);
                mail($to, $subject, $autorius, $zinute, $from);
                echo "<script>alert('Dekojame');</script>";
            }

        }
    include ('db.php');
} 