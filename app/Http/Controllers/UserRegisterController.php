<?php
declare(strict_types=1);
namespace App\Http\Controllers;
Use App\Models\User;
use Illuminate\Auth\Events\Registered;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function create()
    {
        return view('user-regist.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        event(new Registered($user));
        return view('user-regist.complete', compact('user'));
    }

    /**
     * とりあえず、都度消すのも面倒なので、admin 以外全消しで
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function remove(Request $request)
    {
        User::where('id', '!=', 1)->orWhereNull('id')->delete();
        return view('user-regist.removed');
    }
}
