<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            ['name' => 'Дима', 'birthday' => '1988-03-25', 'position' => 'дизайнер', 'salary' => 400],
            ['name' => 'Петя', 'birthday' => '1989-03-26', 'position' => 'дизайнер', 'salary' => 500],
            ['name' => 'Вася', 'birthday' => '1990-05-26', 'position' => 'верстальщик', 'salary' => 500],
            ['name' => 'Коля', 'birthday' => '1990-03-25', 'position' => 'верстальщик', 'salary' => 1000],
            ['name' => 'Иван', 'birthday' => '1991-05-27', 'position' => 'программист', 'salary' => 500],
            ['name' => 'Кирилл', 'birthday' => '1990-06-27', 'position' => 'программист', 'salary' => 1000],
        ]);
    }
}
