<?php

function verification_username(){
  if ($username ==""){
     echo "Please enter a username."
  }
  if ((strlen($Username) < 5) || (strlen($Username > 12)) {
     echo "The username is the wrong length. It must be 5-12 characters.";
  }
