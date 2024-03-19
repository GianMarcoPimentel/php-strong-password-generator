<?php
        // Funzione per creare una password
        function createPassword($lunghezza_password) {
            // dichiaro la variabile caratteri da utilizzare per la mia password
            $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+";
            // dichiaro la mia variabile password inizialmente vuota
            $password = "";
            // inizializzo un ciclo for per comporre la mia password
            for ($i = 0; $i < $lunghezza_password; $i ++ ) {
                $password .= $caratteri[mt_rand(0, strlen($caratteri) -1)];
            }             
            return " $password" ;
            //var_dump("$password");
        }


    