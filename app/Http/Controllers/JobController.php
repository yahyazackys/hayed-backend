<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Exception;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('job.index', compact('jobs'));
    }

    public function create()
    {
        $jobs = Job::all();

        return view('job.create', compact('jobs'));
    }

    // insert data to table
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pekerjaan' => 'required',
            'keterangan' => 'required',
            'status' => $request->status,
        ]);

        Job::create($validatedData);
        return redirect()->route('job')->with('success', 'Data Jobs Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $jobs = Job::find($id);

        // tampilkan form edit dan kirim datanya
        return view('job.edit', compact('jobs'));
    }

    // update data selected
    public function update(Request $request)
    {
        try {
            // ambil data produk berdasarkan id yg dipilih
            $jobs = Job::find($request->id);

            Job::where('id', $request->id)->update([
                'nama_pekerjaan' => $request->nama_pekerjaan,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
            ]);
            return redirect()->route('job')->with('success', 'Update Data Jobs Berhasil!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Update Data Jobs Gagal!');
        }
    }

    public function delete($id)
    {
        // query/perintah hapus data berdasarkan id
        Job::find($id)->delete();

        // kembalikan ke halaman users
        return redirect()->route('job')->with('success', 'Data Jobs Berhasil Dihapus!');
    }
}
