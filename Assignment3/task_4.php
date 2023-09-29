<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $numSubjects = count($grades);
        $averageGrade = $totalGrades / $numSubjects;

        echo "Average grade for $student: $averageGrade\n";
    }
}

$studentGrades = array(
    "Student1" => array("Math" => 85, "English" => 92, "Science" => 78),
    "Student2" => array("Math" => 90, "English" => 88, "Science" => 94),
    "Student3" => array("Math" => 75, "English" => 80, "Science" => 85)
);

calculateAverageGrades($studentGrades);
?>
