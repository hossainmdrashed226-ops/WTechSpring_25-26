<?php

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$validName = "";
$validEmail = "";
$validGender = "";

$datafile = "../data.json";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // get data safely
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $website = $_REQUEST["website"];
    $comment = $_REQUEST["comment"];
    $gender = isset($_REQUEST["gender"]) ? $_REQUEST["gender"] : "";

  
    if(!empty($name) && strlen($name) >= 5)
    {
        $validName = "Valid Name: " . $name;
    }
    else
    {
        $validName = "Name must be at least 5 characters";
    }


    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $validEmail = "Valid Email: " . $email;
    }
    else
    {
        $validEmail = "Invalid Email Format";
    }

    if(!empty($gender))
    {
        $validGender = "Gender: " . $gender;
    }
    else
    {
        $validGender = "Please select gender";
    }


    if(strlen($name) >= 5 && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($gender))
    {
        $formdata = array(
            "name" => $name,
            "email" => $email,
            "website" => $website,
            "comment" => $comment,
            "gender" => $gender
        );

        if(file_exists($datafile))
        {
            $currentdata = file_get_contents($datafile);
            $arraydata = json_decode($currentdata, true);
        }
        else
        {
            $arraydata = array();
        }

        if(!is_array($arraydata))
        {
            $arraydata = array();
        }

        $arraydata[] = $formdata;

        $jsondata = json_encode($arraydata, JSON_PRETTY_PRINT);

        file_put_contents($datafile, $jsondata);
    }
}
?>

