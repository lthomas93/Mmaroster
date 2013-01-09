<?php


function verify_username(strng) {
var error = "";
  if (strng == "") {
     error = "You didn't enter a username./n";
  }
var illegalChars= /\W/; // allow letters, numbers, and underscores
  if((strng.length <5) || (strng.length >12)) {
     error = "The username is the wrong length. It must be 5-12 characters./n";
  }
  else if (illegalChars.test(strng)) {
      error = "The username contains illegal characters./n";
  }
return error;
}
