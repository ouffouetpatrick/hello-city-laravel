<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contacts\ContactRepository;
use App\Models\contact;

class ContactController extends Controller
{
    private  ContactRepository $contactRepository;
 
    public function __construct(ContactRepository $contactsRepository)
    {
        $this->ContactRepository = $contactsRepository;
    }
    
    public function index() 
    {
        return view('pages/contact/index'); 
    }

    public function store(Request $request )
    {
        $inputs = $request->all();
        $inputs ['nom'] = $request->input('name');
        $inputs ['email'] = $request->input('email');
        $inputs ['message'] = $request->input('message');
        $this->contactRepository->store($inputs);
        return redirect()->route('contact')->with('message','Enregistrement créee avec succes'); 
    }
}