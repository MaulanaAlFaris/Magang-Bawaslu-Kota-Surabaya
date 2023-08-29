<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CekUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rules): Response
{
    if (!Auth::check()) {
        return redirect('login');
    }

    $user = Auth::user();
    $level = $user->level;

    // Menentukan aturan berdasarkan level pengguna
    $levelRules = [
        2 => [2],  // Admin kota
        3 => [34, 35, 36, 37],
        4 => [38, 39, 40, 41],
        5 => [42, 43, 44, 45],
        6 => [46, 47, 48, 49],
        7 => [50, 51, 52, 53,54,188],
        8 => [55, 56, 57, 58],
        9 => [59, 60, 61, 62],
        10 => [64, 65, 66, 67,68,69],
        11 => [70, 71, 72, 73,74,75],
        12 => [76, 77, 78, 79],
        13 => [80, 81, 82, 83,84,85],
        14 => [86, 87, 88, 89,90,91],
        15 => [92, 93, 94, 95,96,97,98],
        16 => [99, 100, 101, 102,103,104,105,106],
        17 => [107, 108, 109, 110],
        18 => [111, 112, 113, 114,115],
        19 => [116, 117, 118, 119,120],
        20 => [121, 122, 123, 124,187],
        21 => [125, 126, 127, 128,129],
        22 => [130, 131, 132, 133],
        23 => [134, 135, 136, 137],
        24 => [138, 139, 140, 141,142],
        25 => [143, 144, 145, 146,147,148],
        26 => [149, 150, 151, 152,153],
        27 => [154, 155, 156],
        28 => [157, 158, 159, 160],
        29 => [161, 162, 163, 164,165,166],
        30 => [167, 168, 169, 170],
        31 => [171, 172, 173, 174],
        32 => [175, 176, 177, 178,179,180],
        33 => [181, 182, 183, 184,185,186],
    ];

    // Cek apakah level pengguna dan aturan cocok
    if ($level == $rules || in_array($rules, $levelRules[$level])) {
        return $next($request);
    }

    return redirect('login')->with('error', "Kamu tidak memiliki akses");
}

}
