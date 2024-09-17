<?php
$studentsGrades = [
    ['name' => 'Alice', 'grade' => 85],
    ['name' => 'Bob', 'grade' => 92],
    ['name' => 'Charlie', 'grade' => 78],
    ['name' => 'David', 'grade' => 64],
    ['name' => 'Eva', 'grade' => 90],
];

$totalGrades = 0;
$numStudents = count($studentsGrades);

foreach ($studentsGrades as $student) {
    $totalGrades += $student['grade'];
}

$averageGrade = $totalGrades / $numStudents;

echo "Class average grade: $averageGrade<br>";
echo "Students who scored above the average:<br>";

foreach ($studentsGrades as $student) {
    if ($student['grade'] > $averageGrade) {
        echo "Name: {$student['name']}, Grade: {$student['grade']}<br>";
    }
}
