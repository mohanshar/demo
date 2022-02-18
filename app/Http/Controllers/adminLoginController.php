<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class adminLoginController extends Controller
{
    public function adminLogin() {
        return view('Back-end.admin.login');
    }

    public function submit(Request $request) {
        // dd($request->all());

        if (!$request->get('email') || !$request->get('password')) {
            return redirect()->back();
        }

        try {
            $admin = admin::where('email', $request->email)->first();
            // dd($admin);
            if ($admin) {

                if(Hash::check($request->password, $admin->password)) {
                    // dd('true');
                    Auth::login($admin);
                    return redirect()->route('homepage');
                }
                return redirect()->back();
                // Auth::check() ? Auth::user() : '';

            } else {
                // dd('false');
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->back();
        }
        return redirect()->route('admin.login');
    }

}
