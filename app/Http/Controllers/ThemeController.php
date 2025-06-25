<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactForm;
use App\Models\Category;
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
        // $data = Contact::where('id', '=',1)->get();
        // $data = Contact::get()->first();
        // $data = Contact::find(2);


        // $contact = new Contact();

        //Create record
        // $contact->first_name = 'yahya';
        // $contact->last_name = 'swalmiya';
        // $contact->email = 'yaha@yahou.com';
        // $contact->message = 'message from yahya';
        // $contact->save();

        // Create Using Mass Assignment (fillable)
        // Contact::create([
        //     'first_name' => 'Aymen',
        //     'last_name' => 'Benzeghba',
        //     'email' => 'Aymen@yahoo.com',
        //     'message' => 'this is message from aymen',
        //     'status' => 1
        // ]);

        //Update Record
        // $contact = Contact::find(6);
        // $contact->last_name = 'abdeli';
        // $contact->save();

        // Update Using Mass Assignment (fillable)
        // $contact = Contact::find(6);
        // $contact->update([
        //     'last_name' => 'Benzeghba'
        // ]);

        
        // Delete Record 
        // $contact = Contact::find(6);
        // $contact->delete();

        // dd('Created Succefull');


        $categories = Category::get();

        return view('theme.contact',compact('categories'));
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

        // $validateData = $request->validated();
        // dd($validateData);

        // $contacts =  Contact::find(13);
        // dd($contacts->category->name);

        $validateData = $request->validated();

        Contact::create($validateData);

        return back()->with('status','Your Message Has Been Sent Successfully');

    } 
}
