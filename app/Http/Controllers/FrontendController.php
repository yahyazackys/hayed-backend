<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // news
    public function getAllNew()
    {
        $data = News::with(['services'])
            ->where('status', '1')
            ->orderBy('judul', 'ASC')
            ->get();

        // Return a view instead of JSON response
        return view('news.all', ['news' => $data]);
    }

    public function getNewNew()
    {
        $data = News::with(['services'])
            ->where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->get();

        // Return a view instead of JSON response
        return view('news.new', ['news' => $data]);
    }

    public function getBreakingNew()
    {
        $data = News::with(['services'])
            ->where('status', '1')
            ->where('berita_hangat', '1')
            ->limit(3)
            ->orderBy('created_at', 'DESC')
            ->get();

        // Return a view instead of JSON response
        return view('news.breaking', ['news' => $data]);
    }

    // event
    public function getPreviousEvent()
    {
        $events = Event::where('status', '0')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('event.index', ['events' => $events]);
    }

    public function getNextEvent()
    {
        $events = Event::where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('event.index', ['events' => $events]);
    }

    // banner
    public function getbanner()
    {
        $banners = Banner::orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.home', compact('banners'));
    }
}
