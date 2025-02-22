<?php


use Illuminate\Support\Facades\Route;

Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    // Проверяем корректность параметров
    if (preg_match('/^\d{4}$/', $year) && preg_match('/^(0[1-9]|1[0-2])$/', $month) && preg_match('/^(0[1-9]|[12][0-9]|3[01])$/', $day)) {
        // Проверка на валидную дату
        $dateString = "{$year}-{$month}-{$day}";
        $date = DateTime::createFromFormat('Y-m-d', $dateString);

        // Проверяем, действительно ли дата совпадает с тем, что мы создали
        if ($date && $date->format('Y-m-d') === $dateString) {
            // Получаем день недели
            $dayOfWeek = $date->format('l'); // Формат 'l' возвращает полное имя дня недели
            return "День недели для {$dateString} - {$dayOfWeek}.";
        } else {
            return "Неверная дата.";
        }
    }

    return "Неверный формат параметров. Используйте: /{year}/{month}/{day}, где год - 4 цифры, месяц - 01 до 12, день - 01 до 31.";
})->where([
    'year' => '\d{4}', 
    'month' => '0[1-9]|1[0-2]', 
    'day' => '0[1-9]|[12][0-9]|3[01]'
]);