// corrige l'erreru bd entity,creer new branche dev feat2 ajouter les model pour creer les ecran les classe doivent etre statit 

<?php

class Debug
{
    public static function dd(mixed $data): void
    {
        var_dump($data);
        die();
    }
}