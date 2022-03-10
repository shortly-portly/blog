<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {

        request()->validate([
            'email' => ['required', 'email'],
        ]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception$e) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'This email could not be added',
            ]);
        }

        return redirect('/')->with('success', 'You are now signed up for our newsletter.');
    }
}
