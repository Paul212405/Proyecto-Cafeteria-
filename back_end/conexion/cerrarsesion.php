<?php
    session_start();
    session_destroy();
    header("location: ../../front_end/index.php");

?>