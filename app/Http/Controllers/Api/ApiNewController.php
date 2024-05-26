<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiNewController extends Controller
{

    public function getAllNew()
    {
        $data = News::with(['services'])
            ->where('status', '1')
            ->orderBy('judul', 'ASC')
            ->get();
<<<<<<< HEAD

=======
dd($data);
>>>>>>> c1748c8 (terbaru)
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
    }

    public function getNewNew()
    {
        $data = News::with(['services'])
            ->where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->get();

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
    }

    public function getBreakingNew()
    {
        $data = News::with(['services'])
            ->where('status', '1')
            ->where('berita_hangat', '1')
            ->limit(3)
            ->orderBy('created_at', 'DESC')
            ->get();

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
    }

    public function detailNew($id)
    {
        $data = News::with(['services'])
            ->where('id', $id)
            ->first();

        if ($data) {
            $data->jumlah_tampilan++;
            $data->save();

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

    public function searchNew(Request $request)
    {
        // Check if a keyword is provided
        $keyword = $request->input('keyword');
        if (empty($keyword)) {
            return response()->json([
                'success' => false,
                'message' => 'Keyword is required',
                'data' => [],
            ], 400); // 400 Bad Request
        }

        // Explode the keyword into individual words
        $keywords = explode(' ', $keyword);

        // Perform the search
        $data = News::with(['services'])
            ->where('status', '1')
            ->where(function ($query) use ($keywords) {
                foreach ($keywords as $word) {
                    $query->where(function ($subQuery) use ($word) {
                        $subQuery->where('judul', 'like', '%' . $word . '%')
                            ->orWhere('konten', 'like', '%' . $word . '%')
                            ->orWhereHas('services', function ($q) use ($word) {
                                $q->where('servis', 'like', '%' . $word . '%');
                            });
                    });
                }
            })
            ->orderBy('judul', 'ASC')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diload',
            'data' => $data,
        ], 200);
    }
}
