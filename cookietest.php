<?php

echo $_COOKIE["fname"];
echo $_COOKIE["lname"];
?><br>
<?php
echo $_COOKIE["GENDER"];
?><br>
<?php
if(isset($_COOKIE["book1"])){
echo $_COOKIE["book1"];
}
?><br>
<?php
if (isset($_COOKIE["book2"])){
echo $_COOKIE["book2"];
}
?><br>
<?php
if(isset($_COOKIE["book3"])){
echo $_COOKIE["book3"];
}
?>