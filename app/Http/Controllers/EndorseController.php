<?php

namespace App\Http\Controllers;

use App\Models\Endorse;
use App\Models\Kontak;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EndorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Endorse::orderBy('id','DESC')->get();
        $count = Kontak::count();
        $counts= Transaction::count();

        return view('admin.endorse', compact('data','count','counts'));
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
        $validator = Validator::make($request->all(),[
            'nama'      => 'required',
            'umur'      => 'required',
            'alamat'    => 'required',
            'instagram' => 'required',
            'number'    => 'required',
            'foto'      => 'required',
            'tinggi'    => 'required',
            'berat'     => 'required',
            'minat'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error' => $validator->errors()], 401);
        }

        $file       = $request->file('foto');
        $file->storeAs('public/avatar', $file->hashName());

        $data = Endorse::create([
            'nama'      => $request->nama,
            'umur'      => $request->umur,
            'alamat'    => $request->alamat,
            'instagram' => $request->instagram,
            'number'    => $request->number,
            'foto'      => $file->hashName(),
            'tinggi'    => $request->tinggi,
            'berat'     => $request->berat,
            'minat'     => $request->minat

        ]);

        if ($data instanceof Model) {
            toastr()->success('Data Berhasil di Simpan !');

            return redirect()->route('endorse.index');
        }
        // dd($data);
        toastr()->error('Data Gagal di Simpan');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Endorse::findOrFail($id);
        return view('admin.detail.endorse', compact('data'));
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
        $validator = Validator::make($request->all(),[
            'nama'      => 'required',
            'umur'      => 'required',
            'alamat'    => 'required',
            'instagram' => 'required',
            'number'    => 'required',
            'tinggi'    => 'required',
            'berat'     => 'required',
            'minat'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error' => $validator->errors()], 401);
        }

        if ($request->file('foto')) {
            // Storage::disk('local')->delete('public/avatar'.basename($foto));

            $file       = $request->file('foto');
            $file->storeAs('public/avatar', $file->hashName());
            Endorse::findOrFail($id)->update([
                'nama'      => $request->nama,
                'umur'      => $request->umur,
                'alamat'    => $request->alamat,
                'instagram' => $request->instagram,
                'number'    => $request->number,
                'foto'      => $file->hashName(),
                'tinggi'    => $request->tinggi,
                'berat'     => $request->berat,
                'minat'     => $request->minat
            ]);
        }

        Endorse::findOrFail($id)->update([
            'nama'      => $request->nama,
            'umur'      => $request->umur,
            'alamat'    => $request->alamat,
            'instagram' => $request->instagram,
            'number'    => $request->number,
            'tinggi'    => $request->tinggi,
            'berat'     => $request->berat,
            'minat'     => $request->minat
        ]);

        toastr()->success('Data Berhasil di Ubah');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Endorse::destroy($id);

        toastr()->success('Data Berhasil di Hapus');

        return back();
    }
}
