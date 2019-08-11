<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Form Feedback</title>
        <style type="text/css">
            .error{
                font-weight: bold;
                color: #C00;
            }
        </style>
    </head>
    
    <body>
        <?php
        
        if(!empty($_REQUEST["name"])){
            $name = $_REQUEST["name"];
        }else{
            $name = NULL;
            echo "<p class=\"error\">You did not enter your name!</p>";
        }
        
        if(!empty($_REQUEST["email"])){
            $email = $_REQUEST["email"];
        }else{
            $email = NULL;
            echo "<p class=\"error\">You did not enter your email!</p>";
        }
        
        if(!empty($_REQUEST["notes"])){
            $notes = $_REQUEST["notes"];
        }else{
            $notes = NULL;
            echo "<p class=\"error\">You did not provide any notes!</p>";
        }
        
        
        //Below statement can also be expressed as: -----------------------------------
        //$gender = $_REQUEST["gender"] ?? NULL;
        if(isset($_REQUEST["gender"])){
            $gender = $_REQUEST["gender"];
            
            if($gender == "male"){
                $greeting = "<p><strong>Good day sir!</strong></p>";
            }elseif($gender == "female"){
                $greeting = "<p><strong>Good day madam!</strong></p>";
            }
        }else{
            $gender = NULL;
            echo "<p class=\"error\">You did not provide any gender!</p>";
        }
        
        //If everything is OK print the message
        if($name && $email && $notes && $gender){
            echo "<p>Thank you, <strong>$name </strong>, for the following comments:</p>
                <pre>$notes</pre>
                <p>We will reply to you at <em>$email</em>.</p>
                $greeting";
        }
        
        
        //These lines are to test $_POST super global
        if(!empty($_POST['name']) && !empty($_POST['notes']) && !empty($_POST['email'])){
            echo $_POST['name'] . "<br>";
            echo $_POST['notes'] . "<br>";
            echo $_POST['email'] . "<br>";
        }else{
            echo "<p>There are missing elements.<p>";
        }
        
        
        ?>

    </body>
</html>
