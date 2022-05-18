<?php

namespace App\Http\Controllers;

use App\Models\Endorse;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Endorse',
            'endorse'   => Endorse::orderBy('id','DESC')->paginate(8),
        ];

        return view('welcome',$data);
    }

    public function list(Request $request)
    {
        $data = [
            'title'     => 'Endorse',
            'endorse'   => Endorse::orderBy('id','DESC')->when($request->q, function($endorse){
                $endorse = $endorse->where('name','like','%'.request()->q. '%');
            })->get(),
        ];

        return view('list',$data);
    }

    public function detail($id)
    {
        $data =  Endorse::findOrFail($id);

        return view('detail', compact('data'));
    }

    public function listdetail($id)
    {
        $data =  Endorse::findOrFail($id);

        return view('detail', compact('data'));
    }

    public function admin()
    {
        return view('admin.admin');
    }

    public function viewcheck()
    {
        $data = [
            'title' => 'Endorse'
        ];

        return view('detail',$data);
    }

    public function checkout(Request $request)
    {
        $validator = Validator::make($request->all(),[
            // 'endorse_id'    => 'required',
            'name'          => 'required',
            'phone'         => 'required',
            'address'       => 'required',
            'note'          => 'required',
            'foto'          => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 403);
        }

        $length = 10;
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }

        //generate no invoice
        $no_invoice = 'INV-'.Str::upper($random);

        // $file       = $request->foto;
        // $filename   = $file->getClientOrginalName();
        // $file->move(public_path('/storage/bukti',$filename));
        $file = $request->file('foto');
        $file->storeAs('public/bukti',$file->hashName());

        // $data =  Endorse::findOrFail('id');

        $data = Transaction::create([
            'no_invoice'    => $no_invoice,
            'endorse_id'    => $request->endorse_id,
            'name'          => $request->name,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'note'          => $request->note,
            'foto'          => $file->hashName(),
        ]);

        // if ($data instanceof Model) {
        //     toastr()->success('Data has been saved successfully!');

        //     return redirect()->route('posts.index');
        // }

        // toastr()->error('An error has occurred please try again later.');

        return redirect('list')->with('message', 'Terimakasih atas Pemesanannya, Tunggu ya Informasi Selanjutnya Admin akan menghubungi kamu melalui Nomor Telepon / WhatsApp yang terdaftar');
        // toastr()->success('Terimakasih atas Pemesanannya, Tunggu ya Informasi Selanjutnya Admin akan menghubungi kamu melalui Nomor Telepon / WhatsApp yang terdaftar');

        // return redirect('list');
    }
}
