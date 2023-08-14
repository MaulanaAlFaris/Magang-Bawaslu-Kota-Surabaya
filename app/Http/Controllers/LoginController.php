<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if($user = Auth::user()){
                if($user->level == '1'){
                    return redirect()->intended('admin');
                }elseif($user->level =='2'){
                    return redirect()->intended('kota');
                }elseif($user->level == '3'){
                    return redirect()->intended('kecamatan');
                }elseif($user->level == '4'){
                    return redirect()->intended('kelurahan');
                }elseif($user->level== '5'){
                    return redirect()->intended('KotaSurabaya');
                }elseif($user->level == '6'){
                    return redirect()->intended('KecamatanDukuhPakis');
                }elseif($user->level == '7'){
                    return redirect()->intended('KecamatanGayungan');
                }elseif($user->level == '8'){
                    return redirect()->intended('KelurahanDukuhKupang');
                }
            }

            return view('login.index');
        }

        public function process(Request $request){
            $request->validate([
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'username tidak boleh kososng'
            ]
        );

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == '1'){
                return redirect()->intended('admin');
            }elseif($user->level =='2'){
                return redirect()->intended('kota');
            }elseif($user->level == '3'){
                return redirect()->intended('kecamatan');
            }elseif($user->level == '4'){
                return redirect()->intended('kelurahan');
            }elseif($user->level == '5'){
                return redirect()->intended('KotaSurabaya');
            }elseif($user->level == '6'){
                return redirect()->intended('KecamatanDukuhPakis');
            }elseif($user->level == '7'){
                return redirect()->intended('KecamatanGayungan');
            }elseif($user->level == '8'){
                return redirect()->intended('KelurahanDukuhKupang');
            }

            return redirect()->intended('/');
        }
    
            return back()-> withErrors([
                'username' => 'Maaf username atau password anda salah'
            ])->onlyInput('username');
        }

        public function logout(Request $request){
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }

    }
