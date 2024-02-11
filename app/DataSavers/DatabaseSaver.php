<?php

namespace App\DataSavers;


use App\Models\Massage;

class DatabaseSaver
{
    public function save($data)
    {
        // сохранение в базе данны
        Massage::create([
            'username' => $data['username'],
            'text' => $data['text']
        ]);
    }
}
