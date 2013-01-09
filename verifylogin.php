<?php

// Verify username: 5-12 chars, uc,lc, numbers, and underscore, only.
function verify_username(strng) {
var error = "";
  if (strng == "") {
     error = "You didn't enter a username./n";
  }
var illegalChars= /\W/; // allow letters, numbers, and underscores
  if ((strng.length <5) || (strng.length >12)) {
     error = "The username is the wrong length. It must be 5-12 characters./n";
  }
  else if (illegalChars.test(strng)) {
      error = "The username contains illegal characters./n";
  }
return error;
}

// Verify password: 6-12 chars, letters and numbers only.
function verify_password(strng) {
var error = "";
  if (strng=="") {
     error = "You didn't enter a password./n";
  }
var illegalChars = /[\W_]/; //allow only letters and numbers
  if ((strng.length <6) || (strng.length >12)) {
     error = "The password is the wrong length. It must be 6-12 characters./n";
  }
  else if (illegalChars.test(strng)) {
     error = "The password contains illegal characters.";
  }
  else if (!((strng.search(/(a-z)+/)) && (strng.search(/(A-Z)+/)) && (strng.search(/(0-9)+/)))) {
     error = "The password must contain at least one uppercase letter, one lowercase letter, and one numeral. /n"
  }   
return error;
}
