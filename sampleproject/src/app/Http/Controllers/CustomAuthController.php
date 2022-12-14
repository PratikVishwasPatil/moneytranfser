<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        // return view('auth.login');
        return view('login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        // return view('auth.registration');
        return view('registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        // print_r($data);
        // die;
        $check = $this->create($data);
        // return redirect("dashboard")->withSuccess('You have signed-in');
        return redirect("admin")->withSuccess('You have signed-in');

    }

    public function create(array $data)
    {
        //    echo $data['mobile'];
        //     die;
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'mobile' => $data['mobile'],
        //     'password' => Hash::make($data['password'])
        // ]);

        $user = User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'mobile'      => $data['mobile'],
            'password'  => bcrypt($data['password']),
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return $user;
        }
    }

    public function dashboard()
    {
        if (Auth::check()) {

            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    public function admin()
    {
        $name = Auth::user()->name;
        if ($name == 'admin') {
            // $companies=Company::all();
            // $employees=Employee::all();

            // // print_r($companies);
            // // die;
            // $data=compact('companies','employees');
            // return view('frontend.admin')->with($data);
            return view('adminpanel');
        } else {
            return view('dashboard');
        }
    }
}
