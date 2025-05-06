<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name','gender','email','tel_1','tel_2','tel_3','address','building','category_id','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['last_name','first_name','gender','email','tel','address','building','category_id','detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
