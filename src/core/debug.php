
<?php

class Debug
{
    public static function dd(mixed $data): void
    {
        var_dump($data);
        die();
    }
}
