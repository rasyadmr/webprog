<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'name' => 'Harry Potter',
                'photo' => 'harry.jpg',
                'description' => 'Seri Harry Potter, yang ditulis oleh J.K. Rowling, adalah salah satu yang paling terkenal dalam genre fantasi. Ceritanya mengikuti petualangan seorang anak laki-laki bernama Harry Potter, yang mengetahui pada usia sebelas tahun bahwa dia sebenarnya adalah seorang penyihir. Dia kemudian pergi ke Sekolah Sihir Hogwarts, di mana dia belajar sihir, bertemu teman-teman baru, dan menghadapi tantangan yang berbahaya.',
                'publish_date' => '1997-06-26',
                'genre_id' => 2
            ],[
                'name' => 'Wizard Of Oz',
                    'photo' => 'wizard.jpeg',
                    'description' => '"The Wonderful Wizard of Oz" adalah novel klasik karya L. Frank Baum yang pertama kali diterbitkan pada tahun 1900. Ceritanya mengisahkan petualangan seorang gadis kecil bernama Dorothy Gale, yang tinggal di sebuah peternakan di Kansas. Ketika rumahnya terangkat oleh badai dan terbawa ke negeri Oz, Dorothy berpetualang dalam perjalanan yang fantastis untuk kembali pulang.',
                'publish_date' => '1900-05-17',
                'genre_id' => 2
            ],[
                'name' => 'Maze Runner',
                'photo' => 'maze.jpg',
                'description' => '"The Maze Runner" adalah novel pertama dalam seri yang ditulis oleh James Dashner, diterbitkan pada tahun 2009. Cerita ini berpusat di sekitar seorang remaja bernama Thomas, yang tiba-tiba terbangun di tengah-tengah sebuah labirin yang rumit dan mematikan, tanpa ingatan tentang masa lalunya kecuali namanya sendiri.',
                'publish_date' => '2009-10-06',
                'genre_id' => 7
            ],[
                'name' => 'Naruto Shippuden',
                'photo' => 'naruto.jpg',
                'description' => '"Naruto Shippuden" adalah seri manga yang ditulis dan diilustrasikan oleh Masashi Kishimoto. Ini adalah kelanjutan dari seri "Naruto" yang sangat populer. "Naruto Shippuden" fokus pada petualangan Naruto Uzumaki, seorang ninja muda yang bercita-cita menjadi Hokage, pemimpin tertinggi desa ninja Konohagakure.',
                'publish_date' => '2007-02-15',
                'genre_id' => 1
            ],
        ];

        DB::table('books')->insert($books);
    }
}
