<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Announcement;
use App\Models\Activity;

class InformasiController extends Controller
{
    public function berita()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);
        $recent_news = News::select('title', 'slug', 'created_at')->orderBy('id', 'desc')->take(4)->get();
        return view('berita')->with([
            'title' => 'Berita Gampong',
            'news' => $news,
            'recent_news' => $recent_news,
        ]);
    }

    public function beritaShow($slug)
    {
        $news = News::where('slug', $slug)->first();
        $recent_news = News::select('title', 'slug', 'created_at')->orderBy('id', 'desc')->take(4)->get();

        $prev = News::where('id', '<', $news->id)->max('id');
        $prevContent = News::where('id',$prev)->first();

        $next = News::where('id', '>', $news->id)->min('id');
        $nextContent = News::where('id',$next)->first();
        return view('berita-tunggal')->with([
            'title' => $news->title,
            'news' => $news,
            'recent_news' => $recent_news,
            'prev' => $prevContent,
            'next' => $nextContent,
        ]);
    }

    public function pengumuman()
    {
        $announcements = Announcement::orderBy('id', 'desc')->paginate(5);
        $recent_announcements = Announcement::select('announcement', 'created_at')->orderBy('id', 'desc')->take(4)->get();
        return view('pengumuman')->with([
            'title' => 'Pengumuman Gampong',
            'announcements' => $announcements,
            'recent_announcements' => $recent_announcements,
        ]);
    }

    public function kegiatan()
    {
        $activities = Activity::orderBy('id', 'desc')->paginate(8);
        return view('kegiatan')->with([
            'title' => 'Kegiatan Gampong',
            'activities' => $activities,
        ]);
    }
}
