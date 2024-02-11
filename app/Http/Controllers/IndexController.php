<?php

namespace App\Http\Controllers;

use App\DataSaverFactory;
use App\Http\Requests\MassageRequest;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(MassageRequest $request)
    {
        $data = $request->only('username', 'text');

        // Выбираем тип сохранения (database или email) и вызываем метод save
        $saver = DataSaverFactory::createSaver('database');
        $saver->save($data);

        return response('Сообщение успешно сохранено', 200);


    }
}

