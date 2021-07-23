<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreate;
use App\Http\Requests\UserUpdate;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBydesc('id')->paginate(10);

        return view('back.user.list',compact('users'));
    }

    public function create()
    {
        return view('back.user.create');
    }

    public function store(UserCreate $request)
    {
        $user = new User;
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = Hash::make($request->password);
        $user->save();
        return redirect()->route('users.index')->withSuccess('İstifadəçi əlavə edildi...');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = user::find($id) ?? abort(403 , 'İstifadəçi Tapılmadı...');
        return view('back.user.edit' , compact('user'));
    }

    public function update(UserUpdate $request, $id)
    {
        $user=User::find($id) ?? abort(403, 'İstifadəçi Tapılmadı...');
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = Hash::make($request->password);
        $user->save();
        return redirect()->route('users.index')->withSuccess('Uğurla Yeniləndi...');

    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->withSuccess('Uğurla silindi...');
    }
}
