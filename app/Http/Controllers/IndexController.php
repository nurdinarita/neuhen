<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Gallery;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent_news = News::select('title', 'slug', 'image', 'body', 'created_at')->orderBy('id', 'desc')->take(4)->get();
        $recent_activity = Activity::select('name', 'image', 'description')->orderBy('id', 'desc')->take(3)->get();
        $recent_announcement = Announcement::select('announcement', 'created_at')->orderBy('id', 'desc')->take(3)->get();
        $recent_gallery = Gallery::select('image')->orderBy('id', 'desc')->take(10)->get();
        return view('index')->with([
            'title' => 'Gampong Neuhen',
            'recent_news' => $recent_news,
            'recent_activity' => $recent_activity,
            'recent_announcement' => $recent_announcement,
            'recent_gallery' => $recent_gallery,
        ]);
    }

    public function show()
    {

    }
}
