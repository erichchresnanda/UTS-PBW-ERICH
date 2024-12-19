<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Siswa;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function pinjaman()
    {
        $peminjaman = Peminjaman::all();
        return view('report.pinjaman', compact('peminjaman'));
    }

    public function siswa()
    {
        $siswa = Siswa::all();
        return view('report.siswa', compact('siswa'));
    }
}
