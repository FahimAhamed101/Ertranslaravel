<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:50'],
            'password' => ['required', '']
        ]);

        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                $admin = Auth::guard('admin')->user();
                if ($admin->role == 1) {
                    return to_route('admin.dashboard');
                } else {
                    $admin = Auth::guard('admin')->logout();
                    return back()->with('error', 'You are not authorized to access admin panel');
                }

            } else {
                return back()->with('error', 'Either Email/Password is incorrect');
            }
        } else {
            return back()->withErrors($validator)->withInput($request->only('email'));
        }
    }
}