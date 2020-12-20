<?php

namespace App\Http\Controllers\front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function  index()
    {
        return view('front.registration.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        //Validate Form
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birth_date' => 'sometimes|nullable',
            'image' => 'sometimes|nullable',

        ]);

        $data = $request->except(['password', 'image']);

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageNew = rand(0, 100000000) . $image->getClientOriginalName();
            $image->move('uploads/users/', $imageNew);
            $data['image'] = $imageNew;
        }
        //Put data in database
        $user  = User::create($data);

        Auth()->login($user);

        return redirect('/');
    }
}
