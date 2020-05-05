<?php
namespace App\Services;
use App\Exam;

class Exa
{
    public function get()
    {
        $exams = Exam::get();
        $examsArray[''] = 'Select an exam';
        foreach ($exams as $exam) {
            $examsArray[$exam->id] = $exam->level;
        }
        return $examsArray;
    }
}