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

        // 단돈 호출
        // $lists = CrudModel::when($q, function ($query, $q) {
        //     $query->where('subject', 'like', "%{$q}%")
        //             ->orWhere('content', 'like', "%{$q}%");
        // })->paginate($per);

        // user_id 의 users테이블 조인해서 가져오기
        $lists = CrudModel::with('user')
            ->when($q, function ($query, $q) {
                $query->where('subject', 'like', "%{$q}%")
                        ->orWhere('content', 'like', "%{$q}%");
            })->paginate($per);

        // dd($lists);
        
        // echo "<pre>";
        // print_r($lists->toArray());
        // echo "</pre>";

        return view('crud.index', compact('lists', 'q', 'per'));
    }

    // 글 작성, 수정 페이지
    public function form($id = null, Request $request)
    {
        $data = null;
        if ($id) {
            $data = CrudModel::find($id);
            if (!$data) {
                return redirect()->route('crud.index')->with('error', '데이터가 존재하지 않습니다.');
            }
        }

        $params = $request->only(['q', 'per', 'page']);

        return view('crud.form', compact('data', 'params'));
    }
}