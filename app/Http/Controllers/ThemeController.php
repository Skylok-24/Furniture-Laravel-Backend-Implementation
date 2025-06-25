<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactForm;
use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class ThemeController extends Controller
{
    public function about() 
    {
        return view('theme.about');
    }

    public function services() 
    {
        return view('theme.services');
    }

    public function contact() 
    {
        $data = Contact::all();
        dd($data);
        return view('theme.contact');
    }

    public function store(StoreContactForm $request)
    {
        // $validateData = $request->validate([
        //     'first_name' => 'required|string|min:5' ,
        //     'last_name' => 'required|string|min:5',
        //     'email' => 'required|email:rfc,dns',
        //     'message' => 'nullable'
        // ],[
        //     'first_name.required' => 'الاسم مطلوب',
        //     'first_name.min' => 'يجب على اللأقل ان يكون الاسم 5 حروف'
        // ]);

        $validateData = $request->validated();
        dd($validateData);
    } 
}
