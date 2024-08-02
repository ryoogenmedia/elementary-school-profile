<?php

namespace App\Http\Controllers;

use App\Models\Extrakulikuler;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ExtrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Extrakulikuler::all();

        return view('dashboard.extrakulikuler.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.extrakulikuler.create');
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
            'name' => ['required','string','min:2','max:255', 'unique:extrakulikulers,slug'],
            'description' => ['required','string','min:10'],
            'image' => ['required','image','max:2048'],
        ]);

        $name = $request->input('name');
        $description = $request->input('description');

        try{
            DB::beginTransaction();

            $extrakulikuler = Extrakulikuler::create([
                'name' => $name,
                'description' => $description,
            ]);

            if($request->file('image')){
                $extrakulikuler->update([
                    'image' => $request->file('image')->store('news-image','public'),
                ]);
            }

            if($name){
                $extrakulikuler->update([
                    'slug' => Str::slug($name),
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "Data ekstrakulikuler gagal ditambah.",
            ]);

            return redirect()->route('extrakulikuler.create');
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data ekstrakulikuler berhasil ditambah.",
        ]);

        return redirect()->route('extrakulikuler.index');
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
        $extrakulikuler = Extrakulikuler::query()->where('id', $id)->first();

        return view('dashboard.extrakulikuler.edit', compact('extrakulikuler'));
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
        $extrakulikuler = Extrakulikuler::query()->where('id', $id)->first();

        $request->validate([
            'name' => ['required','string','min:2','max:255', 'unique:extrakulikulers,slug,' . $extrakulikuler->id],
            'description' => ['required','string','min:10'],
            'image' => ['nullable','image','max:2048'],
        ]);

        $name = $request->input('name');
        $description = $request->input('description');

        try{
            DB::beginTransaction();

            $extrakulikuler->update([
                'name' => $name,
                'description' => $description,
            ]);

            if($request->file('image')){
                if($extrakulikuler->image){
                    File::delete(public_path('storage/' . $extrakulikuler->image));
                }

                $extrakulikuler->update([
                    'image' => $request->file('image')->store('kulikuler-image','public'),
                ]);
            }

            if($name){
                $extrakulikuler->update([
                    'slug' => Str::slug($name),
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "Data extrakulikuler gagal disunting.",
            ]);

            return redirect()->route('extrakulikuler.create');
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data extrakulikuler berhasil disunting.",
        ]);

        return redirect()->route('extrakulikuler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extrakulikuler = Extrakulikuler::query()->where('id', $id)->first();
        $extrakulikuler->delete();

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data extrakulikuler berhasil dihapus.",
        ]);

        return redirect()->route('extrakulikuler.index');
    }
}
