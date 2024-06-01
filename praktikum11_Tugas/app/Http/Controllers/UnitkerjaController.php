<?php

namespace App\Http\Controllers;

use App\Models\Unitkerja;
use Illuminate\Http\Request;


class UnitkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data pasien
        $list_unitkerja = Unitkerja::all();
        return view('unitkerja.index', compact('list_unitkerja'));
    }
}