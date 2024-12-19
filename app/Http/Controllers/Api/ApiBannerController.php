<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Banner;

class ApiBannerController extends Controller
{
    public function getAllBanner()
    {
        $data = Banner::orderBy('created_at', 'DESC')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diload',
            'data' => $data
        ], 200);
    }
}
