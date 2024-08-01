<?php

namespace App\Http\Controllers;

use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(){
        $rows = News::all();

        return view('dashboard.news.index', compact('rows'));
    }

    public function create(){
        return view('dashboard.news.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required','string','min:2','max:255', 'unique:news,slug'],
            'description' => ['required','string','min:10'],
            'image' => ['required','image','max:2048'],
        ]);

        $title = $request->input('title');
        $description = $request->input('description');

        try{
            DB::beginTransaction();

            $news = News::create([
                'title' => $title,
                'description' => $description,
            ]);

            if($request->file('image')){
                $news->update([
                    'image' => $request->file('image')->store('news-image','public'),
                ]);
            }

            if($title){
                $news->update([
                    'slug' => Str::slug($title),
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "Data berita gagal ditambah.",
            ]);

            return redirect()->route('news.create');
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data berita berhasil ditambah.",
        ]);

        return redirect()->route('news.index');
    }

    public function edit(string $id){
        $news = News::query()->where('id', $id)->first();

        return view('dashboard.news.edit', compact('news'));
    }

    public function update(Request $request, string $id){
        $news = News::query()->where('id', $id)->first();

        $request->validate([
            'title' => ['required','string','min:2','max:255', 'unique:news,slug,' . $news->id],
            'description' => ['required','string','min:10'],
            'image' => ['nullable','image','max:2048'],
        ]);

        $title = $request->input('title');
        $description = $request->input('description');

        try{
            DB::beginTransaction();

            $news->update([
                'title' => $title,
                'description' => $description,
            ]);

            if($request->file('image')){
                if($news->image){
                    File::delete(public_path('storage/' . $news->image));
                }

                $news->update([
                    'image' => $request->file('image')->store('news-image','public'),
                ]);
            }

            if($title){
                $news->update([
                    'slug' => Str::slug($title),
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "Data berita gagal disunting.",
            ]);

            return redirect()->route('news.create');
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data berita berhasil disunting.",
        ]);

        return redirect()->route('news.index');
    }

    public function destroy(string $id){
        $news = News::query()->where('id', $id)->first();
        $news->delete();

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data berita berhasil dihapus.",
        ]);

        return redirect()->route('news.index');
    }
}
