<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name','last_name','gender','email','address','building','detail']);
        $tel = $request->tel1 . ' ' . $request->tel2 . ' ' . $request->tel3;
        $contact = [
            'tel' => $tel,
        ];
        
        return view('confirm', compact('contact'));
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender','email','tel','address','building','detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
