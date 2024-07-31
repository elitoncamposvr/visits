<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanySettingController extends Controller
{

    public function index()
    {
        $company_id = Auth::user()->company_id;
        $settings = CompanySetting::query()->where('company_id','=', $company_id)->first();
        return view('settings',[
            'settings' => $settings,
        ]);
    }

    public function edit(CompanySetting $companySetting)
    {
        //
    }

    public function update(Request $request, $id)
    {
        dump($request->all());
    }

}
