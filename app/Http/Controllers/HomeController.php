<?php

namespace App\Http\Controllers;

use App\Models\Endorse;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'endorse'       => Endorse::count(),
            'transaction'   => Transaction::count(),
        ];
        return view('admin.dashboard', $data);
    }
}
