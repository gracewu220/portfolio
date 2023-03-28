<!-- <?php
    echo "<pre>";
        print_r($POST);
    echo "</pre>";

    if(isset($_POST['email'])&& $_POST['email'] != ''){

        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

            $firstname = $_POST['fname'];
            $lastname = $_POST['name'];
            $email= $_POST['email']; 
            $messageSubject = $_POST['subject'];
            $message= $_POST['message'];
        
            $to = "wenying.wu@tufts.edu";
            $body = ""
        
            $body .= "From: ".$firstname.$lastname. "\r\n";
            $body .= "Email: ".$email. "\r\n";
            $body .= "Message: ".$message. "\r\n";
        
            mail($to,$messageSubject,$body);

        }

    }

?>
 -->
