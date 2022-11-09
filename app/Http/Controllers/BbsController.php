<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use App\Models\Bb;
use Illuminate\Http\Response;

class BbsController extends Controller
{
    /**
     * Получение всех записей из базы
     * @return Response|Application|ResponseFactory
     */
    public function index(): Response|Application|ResponseFactory
    {
        $bbs = Bb::latest()->get();
        $_str = "Обьявление\r\n\r\n";

        foreach ($bbs as $bb) {
            $_str .= $bb->title . "\r\n";
            $_str .= $bb->price . " руб. \r\n";
            $_str .= "\r\n";
        }
        return response($_str)->header('Content-type', 'text/plain');
    }


    /**
     * Получение отдельной записи из базы
     * @param $bb
     * @return Response|Application|ResponseFactory
     */
    public function detail($bb): Response|Application|ResponseFactory
    {
        $bb = Bb::find($bb);
        $_str = $bb->title . "\r\n\r\n";
        $_str .= $bb->content . "\r\n";
        $_str .= $bb->price . "руб. \r\n";

        return response($_str)->header('Content-type', 'text/plain');
    }
}
