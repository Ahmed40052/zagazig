<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Instructor::create([
            'name' => 'Ahmed Ali',
            'email' => 'ahmed@gmail.com',
            'phone' => '01000000001',
            'subject' => 'Laravel',
            'salary' => 10000,
        ]);

        Instructor::create([
            'name' => 'Mohamed Hassan',
            'email' => 'mohamed@gmail.com',
            'phone' => '01000000002',
            'subject' => 'PHP',
            'salary' => 9000,
        ]);

        Instructor::create([
            'name' => 'Omar Mahmoud',
            'email' => 'omar@gmail.com',
            'phone' => '01000000003',
            'subject' => 'MySQL',
            'salary' => 8500,
        ]);
    }
}
