<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $jobs = Job::with(['employer', 'tags'])
            ->where('title', 'LIKE', '%'.$request->get('q').'%')
            ->get();

        return view('jobs.results', compact('jobs'));
    }
}
