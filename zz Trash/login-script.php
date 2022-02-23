<?php
if($_POST["uname"] =="bymikiii" && $_POST ["pass"] == "1234" ){
 echo "Úspešné prihlásenie";
}
else{
    header("Location: Login.php");
    echo"Neúspešné prihlásenie";
}
?>