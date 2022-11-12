<?php

    session_start();

    session_destroy();
    $success['logout']="Logged out successfully!!";

    header("Location:../first.php?success".serialize($success));

?>