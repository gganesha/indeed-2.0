<!-- Web Design & Development Project Created by:
   Ganatheepan Ganeshalingam - 8625997
   Solo-Project -->
<?php
if(isset($_POST['logout-submit'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}