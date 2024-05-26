<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    public function create()
    {
        $events = Event::all();
        return view('event.create', compact('events'));
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
            // $pathGambar = $request->file('gambar')->store('event-images');
            if ($request->file('gambar')) {
                $path = $request->file('gambar');
                $pathGambar = $path->getClientOriginalName();
                $path->move(public_path('event-images'), $pathGambar);
            }

            // insert data ke tabel products
            Event::create([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'gambar' => $pathGambar,
                'status' => $request->status,
            ]);

            return redirect()->route('event')->with('success', 'Add Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Add Data Failed!');
        }
    }

    public function edit($id)
    {
        $events = Event::find($id);

        return view('event.edit', compact('events'));
    }

    public function update(Request $request)
    {
        try {
            $events = Event::find($request->id);

            if ($request->file('gambar')) {

                if ($events->gambar) {
                    Storage::delete($events->gambar);
                }

                if ($request->file('gambar')) {
                    $path = $request->file('gambar');
                    $pathGambar = $path->getClientOriginalName();
                    $path->move(public_path('event-images'), $pathGambar);
                }

                Event::where('id', $request->id)->update([
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'gambar' => $pathGambar,
                    'status' => $request->status,
                ]);
            } else {
                Event::where('id', $request->id)->update([
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'status' => $request->status,
                ]);
            }
            return redirect()->route('event')->with('success', 'Update Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Update Data Failed!');
        }
    }

    public function delete($id)
    {
        try {
            $events = Event::find($id);

            if ($events->gambar) {
                Storage::delete($events->gambar);
            }

            Event::destroy($id);

            return redirect()->route('event')->with('success', 'Delete Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Delete Data Failed!');
        }
    }
}