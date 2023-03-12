<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Lecture</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>This is PHP Lecture</h1>
    <p>Its a .php file</p>
    <h2>Let's Explore Array</h2>

    <!-- <p>Variable in php</p>
    <ul>
        <li>must start with $ sign</li>
        <li>alpha-numeric and underscore (_) at start</li>
        <li>no spaces allowed</li>
        <li>should not start with number or any special character</li>
        <li>variables are case sensitive</li>
    </ul>
    <h2>Data type</h2>
    <p>String | Interger | Float | Boolean | Array</p> -->

    <?php
        // $name = "ABC";
        // echo "<h1>$name</h1>";
        // $mobile = 9876543210;
        // echo $mobile;
        // echo "<br>";
        // $num1 = 3;
        // var_dump($num1);
        // echo "<br>";
        // $num2 = 9.6;
        // var_dump($num2);
        // var_dump(is_int($num2));
        // echo "<hr>";
        // Strings Formatting 
        
        // $fname = "Web";
        // $lname = "Development";
        // echo '<h2>My name is '.$fname." ".$lname.'</h2>';
        // echo strlen("March");
        // echo "<br>";
        // echo strlen("March is good climate");
        // echo "<br>";
        // echo str_word_count("March is good climate");
        // echo "<br>";
        
        // Operators 
        
        // $n1 = 5;
        // $n2 = 8;
        // $sum = $n1 + $n2;
        // echo "The sum:\t\t".$sum;
        // echo "<br>";
        // $sum = $n2 - $n1;
        // echo "The Sub:\t\t".$sum;
        // echo "<br>";
        
        // $myv = 3;
        // echo $myv++; //4
        // echo "<br>";
        // echo ++$myv; //5
        // echo "<br>";

        // if else conditions 

        // $age = 16;

        // if ($age >= 18){
        //     echo "You are eligible for voting";
        // } else {
        //     echo "Please wait for another 2 years.";
        // }

            // Loops 

            // for loop 
            // echo "<h2>For Loop</h2>";
            // for ($c = 0; $c <=5; $c++){
            //     echo "I like PHP <br>";
            // }
            
            // // While loop 
            // echo "<h2>While Loop</h2>";
            
            // $w = 0;
            // while ($w <=5){
            //     echo "I am leaning PHP <br>";
            //     $w++;
            // }
            
            // // Do While loop 
            // echo "<h2>Do While Loop</h2>";

            // $d = 1;
            // do{
            //     echo "I will practice PHP <br>";
            //     $d++;
            // } while ($d <4);

            // $days = array("Mon","Tues","Wed","Thurs","Fri","Sat","Sun");
            //                              // 0           1              2          3        4    5       6
            // echo "<pre>";
            // print_r($days);
            // echo "</pre>";

            // foreach($days as $dayname){
            //     echo "$dayname <br>";
            // }

            // Date formatting

            // echo date("l")."<br>"; // lower letter L, gives us Day name (Sunday)
            // echo date("jS , F Y");
            // echo "<br>";
            // echo date("jS");


            // Array In PHP 

            $demo = "Sunday";
            $demo1 = 3.14;

            echo "<h3>Types of Arrays in PHP </h3>";
            echo " 1) Index Array <br>";
            echo " 2) Associate Array <br>";
            echo " 3)  Multi Dimentional Array <br>";

            // echo "<h2>Index Array</h2>";
            
            // $days = array("Mon","Tues","Wed","Thurs","Fri");
            // echo "<pre>";
            // print_r($days);
            // echo "</pre>";
            
            // to print as per the index value 
            // echo $days[3];
            
            // To add some element 
            // $days[] = "Sat";
            // echo "<pre>";
            // print_r($days);
            // echo "</pre>";
            
            // To add and element at certain index value and shift the present element to the next index value 
            
            // array_splice($days,0,0,"Sun");
            // echo "<pre>";
            // print_r($days);
            // echo "</pre>";
            
            // echo "<h2>Associate Array</h2>";

            // // Apple - It is a fruit which is very good for health
            
            // $employee = array(
            //     "Name" => "ABC",
            //     "Contact" => 12345, 
            //     "Dept" => "PHP Developer",
            //     "Location" => "Mumbai",
            //     "IsStillWorking" => True
            // );

            // echo "<pre>";
            // print_r($employee);
            // echo "</pre>";
            
            // $employee["Subject"] = "PHP";

            // echo "<pre>";
            // print_r($employee);
            // echo "</pre>";

            // echo $employee["Location"];

            // // to add a key value pair in between the current elements 

            // // below is the new key-value pair
            // $newkey = "Water";
            // $newvalue = "Required Always";
            // // targeting all the keys and values in separate variable
            // $keys = array_keys($employee);
            // $values = array_values($employee);
            // // adding the new key and value
            // array_splice($keys,3,0,$newkey);
            // array_splice($values,3,0,$newvalue);
            // // Combining both the above arrays 
            // $employee = array_combine($keys,$values);

            // echo "<pre>";
            // print_r($employee);
            // echo "</pre>";


            echo "<h2>Multi Dimentional Array</h2>";

            $employee = array(
                "Name" => "ABC",
                "Contact" => 12345, 
                "Dept" => "PHP Developer",
                "Location" => "Mumbai",
                "IsStillWorking" => True
            );
            echo "<pre>";
            print_r($employee);
            echo "</pre>";
            
            $employee = array(
                "Name" => "ABC",
                "Contact" => array("Vi" => 12345,"Jio" => 98765), 
                "Dept" => "PHP Developer",
                "Location" => "Mumbai",
                "IsStillWorking" => True
            );

            echo "<pre>";
            print_r($employee);
            echo "</pre>";











    ?>
</body>
</html>