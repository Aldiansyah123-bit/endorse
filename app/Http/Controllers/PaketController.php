<?php

namespace App\Http\Controllers;

use App\Models\Endorse;
use App\Models\Kontak;
use App\Models\Paket;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data       = Paket::orderBy('id','DESC')->get();
        $endorse    = Endorse::orderBy('id','DESC')->get();
        $count      = Kontak::count();
        $counts     = Transaction::count();

        return view('admin.paket',compact('data','endorse','count','counts'));
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
            'nama'  => 'required',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $data = Paket::create([
            'endorse_id'    => $request->endorse_id,
            'nama'          => $request->nama,
            'harga'         => $request->harga,
            'keterangan'    => $request->keterangan,
        ]);

        if ($data instanceof Model) {
            toastr()->success('Data Berhasil di Simpan !');

            return redirect()->route('paket.index');
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
        $validator = Validator::make($request->all(),[
            'nama'  => 'required',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        Paket::findOrFail($id)->update([
            'endorse_id'    => $request->endorse_id,
            'nama'          => $request->nama,
            'harga'         => $request->harga,
            'keterangan'    => $request->keterangan,
        ]);

        toastr()->success('Data Berhasil di Update !');
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
        Paket::destroy($id);
        toastr()->success('Data Berhasil di Hapus');

        return back();
    }
}
