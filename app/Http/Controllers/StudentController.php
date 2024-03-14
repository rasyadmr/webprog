<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = [
            [
                'NIM' => '2501992305',
                'Name'=> 'Rasyad Muhammad R',
                'Prodi'=> 'Computer Science & Statistics'
            ],[
                'NIM' => '2400017492',
                'Name'=> 'Julian Siregar',
                'Prodi'=> 'Computer Science'
            ],[
                'NIM' => '22028496',
                'Name'=> 'Bambang Suhardi',
                'Prodi'=> 'Information System'
            ],[
                'NIM' => '2910283748',
                'Name'=> 'Jason Anderson',
                'Prodi'=> 'Computer Science & Mathematics'
            ],[
                'NIM' => '1940593854',
                'Name'=> 'Putri Susi Budianti',
                'Prodi'=> 'Cyber Security'
            ],
        ];
    
        $args = [
            'students' => $students
        ];

        return view('student.list', $args);
    }

    public function detail($name, $class='tanpa kelas') {
        echo '<h1>WELCOME '.Strtoupper($name).'</h1>';
        echo '<h2>FROM CLASS '.$class.'</h2>';
    }
}
