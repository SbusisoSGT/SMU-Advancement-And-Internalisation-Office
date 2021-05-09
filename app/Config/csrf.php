<?php

    session_start();
    function generateCsrfToken()
    {
        if(!isset($_SESSION['csrf'])){
            $key = "gjsfkadsfkhgbasjdgxfjdsb";
            $token = sha1(time().$key);
            $_SESSION['csrf'] = $token;
        }

        return $_SESSION['csrf'];
    }