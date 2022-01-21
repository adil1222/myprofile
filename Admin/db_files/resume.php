<?php
include_once "connection.php";
    $firstname = $_POST['f_name'];
    $lastname = $_POST['l_name'];
    $designation = $_POST['designation']; 
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $address = $_POST['address'];
    $profile = $_POST['profile'];
    $objective = $_POST['objective_text'];
    $experence = $_POST['experences_text'];
    $project = $_POST['project_text'];
    $skills = $_POST['skills_text'];
    $education = $_POST['edc_text'];
    $awards = $_POST['awards_text'];
    $language = $_POST['language_text'];
    $intrests = $_POST['Intrests_text'];

    // echo $firstname, $lastname, $designation, $phone,$email,$website,$address,$profile
    // ,$objective,$experence,$project,$skills,$education,$awards,$language,$intrests;

    $query = "UPDATE `resume` 
        SET
        `firstname` = '$firstname', 
        `lastname` = '$lastname', 
        `designation` = '$designation', 
        `phone` = '$phone', 
        `email` = '$email', 
        `website` = '$website', 
        `address` = '$address', 
        `profile` = '$profile', 
        `objective` = '$objective', 
        `experence` = '$experence', 
        `projects` = '$project', 
        `skills` = '$skills', 
        `education` = '$education', 
        `awards` = '$awards', 
        `language` = '$language', 
        `intrests` = '$intrests'
        
        WHERE
        `id` = '4' ;
    ";
    // $query = "INSERT INTO `resume` (`firstname`, `lastname`, `designation`, `phone`, `email`, 
    //     `website`, `address`, `profile`, `objective`, `experence`, `projects`, `skills`, `education`, 
    //     `awards`, `language`, `intrests`)
    //     VALUES
    //     ('$firstname', '$lastname', '$designation',  '$phone', '$email', '$website', '$address', '$profile', '$objective', '$experence', 
    //     '$project', '$skills', '$education', '$awards', '$language', '$intrests');";

        $result = mysqli_query($con, $query);
       
        if ($result) {
           header('Location:../../resume.php');
        }else{
            echo "cannot insert the data";
        }
?>