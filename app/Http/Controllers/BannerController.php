<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{

    public function index()
    {
        $banners = Banner::all();
        dd($banners);
        return view('banner.index', compact('banners'));
    }

    public function create()
    {
        $banners = Banner::all();
        return view('banner.create', compact('banners'));
    }

    // insert data to table
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'judul' => 'required|min:5',
            'keterangan' => 'required',
            'gambar' => 'required|image|file|max:2048',
        ], [
            'judul.required' => 'Judul harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
            'gambar.required' => 'Gambar harus diisi!',
        ]);

        try {
            // $pathGambar = $request->file('gambar')->store('banner-images');
            if ($request->file('gambar')) {
                $path = $request->file('gambar');
                $pathGambar = $path->getClientOriginalName();
                $path->move(public_path('banner-images'), $pathGambar);
            }

            // insert data ke tabel products
            Banner::create([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'gambar' => $pathGambar,
                'status' => $request->status,
            ]);

            return redirect()->route('banner')->with('success', 'Add Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Add Data Failed!');
        }
    }

    public function edit($id)
    {
        $banners = Banner::find($id);

        return view('banner.edit', compact('banners'));
    }

    public function update(Request $request)
    {
        try {
            $banners = Banner::find($request->id);

            if ($request->file('gambar')) {

                if ($banners->gambar) {
                    Storage::delete($banners->gambar);
                }

                if ($request->file('gambar')) {
                    $path = $request->file('gambar');
                    $pathGambar = $path->getClientOriginalName();
                    $path->move(public_path('banner-images'), $pathGambar);
                }

                Banner::where('id', $request->id)->update([
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'gambar' => $pathGambar,
                    'status' => $request->status,
                ]);
            } else {
                Banner::where('id', $request->id)->update([
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'status' => $request->status,
                ]);
            }
            return redirect()->route('banner')->with('success', 'Update Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Update Data Failed!');
        }
    }

    public function delete($id)
    {
        try {
            $banners = Banner::find($id);

            if ($banners->gambar) {
                Storage::delete($banners->gambar);
            }

            Banner::destroy($id);

            return redirect()->route('banner')->with('success', 'Delete Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Delete Data Failed!');
        }
    }
}
