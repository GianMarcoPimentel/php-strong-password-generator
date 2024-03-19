<?php
        // Funzione per creare una password
        function createPassword($lunghezza_password, $caratteri, $ripetizione)  {
            $password = " ";
            // str_split() converte la stringa in un array
            $restricted = str_split($caratteri);

            if(!$ripetizione) {
                // se ripetizione è falso la funzione elimina i duplicati
                $restricted = array_unique($restricted);
            }

            for($i = 0; $i < $lunghezza_password; $i++) {
                // creo la password
                $password .= $restricted[mt_rand(0, count($restricted) -1)];

            }
            return $password;
        }


    