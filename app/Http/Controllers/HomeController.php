<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function login(): View
    {
        return view('home.formauth');
    }

    public function register(): View
    {
        return view('home.register');
    }
    public function factory()
    {
        Course::factory()->create();
        CourseLesson::factory()->create();
    }

    public function postLogin(Request $request)
    {
       $credentials = $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            return redirect()->intended('/curso');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        if(Auth::attempt(['email' => $user->email , 'password' => $user->password])) {
            return redirect()->intended('/curso');
        }

        return back();
    }
}
