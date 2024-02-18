<?php 

    $cgpa = (float)readline("Please enter your cgpa: ");
    

    function getStudentGrade($cgpa) {
        if ($cgpa >= 4.0) {
            echo "Excellent(A)";
        } 
        elseif ($cgpa <= 3.5 && $cgpa < 4.0) {
            echo "Very Good(B+)";
        } 
        elseif ($cgpa <= 3.0 && $cgpa < 3.5) {
            echo "Good(B)";
        } 
        elseif ($cgpa <= 2.5 && $cgpa < 3.0) {
            echo "Fair(C+)";
        } 
        elseif ($cgpa <= 2.0 && $cgpa < 2.5) {
            echo "Pass(C)";
        } else {
            echo "Fail(F)";
        }
    }

    $studentGrade = getStudentGrade($cgpa);
    echo "Student CGPA: $cgpa, Student Grade: $studentGrade";

?>
