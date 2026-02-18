<?php

namespace App\Http\Controllers;

class testController extends Controller
{
    public function index()
    {
            return view('about', [
                'user' => [
                    'name' => 'Test',
                    'role' => 'admin'
                ],
                'skills' => ['PHP', 'Laravel', 'Blade']
            ]);



    }


}
