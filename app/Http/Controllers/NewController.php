<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('new.index', compact('news'));
    }

    public function create()
    {
        $news = News::all();
        $services = Service::all();

        return view('new.create', compact('news', 'services'));
    }

    // insert data to table
    public function store(Request $request)
    {
        $request->validate([
            'id_servis' => 'required',
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'required|image|file|max:2048',
            'tanggal' => 'required',
            'berita_hangat' => 'required',
            'status' => 'required',
        ], [
            'id_servis.required' => 'Servis harus diisi!',
            'judul.required' => 'Judul harus diisi!',
            'konten.required' => 'Konten harus diisi!',
            'gambar.required' => 'Gambar harus diisi!',
            'tanggal.required' => 'Tanggal harus diisi!',
            'berita_hangat.required' => 'Berita Hangat harus diisi!',
            'status.required' => 'Status harus diisi!',
        ]);

        try {
            if ($request->file('gambar')) {
                $path = $request->file('gambar');
                $pathGambar = $path->getClientOriginalName();
                $path->move(public_path('new-images'), $pathGambar);
            }

            News::create([
                'id_servis' => $request->id_servis,
                'judul' => $request->judul,
                'konten' => $request->konten,
                'gambar' => $pathGambar,
                'keterangan_gambar' => $request->keterangan_gambar,
                'inisial_penerbit' => $request->inisial_penerbit,
                'tanggal' => $request->tanggal,
                'jumlah_tampilan' => $request->jumlah_tampilan,
                'berita_hangat' => $request->berita_hangat,
                'status' => $request->status,
            ]);

            return redirect()->route('new')->with('success', 'Add Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Add Data Failed');
        }
    }

    public function edit($id)
    {
        $news = News::find($id);
        $services = Service::All();

        // tampilkan form edit dan kirim datanya
        return view('new.edit', compact('news', 'services'));
    }

    // update data selected
    public function update(Request $request)
    {
        try {
            // ambil data produk berdasarkan id yg dipilih
            $news = News::find($request->id);

            // cek apakah user mengupload gambar atau tidak
            if ($request->file('gambar')) {
                // cek apakah field gambar pd tabel products ada isinya atau tidak
                // kalau ada
                if ($news->gambar) {
                    // delete terlebih dahulu gambar lama
                    Storage::delete($news->gambar);
                }

                // upload file yg baru
                if ($request->file('gambar')) {
                    $path = $request->file('gambar');
                    $pathGambar = $path->getClientOriginalName();
                    $path->move(public_path('new-images'), $pathGambar);
                }

                // proses update data products dengan gambar

                News::where('id', $request->id)->update([
                    'id_servis' => $request->id_servis,
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                    'gambar' => $pathGambar,
                    'keterangan_gambar' => $request->keterangan_gambar,
                    'inisial_penerbit' => $request->inisial_penerbit,
                    'tanggal' => $request->tanggal,
                    'jumlah_tampilan' => $request->jumlah_tampilan,
                    'berita_hangat' => $request->berita_hangat,
                    'status' => $request->status,
                ]);
            } else {
                News::where('id', $request->id)->update([
                    'id_servis' => $request->id_servis,
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                    'keterangan_gambar' => $request->keterangan_gambar,
                    'inisial_penerbit' => $request->inisial_penerbit,
                    'tanggal' => $request->tanggal,
                    'jumlah_tampilan' => $request->jumlah_tampilan,
                    'berita_hangat' => $request->berita_hangat,
                    'status' => $request->status,
                ]);
            }
            return redirect()->route('new')->with('success', 'Update Data News Berhasil!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Update Data News Gagal!');
        }
    }

    public function delete($id)
    {
        // query/perintah hapus data berdasarkan id
        News::find($id)->delete();

        // kembalikan ke halaman users
        return redirect()->route('new')->with('success', 'Data News Berhasil Dihapus!');
    }
}