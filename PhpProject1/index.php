<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('Student.php');

            $students = array();
            
            $first = new Student();
            $second = new Student();
            $third = new Student();

            // Creates a good student named John Doe
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            // Creates a great student named Albert Einstein
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            // Creates a new evolution of humanity
            // in student form named Connor Goudie
            $third->surname = "Connor";
            $third->first_name = "Goudie";
            $third->add_email('home','connorgoudie@live.com');
            $third->add_grade(100);
            $third->add_grade(99);
            $third->add_grade(100.0000000001);
            $students['c789'] = $third;

            ksort($students);
            
            //loops through the student array and prints each one
            foreach($students as $student) {
                echo $student->toString();
                echo "\n\n";
            }
        ?>
    </body>
</html>
