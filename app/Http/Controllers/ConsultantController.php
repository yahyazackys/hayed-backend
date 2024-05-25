<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Storage;

class ConsultantController extends Controller
{
    public function index()
    {
        $consultants = Consultant::all();
        return view('consultant.index', compact('consultants'));
    }

    public function create()
    {
        $consultants = Consultant::all();

        return view('consultant.create', compact('consultants'));
    }

    // insert data to table
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'nama_asli' => 'required|min:5',
            'nama_gelar' => 'required|min:5',
            'pekerjaan' => 'required',
            'no_hp' => 'required|min:4|max:14',
            'email' => 'required|unique:users',
            'keterangan' => 'required',
            'gambar_bg' => 'required|image|file|max:2048',
            'gambar_nonbg' => 'required|image|file|max:2048',
        ], [
            'nama_asli.required' => 'Nama Asli harus diisi!',
            'nama_gelar.required' => 'Nama Gelar harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'no_hp.required' => 'No HP harus diisi!',
            'email.required' => 'Email harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
            'gambar_bg.required' => 'Gambar harus diisi!',
            'gambar_nonbg.required' => 'Gambar harus diisi!',
        ]);

        try {
            //tentukan folder penyimpanan gambarnya

            if ($request->file('gambar_bg')) {
                $path1 = $request->file('gambar_bg');
                $pathGambar1 = $path1->getClientOriginalName();
                $path1->move(public_path('consultantBg-images'), $pathGambar1);
            }

            if ($request->file('gambar_nonbg')) {
                $path2 = $request->file('gambar_nonbg');
                $pathGambar2 = $path2->getClientOriginalName();
                $path2->move(public_path('consultantNonbg-images'), $pathGambar2);
            }

            // insert data ke tabel products
            Consultant::create([
                'nama_asli' => $request->nama_asli,
                'nama_gelar' => $request->nama_gelar,
                'pekerjaan' => $request->pekerjaan,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'keterangan' => $request->keterangan,
                'gambar_bg' => $pathGambar1,
                'gambar_nonbg' => $pathGambar2,
            ]);

            return redirect()->route('consultant')->with('success', 'Add Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Add Data Failed!');
        }
    }

    public function edit($id)
    {
        $consultants = Consultant::find($id);

        return view('consultant.edit', compact('consultants'));
    }

    public function update(Request $request)
    {
        try {
            $consultants = Consultant::find($request->id);

            if ($request->file('gambar_bg') && $request->file('gambar_nonbg')) {

                if ($consultants->gambar_bg) {
                    Storage::delete($consultants->gambar_bg);
                }
                if ($consultants->gambar_nonbg) {
                    Storage::delete($consultants->gambar_nonbg);
                }

                if ($request->file('gambar_bg')) {
                    $path1 = $request->file('gambar_bg');
                    $pathGambar1 = $path1->getClientOriginalName();
                    $path1->move(public_path('consultantBg-images'), $pathGambar1);
                    // $data['gambar_bg'] = $pathGambar1;
                }

                if ($request->file('gambar_nonbg')) {
                    $path2 = $request->file('gambar_nonbg');
                    $pathGambar2 = $path2->getClientOriginalName();
                    $path2->move(public_path('consultantNonbg-images'), $pathGambar2);
                    // $data['gambar_nonbg'] = $pathGambar2;
                }

                Consultant::where('id', $request->id)->update([
                    'nama_asli' => $request->nama_asli,
                    'nama_gelar' => $request->nama_gelar,
                    'pekerjaan' => $request->pekerjaan,
                    'no_hp' => $request->no_hp,
                    'email' => $request->email,
                    'keterangan' => $request->keterangan,
                    'gambar_bg' => $pathGambar1,
                    'gambar_nonbg' => $pathGambar2,
                ]);
            } else {
                Consultant::where('id', $request->id)->update([
                    'nama_asli' => $request->nama_asli,
                    'nama_gelar' => $request->nama_gelar,
                    'pekerjaan' => $request->pekerjaan,
                    'no_hp' => $request->no_hp,
                    'email' => $request->email,
                    'keterangan' => $request->keterangan,
                ]);
            }
            return redirect()->route('consultant')->with('success', 'Update Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Update Data Failed!');
        }
    }

    public function delete($id)
    {
        try {
            $consultants = Consultant::find($id);

            if ($consultants->gambar_bg) {
                Storage::delete($consultants->gambar_bg);
            }
            if ($consultants->gambar_nonbg) {
                Storage::delete($consultants->gambar_nonbg);
            }

            Consultant::destroy($id);

            return redirect()->route('consultant')->with('success', 'Delete Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Delete Data Failed!');
        }
    }
}
