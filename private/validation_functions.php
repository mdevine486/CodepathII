<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  function has_valid_email_format($value) {
    if(preg_match('/\A[A-Za-z0-9@\-\.\_]+\Z/', $value) ==1)
      return strpos($value, '@') !== false;
    return false;
  }

  function has_valid_number_format($value){
    if(preg_match('/\A[0-9]+\Z/', $value) == 1){
       return true;
    }   
    return false;
  }

  function has_valid_phoneNumber_format($value){
    if(preg_match('/\A[0-9\s\-\(\)]+\Z/', $value) == 1){
       return true;
    }   
    return false;
  }

   function has_valid_username_format($value){
    if (preg_match('/\A[A-Za-z0-9\_]+\Z/', $value) == 1)
      return true;
    return false;
  }

?>
