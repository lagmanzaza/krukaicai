<?php

class student_view
{
    public function __construct()
    {
    }
    public function listexam(array $data)
    {
        for ($i = 0; $i < count($data); ++$i) {
            // view
        }
    }
    public function show_score(string $score)
    {
        echo $score;
    }
}
