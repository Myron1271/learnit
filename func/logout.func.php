<?php

    session_start();
    session_destroy();
    header("Location: http://localhost/learnit/login.php");
    exit;