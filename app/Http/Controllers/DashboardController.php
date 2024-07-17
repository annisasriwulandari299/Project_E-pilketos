<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use App\Models\Pemilih;
use App\Models\Suara;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $jumlahpemilih = Pemilih::count();
        $jumlahkandidat = Kandidat::count();
        $suaramasuk = Suara::count();

        $kandidatData = Kandidat::select('no_urut', 'suara')->get();

        $totalSuara = $kandidatData->sum('suara');

        $labels = $kandidatData->pluck('no_urut')->toArray();
        $hasil = $kandidatData->pluck('suara')->toArray();

        return view('layouts.backend', compact('jumlahpemilih', 'jumlahkandidat', 'suaramasuk', 'labels', 'hasil'));
    }
}