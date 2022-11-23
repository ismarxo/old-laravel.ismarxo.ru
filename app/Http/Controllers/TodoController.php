<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $issues = Issue::all();

        $array = [];

        foreach ($issues as $key => $value) {
            $array[] = $value->name;
        }

        $data['issues'] = $array;

        return view('todo', $data);
    }
}
