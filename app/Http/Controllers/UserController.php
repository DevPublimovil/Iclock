<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;
use App\User;
use Auth;
use Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getuser()
    {
        $user = new UserResource(User::find(Auth::id()));
        return response()->json($user, 200);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', \compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($request->password)
        {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
        else if($request->file('avatar'))
        {
            $image = $request->file('avatar');
            $path = $request->file('avatar')->store(
                'users/', 'public'
            );
            $user->update([
                'avatar' => $path
            ]);
        }
        else
        {
            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }

        return redirect()->route('home')->with('mensaje', '¡Tus datos se han guardado correctamente!');
    }

    public function getfirma()
    {
        $user = User::find(Auth::id());
        return view('users.firma', \compact('user'));
    }
    
    public function updatefirma(Request $request, $id)
    {
        if($request->imagefirma)
        {
            $cadena = str_replace('data:image/png;base64,', '', $request->imagefirma);
            $cadena = str_replace(' ', '+', $cadena);
            $img = Image::make($cadena)->encode('png', 75);
            $imageName = Str::random(10).'_'.$id.'.png';
            Storage::disk('public')->put('firmas/' . $imageName, $img);
        }

        return 'ok';
        /* if($request->imagefirma){
            $image = $request->imagefirma;  // your base64 encoded
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(10).'_'.$id.'.png';
            $path = '/app/public';
            if(!Storage::exists($path))
            {
                $directories = Storage::makeDirectory($path);
                return $directories;
            }
           \File::put( $path . $imageName, base64_decode($image));
        }
        return redirect()->route('users.show', $id)->with('¡Su firma se guardo correctamente!'); */
    }
}
