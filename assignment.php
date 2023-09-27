<?php
//task1
print("\nTask1\n");
$text = "The quick brown fox jumps over the lazy dog.";
function modifyText($inputText) {
    $lowercaseText = strtolower($inputText);
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    return $modifiedText;
}
$modifiedText = modifyText($text);
echo $modifiedText;

//task2
print("\nTask2\n");
$numbers = range(1, 10);
function removeEvenNumbers($ary) {
    $result = [];
    foreach ($ary as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    return $result;
}
$result = removeEvenNumbers($numbers);
echo "Odd numbers \n";
print_r($result);
//task3
print("Task3\n");

$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($ary) {
    rsort($ary);
    return $ary;
}
$result = sortGradesDescending($grades);
echo "Descending Oder\n";
print_r($result);

//task4
print("Task4\n");
$studentGrades = array(
    ["Math" => 85, "English" => 92, "Science" => 78],
    ["Math" => 88, "English" => 95, "Science" => 90],
    ["Math" => 75, "English" => 80, "Science" => 88]
);
function averageGrades($gradesArray) {
    foreach ($gradesArray as $index => $grades) {
        $total = array_sum($grades);
        $average = $total / count($grades);
        $latterGrade;
        if($average>80)
        {
            $latterGrade="A+";
        }
        elseif($average>=75 && $average<80)
        {
            $latterGrade="A";
        }
        elseif($average>=70 && $average<75)
        {
            $latterGrade="A-";
        }
        elseif($average>=65 && $average<70)
        {
            $latterGrade="B+";
        }
        echo "Student " . ($index + 1) . " - Average Grade: " . $average."-> ".$latterGrade."\n";
    }
}
averageGrades($studentGrades);
//task5
print("Task5\n");
function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($chars) - 1);
        $password =$password. $chars[$randomIndex];
    }

    return $password;
}
$password = generatePassword(12);
echo "Generated Password: $password \n";
?>
