<?php


namespace App;


use App\DataSavers\DatabaseSaver;
use App\DataSavers\EmailSaver;

class DataSaverFactory
{
    public static function createSaver( $type) {
        if ($type ==='database') {
            return new DatabaseSaver();
        } elseif ($type === 'email') {
            return new EmailSaver();
        } else {
            throw new ('Unsupported save type');
        }
    }
}
