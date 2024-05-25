<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiEventController extends Controller
{
    public function getAllEvent()
    {
        // $data = Job::all();
        $data = Event::orderBy('judul')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diload',
            'data' => $data
        ], 200);
    }

    public function getPreviousEvent()
    {
        $data = Event::where('status', '0')
            ->orderBy('created_at', 'DESC')
            ->get();

        return response()->json(
            [
                'success' => true,
                'message' => 'Data berhasil diload',
                'data' => $data,
            ],
            200
        );
    }

    public function getNextEvent()
    {
        $data = Event::where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->get();

        return response()->json(
            [
                'success' => true,
                'message' => 'Data berhasil diload',
                'data' => $data,
            ],
            200
        );
    }

    public function detailEvent($id)
    {
        $data = Event::where('id', $id)
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