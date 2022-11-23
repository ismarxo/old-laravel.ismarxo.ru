<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class IssueController extends Controller
{
    public function storage(Request $request): void
    {
        $issue = new Issue;
        $issue->name = $request->name;
        $issue->user = 1;
        $issue->save();

        Redirect::to('/todo');
    }

    public function getAll(Request $request): array
    {
        $issues = Issue::all();

        $array = [];

        foreach ($issues as $key => $value) {
            $array[] = $value->name;
        }

        return $array;
    }
}
