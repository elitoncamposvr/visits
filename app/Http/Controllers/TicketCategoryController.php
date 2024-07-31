<?php

namespace App\Http\Controllers;

use App\Models\TicketCategory;
use Illuminate\Http\Request;

class TicketCategoryController extends Controller
{
    public function index()
    {
        return view('tickets.category_index',[
            'categories' => TicketCategory::paginate(10),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(TicketCategory $ticketCategory)
    {
        //
    }

    public function update(Request $request, TicketCategory $ticketCategory)
    {
        //
    }

    public function destroy(TicketCategory $ticketCategory)
    {
        //
    }
}
