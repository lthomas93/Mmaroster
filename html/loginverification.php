<?php

function verification_username($Username){
  if ($Username ==""){
     echo "Please enter a username.</br>"
  }
  if ((strlen($Username) < 5) || (strlen($Username) > 12)) {
     echo "The username is the wrong length. It must be 5-12 characters.</br>";
  }
}  

function verification_password($Password){
  if ($Password == ""){
     echo "Please enter a password</br>.";
  }
  if ((strlen($Password) < 6) || (strlen($Password) > 12)){
     echo "The password is the wrong length. It must be 6-12 characters.</br>";
  }
}

function verifcation_lastname($Last_name){
  if ($Last_name == ""){
     echo "Please enter your last name. </br>";
  }
}

function verification_firstname($First_name){
  if ($First_name == ""){
     echo "Please enter your first name. </br>";
  }
}

function verficiation_schoolname($School_name){
  if ($School_name == ""){
     echo "Please enter your school name. </br>";
  }
}

function verification_phonenumber($Phone_number){
  if ($Phone_number == ""){
     echo "Please enter a phone number</br>."
  }
  if ((strlen($Phone_number) < 10) || (strlen($Phone_number) > 10)){
     echo "Please verify the ten digit phone number including the area code.</br>"
  }
function verification_email($Email){
  if ($Email == ""){
     echo "Please enter your email.";
  }
}

