<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{

    public function index() {
        $foods = [
            [
                'title' => 'Bubur Ayam Pasundan',
                'type' => 'Sarapan',
                'time'=> '2024-03-19 15:20:00',
                'description'=> 'Bubur adalah salah satu makanan yang sangat serbaguna dan umum dijumpai di berbagai belahan dunia. Beras menjadi bahan dasarnya, yang dimasak bersama air hingga mendidih dan menghasilkan tekstur yang lembut dan kental. Bubur sering dianggap sebagai makanan yang cocok untuk semua jenis cuaca dan kondisi, dari pagi hari yang dingin hingga malam yang hangat. Berbagai variasi bubur dapat ditemukan di berbagai budaya, dengan beragam tambahan bahan seperti daging, sayuran, telur, atau rempah-rempah, yang memberikan rasa dan aroma yang khas.',
                'image_url'=> './images/bubur.jpg'
            ],[
                'title' => 'Bakmie Effata',
                'type' => 'Makan Siang',
                'time'=> '2024-03-20 16:40:30',
                'description'=> 'Bakmie, atau mie pangsit, merupakan salah satu makanan populer yang berasal dari Asia, terutama dikenal di Indonesia, Tiongkok, dan negara-negara Asia Tenggara lainnya. Makanan ini terdiri dari mie yang dibuat dari campuran tepung terigu, telur, dan air, kemudian direbus hingga matang. Bakmie sering disajikan dengan berbagai jenis bahan tambahan seperti daging ayam, daging sapi, udang, sayuran, dan telur rebus.',
                'image_url'=> './images/bakmie.jpg'
            ],[
                'title' => 'Sate Ayam Blora',
                'type' => 'Makan Malam',
                'time'=> '2024-03-20 20:00:00',
                'description'=> 'Sate ayam adalah salah satu hidangan yang sangat populer di Indonesia dan di banyak negara Asia Tenggara lainnya. Hidangan ini terdiri dari potongan daging ayam yang ditusuk menggunakan tusukan bambu atau sate, kemudian dipanggang atau dibakar di atas bara api atau gril. Sebelum dipanggang, potongan daging ayam tersebut biasanya direndam dalam bumbu rempah-rempah khas, yang memberikan cita rasa yang kaya dan aromatik.',
                'image_url'=> './images/sate-ayam.jpg'
            ],[
                'title' => 'Mixue Boba Ice Cream',
                'type' => 'Dessert',
                'time'=> '2024-03-20 23:00:50',
                'description'=> 'Ice cream Boba Mixue adalah inovasi yang menggabungkan dua camilan populer, yaitu es krim dan boba (bubble tea), untuk menciptakan pengalaman rasa yang unik dan menyegarkan. Hidangan ini biasanya terdiri dari es krim yang lembut dan krimi, disajikan dengan boba, atau bola-bola tapioka kenyal, yang terkenal dengan rasa manis dan teksturnya yang unik. Campuran boba dan es krim menciptakan kontras yang menarik antara rasa kremi es krim dan kekenyalan boba, memberikan sensasi rasa yang menyenangkan di setiap suapan.',
                'image_url'=> './images/icecream-boba.jpg'
            ]
        ];
    
        $args = [
            'foods' => $foods
        ];

        return view('main', $args);
    }
}
