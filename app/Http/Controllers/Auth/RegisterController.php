<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Front\CategoryService;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public $categories;

    public function __construct(
        CategoryService $categoryService
    ) {
        $this->categories = $categoryService;
    }

    public function index()
    {
        return view('auth.register',  array(
            "categories" => $this->categories->all_categories()
        ));
    }

    public function store(Request $request)
    {
        $request->validate(array(
            'name' => 'required|max:100|min:3',
            'surname' => 'required|max:100|min:3',
            'phone' => 'required|max:9|min:9',
            'email' => 'required|email|max:100|min:8',
            'password' => 'required|confirmed|min:8'
        ));

        User::create(array(
            "name" => $request->name,
            "surname" => $request->surname,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "remember_token" => $request->_token
        ));

        auth()->attempt($request->only("email", "password"), true);

        return redirect()->route('home');
    }
}
