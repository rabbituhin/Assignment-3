<?php
$studentGrades = [
    ['Math' => 85, 'English' => 92, 'Science' => 78],
    ['Math' => 80, 'English' => 85, 'Science' => 70],
    ['Math' => 75, 'English' => 65, 'Science' => 65]
];
function calculateAndPrintAverages($grades) {
    foreach ($grades as $studentIndex => $student) {
        $total = 0;
        $numSubjects = count($student);
    
        foreach ($student as $subject => $grade) {
            $total += $grade;
        }
        
        $average = $total / $numSubjects;
        if($average>80){
            echo "Student " . ($studentIndex + 1) . " Average Grade: A+ \n"; 
        }elseif($average>70){
            echo "Student " . ($studentIndex + 1) . " Average Grade: A \n"; 
        }else{
            echo "Student " . ($studentIndex + 1) . " Average Grade: B\n"; 
        }
        
       
    }
}
calculateAndPrintAverages($studentGrades);