<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{

    public function index()
    {
        return view('inactive');
    }

    public function create()
    {
        return view('inactive');
    }

    public function inactive()
    {
        return view('inactive');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(License $license)
    {
        //
    }

    public function edit(License $license)
    {
        //
    }

    public function update(Request $request, License $license)
    {
        //
    }

    public function destroy(License $license)
    {
        //
    }
}
