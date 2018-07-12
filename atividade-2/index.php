<?php

if (@$_SESSION['loggedin'] == true || @$_COOKIE['Loggedin'] == true) {
    header('Location: http://www.google.com');
}
