<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'sekolah' => 'required|max:255',
            'pesan' => 'required',
        ]);

        Contact::create($validatedData);

        // Membuat URL untuk aplikasi WhatsApp dengan nomor yang dituju
        $whatsappNumber = '6285334709695'; // Nomor WhatsApp dengan kode negara Indonesia (+62)
        $whatsappMessage = urlencode('Halo, saya ingin bertanya'); // Pesan awal
        $whatsappURL = 'https://api.whatsapp.com/send?phone=' . $whatsappNumber . '&text=' . $whatsappMessage;
     
        // Redirect pengguna ke URL WhatsApp
        return redirect()->away($whatsappURL);
    }

        public function create()
    {
        return view('contact');
    }

    public function show()
    {
        $contacts = Contact::all();
        return view('admin.datakontak', ['contacts' => $contacts]);
    }

    public function destroy($id)
    {
        $contact = contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('show')->with('success', 'Data berhasil dihapus !');
    }

}