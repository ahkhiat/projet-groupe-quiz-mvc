<?php
    // session_start(); on la declare juste dans le header
  

// var_dump($identification[0]);

    // $_SESSION['email']  = $identification[0]->email;
    // $_SESSION['lastname']  = $identification[0]->lastname;
    // $_SESSION['firstname']  = $identification[0]->firstname;
    // $_SESSION['birthdate']  = $identification[0]->birthdate;
    // $_SESSION['roles']  = $identification[0]->roles;
    // $_SESSION['id']  = $identification[0]->user_id;

    $_SESSION['email'] = $user->email;
    $_SESSION['lastname'] = $user->lastname;
    $_SESSION['firstname'] = $user->firstname;
    $_SESSION['birthdate'] = $user->birthdate;
    $_SESSION['roles'] = $user->roles;
    $_SESSION['id'] = $user->user_id;
   


    
    ?>
<script>window.location.href="?controller=home&action=home"</script>