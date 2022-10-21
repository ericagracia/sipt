<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KRSController extends Controller
{
    public function index()
    {
        $nama = DB::table('mahasiswa')->where("nama", "Erica Gracia")->value("nama");
        $StudentID = DB::table('mahasiswa')->where("StudentID", "308120001")->value("StudentID");
        $kode_term = DB::table('term')->where("kode_term", "1212")->value("kode_term");
        $matakuliah = DB::table('matakuliah')->get();


        return view('cv', ['nama' => $nama, 'StudentID' => $StudentID, 'kode_term' => $kode_term, 'matakuliah' => $matakuliah]);
    }
}
