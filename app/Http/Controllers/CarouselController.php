<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Carousel::all();

        return view('dashboard.carousel.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','string','min:2','max:255', ],
            'pretitle' => ['required','string','min:2','max:255', ],
            'description' => ['required','string','min:10'],
            'image' => ['required','image','max:2048'],
        ]);

        $title = $request->input('title');
        $pretitle = $request->input('pretitle');
        $description = $request->input('description');

        try{
            DB::beginTransaction();

            $news = Carousel::create([
                'title' => $title,
                'pretitle' => $pretitle,
                'description' => $description,
            ]);

            if($request->file('image')){
                $news->update([
                    'image' => $request->file('image')->store('news-image','public'),
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "Data slider gagal ditambah.",
            ]);

            return redirect()->route('carousel.create');
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data slider berhasil ditambah.",
        ]);

        return redirect()->route('carousel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = Carousel::query()->where('id', $id)->first();

        return view('dashboard.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = Carousel::query()->where('id', $id)->first();

        $request->validate([
            'title' => ['required','string','min:2','max:255'],
            'pretitle' => ['required','string','min:2','max:255'],
            'description' => ['required','string','min:10'],
            'image' => ['nullable','image','max:2048'],
        ]);

        $title = $request->input('title');
        $pretitle = $request->input('title');
        $description = $request->input('description');

        try{
            DB::beginTransaction();

            $news->update([
                'title' => $title,
                'pretitle' => $pretitle,
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

            DB::commit();
        }catch(Exception $e){
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "Data slider gagal disunting.",
            ]);

            return redirect()->route('carousel.create');
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data berita berhasil disunting.",
        ]);

        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = Carousel::query()->where('id', $id)->first();
        $news->delete();

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data slider berhasil dihapus.",
        ]);

        return redirect()->route('carousel.index');
    }
}
