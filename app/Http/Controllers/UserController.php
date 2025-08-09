<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public  $students = [   
        [
            'id' => 1,
            'username' => 'andi_tkj',
            'nama' => 'Andi Pratama',
            'kelas' => '12 TKJ 1',
            'hobi' => 'Futsal',
            'foto' => 'https://i.pinimg.com/736x/8d/12/11/8d12112d5bc2b689067a26a4bb921af9.jpg',
            'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
        ],
        [
            'id' => 2,
            'username' => 'bella_code',
            'nama' => 'Bella Arumsari',
            'kelas' => '12 TKJ 1',
            'hobi' => 'Ngoding',
            'foto' => 'https://i.pinimg.com/736x/4b/0b/12/4b0b1220059c739fba30830c23d651a8.jpg',
            'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
        ],
        [
            'id' => 3,
            'username' => 'cika_dance',
            'nama' => 'Cika Ramadhani',
            'kelas' => '12 TKJ 1',
            'hobi' => 'Menari',
            'foto' => 'https://i.pinimg.com/736x/8b/e7/1b/8be71bcf262253e27abe24c3d530c0ac.jpg',
            'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
        ],
        [
            'id' => 4,
            'username' => 'dani_design',
            'nama' => 'Dani Saputra',
            'kelas' => '12 TKJ 1',
            'hobi' => 'Desain Grafis',
            'foto' => 'https://i.pinimg.com/736x/a6/5e/11/a65e116142907b75e10ccc46b6a066cd.jpg',
            'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
        ]
    ];

    public function index(){


        return view("students.index", [
            "students" => $this->students,
        ]);
    }
    
    public function show($id){
    $result = array_filter($this->students, function($item) use ($id){
        return $item["id"] == $id;
    });
    $student = reset($result);
        return view("students.show", [
            "students"=> $this->students,
            "student"=> $student,
            "id" => $id,
        ]);
    }
}
