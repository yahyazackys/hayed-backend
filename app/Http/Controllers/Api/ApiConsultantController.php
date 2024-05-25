<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Consultant;

class ApiConsultantController extends Controller
{

    public function getAllConsultant()
    {
        // $data = Job::all();
        $data = Consultant::orderBy('nama_asli')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diload',
            'data' => $data
        ], 200);
    }

    public function detailConsultant($id)
    {
        $data = Consultant::where('id', $id)
            ->first();

        if ($data) {
            // tampilkan responsenya
            // menggunakan format json
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data berhasil diload',
                    'data' => $data,
                ],
                200
            );
        } else {
            // tampilkan responsenya
            // menggunakan format json
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data Tidak ditemukan',
                    'data' => $data,
                ],
                404
            );
        }
    }
}