<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data pasien
        $list_pasien = Pasien::all();
        return view('pasien.index', compact('list_pasien'));
    }
}