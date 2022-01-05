<?php

// starting the session
session_start();

// unsetting all variables in session
session_unset();

// destroying session
session_destroy();

header('location:loginForm.php');