<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();

        return view('dashboard.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'address' => ['nullable','string','min:2'],
            'name_school' => ['nullable','string'],
            'operational' => ['nullable','string','min:2','max:255'],
            'email_school' => ['nullable','string','min:2','max:255'],
            'phone' => ['nullable','string','min:2','max:255'],
            'slogan' => ['nullable','string','min:2','max:255'],
            'total_teacher' => ['nullable','string'],
            'total_student' => ['nullable','string'],
            'total_alumni' => ['nullable','string'],
            'total_staff' => ['nullable','string'],
            'about' => ['nullable','string','min:2'],
        ]);

        try{
            DB::beginTransaction();

            $contact = Contact::first();

            if($contact){
                $contact->update([
                    'address' => $request->input('address'),
                    'name_school' => $request->input('name_school'),
                    'operational' => $request->input('operational'),
                    'email_school' => $request->input('email_school'),
                    'phone' => $request->input('phone'),
                    'slogan' => $request->input('slogan'),
                    'total_teacher' => $request->input('total_teacher'),
                    'total_student' => $request->input('total_student'),
                    'total_alumni' => $request->input('total_alumni'),
                    'total_staff' => $request->input('total_staff'),
                    'about' => $request->input('about'),
                ]);
            }else{
                Contact::create([
                    'address' => $request->input('address'),
                    'name_school' => $request->input('name_school'),
                    'operational' => $request->input('operational'),
                    'email_school' => $request->input('email_school'),
                    'phone' => $request->input('phone'),
                    'slogan' => $request->input('slogan'),
                    'total_teacher' => $request->input('total_teacher'),
                    'total_student' => $request->input('total_student'),
                    'total_alumni' => $request->input('total_alumni'),
                    'total_staff' => $request->input('total_staff'),
                    'about' => $request->input('about'),
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "Data kontak sekolah gagal disunting.",
            ]);

            return redirect()->route('contact.index');
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Data kontak sekolah berhasil disunting.",
        ]);

        return redirect()->route('contact.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
