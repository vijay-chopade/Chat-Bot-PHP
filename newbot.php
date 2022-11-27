<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="newbot.css"/>
    <title>Document</title>
</head>
<body>
    <div class='wrapper'>
        <div id="dialogue"></div>
        <?php
                // echo("<h1 id='h1'>Hello $</h1>");
                $search_url="https://www.google.com/search?q=";
                $input = $_POST["input1"];
                $a= strtolower($input);
                $b= "<b>Bot :      </b>";
                $var=($search_url.$input);
                // echo("<span id='bot-row'><span id='user'>$a<b> : You</b><br></span></span>");
                echo("<span id='bot-row'><span id='user'><b>You : </b>$input<br></span></span>");
                // echo("<br><p class='px'>$a: You");
                $x1=array("hello","hey","hi");
                $x2=array("thanks","nice to meet you","great","cool","osm","ok","okey");
                $v2=array("by","bye");
                $x3=array("who are you","tell me about you","tell me about you somthing",);
                $x4=array("what can you do","what can you do for me","what are you doing","what is your work","what's your work",);
                
                if(in_array($a, $x1)){      echo(ucfirst(   "<span id='usr-row'><span name='bot-row' id='bot'>$b Hello, how can i help you?</span></span>" ));}
                elseif(in_array($a, $x2)){  echo(ucfirst(   "<span id='usr-row'><span name='bot-row' id='bot'>$b Thanks & nice to meet you.</span></span>" ));}
                elseif(in_array($a,$v2)){   echo(ucfirst(   "<span id='usr-row'><span name='bot-row' id='bot'>$b Bye</span></span>"    ));}//CAN I GET YOU ANYTHING ELSE?
                elseif(in_array($a,$x3)){   echo(ucfirst(   "<span id='usr-row'><span name='bot-row' id='bot'>$b I am a bot </span></span>"));}
                elseif(in_array($a,$x4)){   echo(ucfirst(   "<span id='usr-row'><span name='bot-row' id='bot'>$b I'm answer your quations </span></span>"    ));}
                else{
                    if(isset($_POST['submit'])){
                        // echo("<span id='usr-row'><span name='bot-row' id='bot'>$b [Sorry i can't found it pls,<br>Check on click] <input type='submit' id='demo' onclick='myFunction()' value='Ans'></span></span>");
                        // echo("<a href='$search_url$input' target='_blank' id='demo' onclick='myFunction()'>Ans</a>");
                        header('location: '.$search_url.$input);
                        // exit;
                    }
                }            
                ?>
                <script>
                    function myFunction1() {
                        var txt;
                        if (confirm("You redirect to Google.")) {
                            window.open("<?php echo $var ;?>");
                        } 
                        // else {
                        //     txt = "You pressed Cancel!";
                        // }
                        document.getElementById("demo");
                    }
                    function myFunction() {
                        var txt;
                        if (confirm("You redirect to Google.")) {
                            window.open("<?php echo $var ;?>");
                        } 
                        // else {
                        //     txt = "You pressed Cancel!";
                        // }
                        document.getElementById("demo");
                    }
                </script>
                <form method="POST"><!-- target="_blank"  -->
                    <div class="text-box">
                        <input type="text" name="input1" id="message" placeholder="Search..." autofocus required>
                        <input type="submit" class="send-button" name='submit' value=">">
                        <!-- Go</button> -->
                    </div>
            </form>
    </div>
    
</body>
</html>
