<?php
    // Redirect To Page.
    function redirect($page = FALSE, $msg = NULL, $msgTyp = NULL)
    {
        // Redirection Location Check.
        if (is_string($page)) {
            // Set Redirection Location.
            $location = $page;
        } else {
            // Current Path Redirection Path.
            $location = $_SERVER['SCRIPT_NAME'];
        }

        // Redirection Message Check.
        if ($msg != NULL) {
            // Set Session Message.
            $_SESSION['msg'] = $msg;
        }

        // Message Type Check
        if ($msgTyp != NULL) {
            // Set Session Status.
            $_SESSION['msgtyp'] = $msgTyp;
        }

        // Redirection.
        header('Location:' .$location);
        exit;
    }

    // Display Message
    function displayMsg()
    {
        // Not Empty Session Check.
        if (!empty($_SESSION['msg'])) {
            
            // Assign Message Variable.
            $msg = $_SESSION['msg'];

            // Not Empty Session Check.
            if (!empty($_SESSION['msgtyp'])) {
                
                // Assign Type Variable.
                $msgTyp = $_SESSION['msgtyp'];
                
                // Create Error Output.
                if ($msgTyp == 'error') {
                    echo '<div class="alert aler-danger">' .$msg. '</div>';
                }
                
                // Create Success Output.
                if ($msgTyp == 'success') {
                    echo '<div class="alert alert-success">' .$msg. '</div>';
                }
            }
            // Unset Message.
            unset($_SESSION['msg']);
            unset($_SESSION['msgtyp']);
        } else {
            echo '';
        }
        
    }