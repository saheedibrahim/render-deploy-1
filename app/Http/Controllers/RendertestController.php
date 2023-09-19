<?php

namespace App\Http\Controllers;

use App\Models\Rendertest;
use Illuminate\Http\Request;

class RendertestController extends Controller
{
    public function store(Request $request) {
        Rendertest::create([
            'slack_name' => $request->slack_name,
            'current_day' => date('l'),
            'utc_time' => '23:35:89',
            'track' => $request->track,
            'github_file_url' => $request->github_file_url,
            'github_repo_url' => $request->github_repo_url,
            'status_code' => 200
        ]);
    }
}
