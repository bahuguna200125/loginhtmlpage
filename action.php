<?php
$fname_cookie = "fname";
$fname_cookie_value =  $_POST['fname'] ;
setcookie($fname_cookie, $fname_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE[$fname_cookie])) {
echo "Cookie '" . $fname_cookie . "' is set!<br>";
echo "Value is: " . $_COOKIE[$fname_cookie];
}else {
    echo "Cookie named '" . $fname_cookie. "' is not set!";
  } 
   ?><br>
   <?php

$lname_cookie = "lname";
$lname_cookie_value = $_POST['lname'] ;
setcookie($lname_cookie, $lname_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_COOKIE[$lname_cookie])) {
    echo "Cookie '" . $lname_cookie . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$lname_cookie];
    }else {
        echo "Cookie named '" . $lname_cookie. "' is not set!";
      } 
?>
 <br>
 <?php

$gender_cookie = "GENDER";
$gender_value = $_POST['GENDER'];
setcookie($gender_cookie , $gender_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_COOKIE[$gender_cookie])) {
    echo "Cookie '" . $gender_cookie . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$gender_cookie];
    }else {
        echo "Cookie named '" . $gender_cookie. "' is not set!";
      } 
?>
<br> 
<?php
$book1_cookie = "book1";
if(isset($_POST['book1'])){
$book1_value = $_POST['book1'] ;
setcookie($book1_cookie,$book1_value  , time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_COOKIE[$book1_cookie])) {
    echo "Cookie '" . $book1_cookie . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$book1_cookie];
    }else {
        echo "Cookie named '" . $book1_cookie. "' is not set!";
      } 

    }


?><br>
<?php 
$book2_cookie = "book2";
if(isset($_POST['book2'])){
$book2_value = $_POST['book2'] ;
setcookie($book2_cookie,$book2_value  , time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_COOKIE[$book2_cookie])) {
    echo "Cookie '" . $book2_cookie . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$book2_cookie];
    }else {
        echo "Cookie named '" . $book2_cookie. "' is not set!";
      } 


    }

?>
<br>
<?php
$book3_cookie = "book3";
if(isset($_POST['book3'])){
$book3_value = $_POST['book3'] ;
setcookie($book3_cookie,$book3_value  , time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_COOKIE[$book3_cookie])) {
    echo "Cookie '" . $book3_cookie . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$book3_cookie];
    }else {
        echo "Cookie named '" . $book3_cookie. "' is not set!";
  
    }
    
    } 
?>