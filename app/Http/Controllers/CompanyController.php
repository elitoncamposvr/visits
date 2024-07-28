<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);

        return view('companies.index', [
            'companies' => $companies,
        ]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:companies',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
            'city' => 'required|string|max:100',
            'province' => 'required|string|max:100',
        ]);

        $companies = Company::query()->create([
            'name' => $request->get('name'),
            'contact_name' => $request->get('contact_name'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'cep' => $request->get('cep'),
            'city' => $request->get('city'),
            'province' => $request->get('province'),
        ]);

        event(new Registered($companies));

        return redirect(route('companies.index', absolute: false));
    }

    public function show(Company $company)
    {
        //
    }

    public function edit($id)
    {
        $company = Company::query()->find($id);
        return view('companies.edit', [
            'company' => $company,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:companies,email,' . $id,
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
            'city' => 'required|string|max:100',
            'province' => 'required|string|max:100',
        ]);

        $company = Company::query()->find($id);
        $company->update($request->all());

        return redirect(route('companies.index', absolute: false));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $results = Company::where('name', 'ilike', '%' . $search . '%')->get();

        return view('companies.search', [
            'companies' => $results,
        ]);
    }
    public function destroy(Company $company)
    {
        //
    }
}
