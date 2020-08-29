<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use App\Post;
use App\Pelayanan;
use App\User;
use App\Bantuan;
use App\Pengurus;
use App\Ibadah;
use App\Posyandu;
use App\Sekolah;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['jmlh_post'] = Post::all()->count();
        $data['jmlh_pelayanan'] = Pelayanan::all()->count();
        $data['jmlh_pengguna'] = User::all()->count();
        $data['jmlh_bantuan'] = Bantuan::all()->count();
        $data['jmlh_pengurus'] = Pengurus::all()->count();
        $data['jmlh_ibadah'] = Ibadah::all()->count();
        $data['jmlh_posyandu'] = Posyandu::all()->count();
        $data['jmlh_sekolah'] = Sekolah::all()->count();
        // return $data;
        return view('dashboard', compact('data'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
