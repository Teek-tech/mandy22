<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class AdminController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        return view('admin.index', compact('transactions'));
    }
}
