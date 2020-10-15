<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect('/')->with('success', 'Pesan berhasil dikirim, tunggu hingga admin menghubungi anda');
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.show')->with('contact', $contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $contact->status = 1;

        $contact->update();

        return redirect('contacts')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('contacts')->with('success', 'Data berhasil dihapus');
    }
}
