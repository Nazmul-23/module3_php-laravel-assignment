<?php
$studentGrades = array(
    array("Math" => 80, "English" => 90, "Science" => 78),
    array("Math" => 98, "English" => 88, "Science" => 93),
    array("Math" => 78, "English" => 85, "Science" => 81)
);


function calculateAverageGrades($grades) {
    foreach ($grades as $key1 => $value1) {
        $totalGrades = 0;
        $numSubjects = 0;

        foreach ($value1 as $subject => $grade) {
            $totalGrades += $grade;
            $numSubjects++;
        }

    
        $averageGrade = $totalGrades / $numSubjects;


        echo "Student " . ($key1 + 1) . " - Average Grade: " . $averageGrade . "\n";
    }
}

calculateAverageGrades($studentGrades);
