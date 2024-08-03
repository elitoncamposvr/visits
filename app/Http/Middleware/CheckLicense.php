<?php

namespace App\Http\Middleware;

use App\Models\Company;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLicense
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = Auth::user()->company_id;
        $company_id = Company::where('id', '=', $id)->first();

        if(!$company_id->license || !$company_id->license->isActive()){
            return redirect(route('licenses.inactive', absolute: false));
        }

        return $next($request);
    }
}
