<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\License;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class LicenseController extends Controller
{

    public function index()
    {
        $licenses = DB::table('companies')
            ->leftJoin('licenses', 'companies.id', '=', 'licenses.company_id')
            ->paginate(10, array(
                'licenses.id as license_id',
                'licenses.expires_at as expires_at',
                'companies.id as company_id',
                'companies.name as name',
                'companies.email as email',
            ));

        return view('licenses.index',[
            'licenses' => $licenses,
        ]);
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
        $request->validate([
            'expires_at' => 'required',
            'company_id' => 'required',
        ]);

        $date = $request->get('expires_at'). " 00:00:00";

        $license = License::query()->create([
            'expires_at' => $date,
            'company_id' => $request->get('company_id'),
        ]);

        event(new Registered($license));

        return redirect()->back();

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
