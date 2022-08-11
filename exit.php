<?php
session_abort();
setcookie('LoggedIn',time()-99999999);
header('Location:homepage.php');