<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function Show(){
        // show all the data of Contact and Student model and 'student' is came from the function of Contact.php model function
        $contacts = Contact::with('student')->get();
        return $contacts;
    }
}
