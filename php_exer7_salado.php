<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Grade</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f1f1f1;
            font-family: sans-serif;
        }
        main {
            padding: 30px;
            border-radius: 2px;
            background-color: #fff;
        }
        h1 {
            margin-bottom: 10px;
            line-height: 1;
            text-transform: uppercase;
            font-size: 28px;
            text-align: center;
        }
        h2 {
            margin-bottom: 30px;
            line-height: 1;
            font-size: 20px;
            text-align: center;
        }
        .block {
            margin: 0 auto 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            padding: 8px;
            width: 100%;
        }
        button {
            padding: 8px 16px;
            background-color: #607d8b;
            color: #fff;
            outline: 0;
            border: 0;
            border-radius: 3px;
            cursor: pointer;
            width: 150px;
            width: 100%;
            margin-bottom: 20px;
        }
        button + div {
            font-size: 18px;
            text-align: center;
            background-color: #ffeb3b;
            padding: 10px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <main class="container">
        <h1>Midterm Grade</h1>
        <form action="" method="post">
            <div class="block">
                <label for="Quiz">Quiz:</label>
                <input type="text"  name="Quiz">
            </div>
            <div class="block">
                <label for="Project">Project:</label>
                <input type="text" name="Project">
            </div>
            <div class="block">
                <label for="Midterm Exam">Midterm Exam:</label>
                <input type="text" name="MidtermExam">
            </div>
            <div class="block">
                <label for="Exercise">Exercise:</label>
                <input type="text"  name="Exercise">
            </div>
            <button type="submit" name="submit">Submit</button>
            <?php
                if(isset($_POST['submit']))
{
                $quiz=$_POST['Quiz'];
                $project=$_POST['Project']; 
                $midterexam=$_POST['MidtermExam']; 
                $exercise=$_POST['Exercise']; 

                $MidtermGrade = ($quiz*.2)+($project*.3)+($midterexam*.2)+($exercise*.3);
                if($MidtermGrade>=1.0&&$MidtermGrade<=1.5) {
                    $remark="Perfect";
                }
                
                elseif($MidtermGrade>=1.6&&$MidtermGrade<=2.0) {
                    $remark="Great";
                }
                
                elseif($MidtermGrade>=2.1&&$MidtermGrade<=2.5) {
                    $remark="Good";
                }

                elseif($MidtermGrade>=2.6&&$MidtermGrade<=3.0) {
                    $remark="Try harder!";
                }
                
                else{
                    $remark="Better luck next time!";
                }
        
                echo "<br>";
                echo "<font size=4><center>Midterm Grade: ". $MidtermGrade ."</center><br>"; 
                echo "<font size=4><center>Remarks: ".$remark."</center>"; 
                }
            ?>
                        
        </form>
    </main>
</body>
</html>