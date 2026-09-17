<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@alnoor.com',
            'password' => Hash::make('password'),
        ]);

        Classroom::create(['name' => 'الصف الأول أ', 'description' => 'الصف الأول الشعبة أ', 'capacity' => 30]);
        Classroom::create(['name' => 'الصف الثاني ب', 'description' => 'الصف الثاني الشعبة ب', 'capacity' => 25]);
        Classroom::create(['name' => 'الصف الثالث أ', 'description' => 'الصف الثالث الشعبة أ', 'capacity' => 35]);

        Teacher::create(['name' => 'أحمد محمد', 'email' => 'ahmed@school.com', 'phone' => '0501234567', 'specialization' => 'رياضيات']);
        Teacher::create(['name' => 'فاطمة علي', 'email' => 'fatima@school.com', 'phone' => '0507654321', 'specialization' => 'لغة عربية']);
        Teacher::create(['name' => 'خالد سعيد', 'email' => 'khaled@school.com', 'phone' => '0509876543', 'specialization' => 'علوم']);

        Student::create(['name' => 'محمد عبدالله', 'email' => 'mohammed@student.com', 'phone' => '0551234567', 'birth_date' => '2010-05-15']);
        Student::create(['name' => 'سارة أحمد', 'email' => 'sara@student.com', 'phone' => '0557654321', 'birth_date' => '2011-03-20']);
        Student::create(['name' => 'علي حسن', 'email' => 'ali@student.com', 'phone' => '0559876543', 'birth_date' => '2012-08-10']);
    }
}
