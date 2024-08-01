<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{

    public function index(){
        $data = auth()->user();
        return view('dashboard.profile', compact('data'));
    }

    public function update(Request $request, string $id){
        $user = User::query()->where('id', $id)->first();

        $request->validate([
            'username' => ['required','string','min:2','max:255'],
            'password' => ['nullable','string', Password::default()],
            'email' => ['required','string','email','min:2','max:255','unique:users,email,' . auth()->user()->id],
            'avatar' => ['nullable','image','max:2048'],
        ]);

        try{
            DB::beginTransaction();
            $user->update([
                'username' => $request->input('username'),
                'email' => $request->input('email'),
            ]);

            if($request->input('password')){
                $user->update([
                    'password' => bcrypt($request->input('password'))
                ]);
            }

            if($request->file('avatar')){
                if($user->avatar){
                    File::delete(public_path('storage/' . $user->avatar));
                }

                $file = $request->file('avatar')->store('avatar','public');
                $user->update([
                    'avatar' => $file,
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "Profil gagal disunting.",
            ]);

            return redirect()->route('profile.index');
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "Profil berhasil disunting.",
        ]);

        return redirect()->route('profile.index');
    }
}
