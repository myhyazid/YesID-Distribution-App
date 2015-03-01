<?php

    
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        //form submitted

        //check if other form details are correct

        //verify captcha
        $recaptcha_secret = "6LeyrP8SAAAAAOg_NoUl7AJ-xJIrEYOd-x7vrThq";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true)
        {
            //echo "Logged In Successfully";
            header('Location: ./auth.php?action=pass');
        }
        else
        {
            //echo "You are a robot";
            header('Location: ./auth.php?action=fail');
        }
    }