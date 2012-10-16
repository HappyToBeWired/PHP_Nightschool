<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo '<h1>HoE 2</h1>';
            echo '<h2>using Line break to output on sepearate lines</h2>';
            echo "This is how to insert a<br />line break";
            echo " to help with formatting<br />";
            echo "your page on the screen";
            echo '<h2>using Line break amd new line to brak snd concatonate</h2>';
            echo "This is how to insert a<br />\nline break";
            echo " to help with formatting<br />\n";
            echo "your page on the screen";
            echo '<p></p>';
            echo "mary had a little\n line";
            echo ' cough and shared it with everybody';
            echo '<h2>Variables</h2>';
            echo '$txt = \'hello\' & $num = 1';
            $txt= 'Hello';
            $num = 1;
            echo '<h3>Output</h3>';
            echo 'Point $num : $txt "no escape used here for double quotes, I say!"';
            echo '<br />';
            echo "Point $num : $txt";
            echo '<h2>Variables</h2>';
            $myage = 25;
            $yourage = $myage;
            echo '$myage = 25   $yourage = $myage ';
            echo '<h3>Output</h3>';
            echo $yourage  .'  '. $myage;
            echo '<h2>Variables</h2>';
            $myage = 30;
            echo ' $myage = 30;';
            echo '<h2>Output</h2>';
            echo $yourage  .'  '. $myage. '  Note the first var is yourage and was not updated <br/ > this is a very sequencuil process';
            echo '<h1>HoE 3</h1>';
            echo '<h2>Variables</h2>';
            echo '$a = 8 <br />';
            echo '$b = 14 <br />';
            $a = 8;
            $b = 14;
            echo $a . '<br />';
            echo $b . '<br />';
            echo $a + $b. '<br />';
            echo $a - $b. '<br />';
            echo ($b - $a) * $a . '<br />';
            echo $b % $a . '<br />';
            echo $b / $a . '<br />';
            $c = 'This ';
            $d = 'class ';
            $a += $b;
            echo $a . '<br />';
            $a -= $b;
            echo $a . '<br />';
            $a = $a.$b;
            echo $a . 'concatenate the values<br />';
            $c .= $d;
            echo $c . '<br />';
            echo '<h2>Comparison operators</h2>';
            $a = 3;
            $b = 4;
            $c = '4';
            $d = 'My String';
            $e = 'Not My String';
            echo '$a != $b<br />'; 
            echo  $a != $b ;
            echo '<br />$a == $b';
            echo  $a == $b;
            echo '<br />';
            echo '$b==$c'.'<br />';
            echo $b==$c;
            echo'<br />';
            echo '$b===$c' .'<br />';
            echo $b===$c .'<br />';
            $true_or_false = ($a < $b ? true: false);
            echo '<p>Interesting boolean 1 not same as value 1</p>'; 
            if ($true_or_false == 1)
                {echo "TRUE";
                }
                else     
                {
                echo "FALSE";
                }
            
            echo '<p></p>';    
            $true_or_false = ($e < $d ? true: false);
            if ($true_or_false === 1)
                {echo "TRUE";
                }
                else     
                {
                echo "FALSE";
                }
     
           echo '<p>Reads 4 and \'4\' the same?</p>';    
           echo $true_or_false = (($c - $b) != 0 ? true: false);
           if ($true_or_false == 1)
               {echo "TRUE";
               }
               else     
               {
               echo "FALSE";
               } 
               
           echo '<p>Reads 4 and \'4\' the same?</p>';    
           echo $true_or_false = (($c - $b) == 0 ? true: false);
           if ($true_or_false == 1)
               {echo "TRUE";
               }
               else     
               {
               echo "FALSE";
               }  
           $f = 4;   
           echo '<p>Reads 4 and \'4\' the same?</p>';    
           echo $true_or_false = (($c - $f) == 0 ? true: false);
           if ($true_or_false == 1)
               {echo "TRUE";
               }
               else     
               {
               echo "FALSE";
               }  
               
            echo '<p>Inc rement and decrement</p>';     
            $a = 5;
            $b = 6;
            echo 'Pre-increment $a: '.++$a.'<br />';
            echo 'Post-increment $b: '.$b++.'<br />';
            echo '$a is incremnted for this action b is incremented for the next action<br />';
            echo "Check current values, \$a = $a and \$b = $b <br />";   
            echo '<h2>Logical operators</h2>'; 
            $a = 5;
            $b = 8;
            $c = 10;
            echo '($a < $b) AND ($c > $a)';
            echo ($a < $b) AND ($c > $a);
            echo '<br />';
            echo '($c > $b) XOR ($b > $a)';
            echo ($c > $b) XOR ($b > $a);
            echo '<br />';
            echo '!($a > $c)';
            echo !($a > $c);
            echo '<br />';
            echo '!($a < $c)';
            echo !($a < $c);
            echo '<br />';
            echo '($c > $a) || ($a > $b)';
            echo ($c > $a) || ($a > $b);
            echo '<br />';
            $a = 100;
            $b = 101;
            
            if ( $a > $b) {
                echo 'a is bigger then b';
            } elseif ( $a < $b) {
               echo 'b is bigger then a';
            } else {
                echo 'a and b are the same';
                }
                
            $name_1 = 'Fred';
            $name_2 = 'Stuart';
            $list = 'George';
            
                
            switch ($list) {
                case ($name_1):
                    echo"Come in $name_1";
                    break;
                case ($name_2):
                    echo"Your barred $name_2";
                    break;
                default:
                    echo'Your name please';
                }    
                
             
            
            ?>
    </body>
</html>
