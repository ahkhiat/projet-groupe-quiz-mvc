<?php
    // session_start(); on la declare juste dans le header
    print_r($identification);

    $_SESSION['email']  = $identification->email;
    $_SESSION['lastname']  = $identification->lastname;
    $_SESSION['firstename']  = $identification->firstename;
    $_SESSION['birthdate']  = $identification->birthdate;
    $_SESSION['roles']  = $identification->roles;
    $_SESSION['id']  = $identification->user_id;
   


    
    ?>
<!-- <script>window.location.href="?controller=home&action=home"</script> -->