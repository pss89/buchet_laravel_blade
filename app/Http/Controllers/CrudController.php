<?php

namespace App\Http\Controllers;

use App\Models\CrudModel;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
    public function index(Request $request)
    {
        $q = trim($request->input('q', ''));
        $per = trim($request->input('per', '10'));

        $lists = CrudModel::when($q, function ($query, $q) {
            $query->where('subject', 'like', "%{$q}%")
                    ->orWhere('content', 'like', "%{$q}%");
        })->paginate($per);

        return view('crud.index', compact('lists', 'q', 'per'));
    }
}
