<!DOCTYPE html>
<html>
<head>
    <title>My firstPHP page</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <?php
        #Simple HEllo World page
        echo "Hello world! <BR>";

        #Tenary operator Condition ? Task A : Task B
        $a = (59 > 10? "Correct" : "Wrong");
        echo $a; 
        echo "<BR>";

        #switch statement 
        $b= 20;
        switch ($b) {
            case 5:
                echo "Not right";
                break;
            case 22:
                echo "6 + 14 = 20";
            case 5:
                echo "Thats cool";
                break;
            default:
                echo "try again";
        }

        #For loop . for (initial value; test conditon; modification to test)
        for ($age = 29; $age < 35; ++$age){ 
            echo " Hello to my new age ";
        }
        
       for ($c = 1; $c < 5; ++$c){
        echo 'The value of $c is '.$c.'<BR>';
        }

        #foreach is use on array
        /*$num = array(2,4,1,2,3,4);
        foreach($num as $newnum) {
            #echo "this has been changed to " . $newnum ."<BR>";
            #echo $newnum;
            print_r($newnum);
        }
        echo "<BR>";

        $name = array("jojo" => 23, "kwame" => 34, "sam" => 21);
        foreach ($name as $nom => $key) {
           
            $increase = $key + 5;
            echo "$nom is now $increase years old" . "<BR>";
        } 
        */
        #while loop
        /*$check = 1;
       
        while($check < 5) {
            
            echo 'The value of $check is ' . $check . '<BR>';
            ++$check;
        }
        */
        # do while loop
        /*do {
            echo '$d can now take the place of ' . $check . '<BR>';
        } while($check < 0);
        echo '<BR>';
        */
        # break
        /*
        for ($amount = 100; $amount > 20; ++$amount) {
            echo $amount . '<BR>';
            if ($amount > 120)
            break; 
            echo "It is over";
        }
        */
            #continue
            for ($numb = 2; $numb <10; ++$numb) {
                echo $numb;
                if ($numb == 10) 
                    continue;
                    echo "Begin new code and stop the loop at that point";
                
            }
            echo '<BR>';
            #Function
            function greetings ($name, $message = 'Good day') {
                echo "Hello $name, $message";
            }
            greetings('Linus');
            echo '<BR>';
            greetings('Linus', 'will get jpb by end of this month');
            echo '<BR>';

           /* function cal($an, $b) {
                echo "$an + $b";
            }

            cal(15, 10);
            echo '<BR>';
            cal(15);
            echo '<BR>';
            */
            
            function sumnum($num1, $num2, $num3) {
                echo "Completed";
                return $num1 + $num2 + $num3;
                
            }

            sumnum (12, 2, 4);
            echo '<BR>';

            var_dump(isset($a));


        
    ?>
</bod>
</html>