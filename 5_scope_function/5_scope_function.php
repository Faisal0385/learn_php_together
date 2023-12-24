<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    function registerStudent()
    {
        echo "Student Mizan with ID 1234 registered for 2024."."<br>";
    }

    function enrollCourse()
    {
        echo "Student with ID 1234 enrolled in Class 7."."<br>";
    }

    function assignTeacher()
    {
        echo "Professor Faisal assigned to teach PHP."."<br>";
    }

    function StudentReportCard()
    {
        echo "Report for student with ID 1234."."<br>";
    }

    function courseList()
    {
        $courses = "Mathematics, Physics, Computer Science, Literature"."<br>";
        echo $courses;
    }

    registerStudent();
    enrollCourse();
    assignTeacher();
    StudentReportCard();
    courseList();


    ?>
</body>

</html>