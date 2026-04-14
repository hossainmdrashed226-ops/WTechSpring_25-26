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
    // get data
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $website = $_REQUEST["website"];
    $comment = $_REQUEST["comment"];
    $gender = $_REQUEST["gender"];

    // Name validation
    if(!empty($name) && strlen($name) >= 5)
    {
        $validName = "User Name: " . $name;
    }
    else
    {
        $validName = "User Name must be at least 5 characters";
    }

    // Email validation
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $validEmail = "Email: " . $email;
    }
    else
    {
        $validEmail = "Invalid Email Format";
    }

    // Website (optional)
    if(!empty($website))
    {
        echo "Website: " . $website . "<br>";
    }

    // Comment (optional)
    if(!empty($comment))
    {
        echo "Comment: " . $comment . "<br>";
    }

    // Gender validation
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