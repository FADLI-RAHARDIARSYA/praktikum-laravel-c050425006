<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungTotalSksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $totalSks = Matakuliah::sum('sks');
        return "Jumlah total SKS dari seluruh mata kuliah di database adalah: {$totalSks} SKS";
    }
}
