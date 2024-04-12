<?php
    // session_start(); on la declare juste dans le header
  

// var_dump($identification[0]);

    // $_SESSION['email']  = $user[0]->email;
    // $_SESSION['lastname']  = $identification[0]->lastname;
    // $_SESSION['firstname']  = $identification[0]->firstname;
    // $_SESSION['birthdate']  = $identification[0]->birthdate;
    // $_SESSION['roles']  = $identification[0]->roles;
    // $_SESSION['id']  = $identification[0]->user_id;
    // $user = $m->get_login();
    // if ($user) {
        $_SESSION['email'] = $user->email;
        $_SESSION['lastname'] = $user->lastname;
        $_SESSION['firstname'] = $user->firstname;
        $_SESSION['birthdate'] = $user->birthdate;
        $_SESSION['roles'] = $user->roles;
        $_SESSION['id'] = $user->user_id;
        // Rediriger l'utilisateur vers une autre page par exemple
    //     header("Location: dashboard.php");
    //     exit;
    // } else {
    //     // Afficher un message d'erreur par exemple
    //     echo "Adresse email ou mot de passe incorrect";
    // }


    
     ?>
 <script>window.location.href="?controller=home&action=home"</script> 