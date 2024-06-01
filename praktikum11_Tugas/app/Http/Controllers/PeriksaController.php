<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data pasien
        $list_periksa = Periksa::all();
        return view('periksa.index', compact('list_periksa'));
    }
}