<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory as FactoryAlias;
use Illuminate\Contracts\View\View as ViewAlias;
use Illuminate\Http\Request;
use App\Models\Bb;
use Illuminate\Http\Response;

class BbsController extends Controller
{
    /**
     * Получение всех записей из базы
     */
    public function index(): FactoryAlias|ViewAlias|Application
    {

        /*$bbs = Bb::latest()->get();
        $_str = "Обьявление\r\n\r\n";

        foreach ($bbs as $bb) {
            $_str .= $bb->title . "\r\n";
            $_str .= $bb->price . " руб. \r\n";
            $_str .= "\r\n";
        }
        return response($_str)->header('Content-type', 'text/plain');*/

        $context = ['bbs' => Bb::latest()->get()];
        return view('index', $context);
    }


    /**
     * Получение отдельной записи из базы
     */
    public function detail(Bb $bb): FactoryAlias|ViewAlias|Application
    {
        /*$bb = Bb::find($bb);
        $_str = $bb->title . "\r\n\r\n";
        $_str .= $bb->content . "\r\n";
        $_str .= $bb->price . "руб. \r\n";

        return response($_str)->header('Content-type', 'text/plain');*/
        return view('detail', ['bb' => $bb]);
    }
}
