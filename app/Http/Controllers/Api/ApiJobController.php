<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiJobController extends Controller
{
    public function getAllJob()
    {
        $data = Job::orderBy('nama_pekerjaan')->get();
<<<<<<< HEAD

=======
dd($data);
>>>>>>> c1748c8 (terbaru)
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diload',
            'data' => $data
        ], 200);
    }
<<<<<<< HEAD
=======


>>>>>>> c1748c8 (terbaru)
    
}
