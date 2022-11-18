<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        return view('home', ['bbs' => Auth::user()->bbs()->latest()->get()]);
    }

    /**
     * @return Factory|View|Application
     */
    public function add_advt(): Factory|View|Application
    {
        return view('advt');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function save_advt(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::user()->bbs()->create([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price
        ]);

        return redirect()->route('home');
    }

    /**
     * Редактирование записи
     * @param Bb $bb
     * @return Factory|View|Application
     */
    public function edit_advt(Bb $bb): Factory|View|Application
    {
        return view('edit_advt', ['bb' => $bb]);
    }


    /**
     * Обновление записи.
     * @param Request $request
     * @param Bb $bb
     * @return RedirectResponse
     */
    public function update_advt(Request $request, Bb $bb): RedirectResponse
    {
        $bb->fill([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price
        ]);
        $bb->save();
        return redirect()->route('home');
    }

    /**
     * @param Bb $bb
     * @return Factory|View|Application
     */
    public function delete_advt(Bb $bb): Factory|View|Application
    {
        return view('delete_advt', ['bb' => $bb]);
    }

    /**
     * Удаление записи
     * @param Bb $bb
     * @return RedirectResponse
     */
    public function destroy_advt(Bb $bb): RedirectResponse
    {
        $bb->delete();
        return redirect()->route('home');
    }

}
