<?php

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$validName = "";
$validEmail = "";
$validGender = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $website = $_REQUEST["website"];
    $comment = $_REQUEST["comment"];
    $gender = $_REQUEST["gender"];

    
    if(!empty($name) && strlen($name) >= 5)
    {
        $validName = "User Name: " . $name;
    }
    else
    {
        $validName = "User Name must be at least 5 characters";
    }

  
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $validEmail = "Email: " . $email;
    }
    else
    {
        $validEmail = "Invalid Email Format";
    }

    
    if(!empty($website))
    {
        echo "Website: " . $website . "<br>";
    }

   
    if(!empty($comment))
    {
        echo "Comment: " . $comment . "<br>";
    }

    
    if(!empty($gender))
    {
        $validGender = "Gender: " . $gender;
    }
    else
    {
        $validGender = "Please select gender";
    }
}

?>