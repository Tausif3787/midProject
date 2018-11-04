<?php

if(isset($_POST["btnQuiz"]))
{
    $quizes= simplexml_load_file("Quiz.xml");
    $q = $quizes->addChild("quiz");
    $q->addChild("title",$_POST["quizTitle"]);

    file_put_contents("Quiz.xml",$quizes->asXML());
}

if(isset($_POST["btnQtn"]))
{
    $quizes= simplexml_load_file("Quiz.xml");

    foreach ($quizes->quiz as $q)
    {
        if($q->title==$_POST["quiz"])
        {
            $qtn = $q->addChild("question");
            $qtn->addChild("Name",$_POST["qtn"]);
            $qtn->addChild("Option",$_POST["opt1"]);
            $qtn->addChild("Option",$_POST["opt2"]);
            $qtn->addChild("Answer",$_POST["ans"]);
            break;
        }
    }

    file_put_contents("Quiz.xml",$quizes->asXML());
}

$quizes= simplexml_load_file("Quiz.xml");

if(isset($_POST["btnLog"]))
{
        header("Location:index.php");

}



?>

<html>
<head>
    <title>teacherHome</title>

</head>
<body>

<form action="#" method="post">
    Title : <input type="text" name="quizTitle">
    &nbsp; <input type="submit" value="Add Quiz" name="btnQuiz">
</form>

<form action="#" method="post">
    <table>
        <tr>
            <td>Question</td>
            <td>:</td>
            <td><input type="text" name="qtn"></td>
        </tr>

        <tr>
            <td>Option 1</td>
            <td>:</td>
            <td><input type="text" name="opt1"></td>
        </tr>

        <tr>
            <td>Option 2</td>
            <td>:</td>
            <td><input type="text" name="opt2"></td>
        </tr>

        <tr>
            <td>Option 3</td>
            <td>:</td>
            <td><input type="text" name="opt3"></td>
        </tr>

        <tr>
            <td>Option 4</td>
            <td>:</td>
            <td><input type="text" name="opt4"></td>
        </tr>

        <tr>
            <td>Answer</td>
            <td>:</td>
            <td><input type="text" name="ans"></td>
        </tr>

        <tr>
            <td>Quiz</td>
            <td>:</td>
            <td><select name="quiz">
                    <?php
                    foreach ($quizes->quiz as $q)
                    {
                        echo "<option value='{$q->title}'>{$q->title}</option>";
                    }
                    ?>
                </select>
                &nbsp; <input type="submit" value="Add Question" name="btnQtn"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="LogOut" name="btnLog"</td>
        </tr>
    </table>
</form>

</body>
</html>
