<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactanosMailble;
use App\Mail\ContactanosMailble as MailContactanosMailble;

class ContactanosController extends Controller
{
    public function index()
    {
        return view("contactanos.index");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required",
            "correo" => "required",
            "mensaje" => "required"
        ]);

        Mail::to("alexanderovelar4@gmail.com")->send(new MailContactanosMailble($request->all()));

        session()->flash("info", "Mensaje enviado");

        return redirect()->route("contactanos.index");
    }
}
