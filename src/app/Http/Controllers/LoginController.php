<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

class LoginController extends Controller
{
    public function show(Request $request)
    {
        $data['siswa'] = Siswa::get();
        return view('table', $data);
    }

    public function getLogin(Request $request)
    {
        return view('daftar');
    }

    public function daftar(Request $request)
    {
        $insert['firstname'] = $request->firstname;
        $insert['lastname'] = $request->lastname;
        $insert['email'] = $request->email;

        Siswa::create($insert);

        return redirect('/');
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('/');
    }

    public function getupdate($id)
    {
        $data['siswa'] = Siswa::where(['id' => $id])->first();
        return view('update', $data);
    }

    public function update($id, Request $request)
    {
        $siswa = Siswa::where(['id' => $id])->first();
        $siswa->firstname = $request->firstname;
        $siswa->lastname = $request->lastname;
        $siswa->email = $request->email;
        $siswa->save();

        return redirect('/');
    }
}
