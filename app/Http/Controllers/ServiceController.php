<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Exception;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        $services = Service::all();

        return view('service.create', compact('services'));
    }

    // insert data to table
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'servis' => 'required',
            'pengertian' => 'required',
            'keterangan' => 'required',
        ]);

        Service::create($validatedData);
        return redirect()->route('service')->with('success', 'Data News Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $services = Service::find($id);

        // tampilkan form edit dan kirim datanya
        return view('service.edit', compact('services'));
    }

    // update data selected
    public function update(Request $request)
    {
        try {
            // ambil data produk berdasarkan id yg dipilih
            $services = Service::find($request->id);

            Service::where('id', $request->id)->update([
                'servis' => $request->servis,
                'pengertian' => $request->pengertian,
                'keterangan' => $request->keterangan,
            ]);
            return redirect()->route('service')->with('success', 'Update Data Services Berhasil!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Update Data Services Gagal!');
        }
    }

    public function delete($id)
    {
        // query/perintah hapus data berdasarkan id
        Service::find($id)->delete();

        // kembalikan ke halaman users
        return redirect()->route('service')->with('success', 'Data Services Berhasil Dihapus!');
    }
}