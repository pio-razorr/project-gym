<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function classes()
    {
        $kelas = Kelas::all();

        return view('classes', compact('kelas'));
    }

    public function schedule()
    {
        $jadwal = Jadwal::all();

        return view('schedule', compact('jadwal'));
    }

    

}
