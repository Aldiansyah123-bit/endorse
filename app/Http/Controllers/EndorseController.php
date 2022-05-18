<?php

namespace App\Http\Controllers;

use App\Models\Endorse;
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

        return view('admin.endorse', compact('data'));
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
            'name'              => 'required',
            'age'               => 'required',
            'address'           => 'required',
            'description'       => 'required',
            'price'             => 'required',
            'foto'              => 'required',
            'company'           => 'required',
            'address_company'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error' => $validator->errors()], 401);
        }

        $file       = $request->file('foto');
        $file->storeAs('public/avatar', $file->hashName());

        $data = Endorse::create([
            'name'              => $request->name,
            'age'               => $request->age,
            'address'           => $request->address,
            'description'       => $request->description,
            'price'             => $request->price,
            'foto'              => $file->hashName(),
            'company'           => $request->company,
            'address_company'   => $request->address_company

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
            'name'              => 'required',
            'age'               => 'required',
            'address'           => 'required',
            'description'       => 'required',
            'price'             => 'required',
            // 'foto'              => 'required',
            'company'           => 'required',
            'address_company'   => 'required',
        ]);

        if ($request->file('foto')) {
            // Storage::disk('local')->delete('public/avatar'.basename($foto));

            $file       = $request->file('foto');
            $file->storeAs('public/avatar', $file->hashName());
            Endorse::findOrFail($id)->update([
                'name'              => $request->name,
                'age'               => $request->age,
                'address'           => $request->address,
                'description'       => $request->description,
                'price'             => $request->price,
                'foto'              => $file->hashName(),
                'company'           => $request->company,
                'address_company'   => $request->address_company
            ]);
        }

        Endorse::findOrFail($id)->update([
            'name'              => $request->name,
            'age'               => $request->age,
            'address'           => $request->address,
            'description'       => $request->description,
            'price'             => $request->price,
            // 'foto'              => $file->hashName(),
            'company'           => $request->company,
            'address_company'   => $request->address_company
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
