<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Belajar Flutter Dasar',
                'description' => 'Mempelajari widget dasar dan navigasi di Flutter untuk project ALP.',
                'category' => 'Kuliah',
                'status' => 'on going',
                'due_date' => Carbon::now()->addDays(2),
            ],
            [
                'title' => 'Setup Database Laravel',
                'description' => 'Konfigurasi .env dan membuat migration untuk project Taskify.',
                'category' => 'Project',
                'status' => 'on going',
                'due_date' => Carbon::now()->addDay(),
            ],
            [
                'title' => 'Beli Benang Rajut',
                'description' => 'Cari benang woll rajut tebal warna teal untuk selimut baru.',
                'category' => 'Hobby',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(5),
            ],
            [
                'title' => 'Analisis Saham EMAS',
                'description' => 'Cek tren harga saham PT Merdeka Gold Resources di RTI Business.',
                'category' => 'Finance',
                'status' => 'pending',
                'due_date' => Carbon::now()->addDays(3),
            ],
            [
                'title' => 'Slicing UI',
                'description' => 'Membuat komponen Blade untuk Header, Footer, dan Sidebar.',
                'category' => 'Development',
                'status' => 'completed',
                'due_date' => Carbon::now()->subDay(),
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}