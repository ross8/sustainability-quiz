<div class="row">
    <div class="title">
        <h1>The Sustainability Quiz</h1>
    </div>
    <div class="instructions">Select the true statements. Press submit.</div>
</div>
<?php
    mysql_connect("susquiz.db.11885818.hostedresource.com", "susquiz", "Bball6627!") or die (mysql_error ());
    mysql_select_db("susquiz") or die(mysql_error());
?>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <form action="#panel" enctype="application/x-www-form-urlencoded" method="post">
            <div id="row1" class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile1" class="tile">
                        <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer1 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer1; ?>" name="answer1">
                        <input id="response1" class="input" type="text" value="0" name="response1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile2" class="tile">
                        <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer2 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer2; ?>" name="answer2">
                        <input id="response2" class="input" type="text" value="0" name="response2">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile3" class="tile">
                        <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer3 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer3; ?>" name="answer3">
                        <input id="response3" class="input" type="text" value="0" name="response3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile4" class="tile">
                        <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer4 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer4; ?>" name="answer4">
                        <input id="response4" class="input" type="text" value="0" name="response4">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile5" class="tile">
                        <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer5 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer5; ?>" name="answer5">
                        <input id="response5" class="input" type="text" value="0" name="response5">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile6" class="tile">
                        <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer6 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer6; ?>" name="answer6">
                        <input id="response6" class="input" type="text" value="0" name="response6">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile7" class="tile">
                        <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer7 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer7; ?>" name="answer7">
                        <input id="response7" class="input" type="text" value="0" name="response7">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile8" class="tile">
                        <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer8 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer8; ?>" name="answer8">
                        <input id="response8" class="input" type="text" value="0" name="response8">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="tile9" class="tile">
                         <?php
                            $id = rand(1,9);
                            $strSQL = "SELECT * FROM items WHERE id = $id";
                            $rs = mysql_query($strSQL);
                            $row = mysql_fetch_array($rs);
                            $answer9 = $row['answer'];
                            echo $row['question'];
                        ?>
                        <input class="input" type="text" value="<?php echo $answer9; ?>" name="answer9">
                        <input id="response9" class="input" type="text" value="0" name="response9">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input id="check" type="submit" name="check" value="Submit" class="btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12">
                </div>
            </div>
        </form>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div id="panel">
            <?php
            $answer1c = $_POST['answer1'];
            $answer2c = $_POST['answer2'];
            $answer3c = $_POST['answer3'];
            $answer4c = $_POST['answer4'];
            $answer5c = $_POST['answer5'];
            $answer6c = $_POST['answer6'];
            $answer7c = $_POST['answer7'];
            $answer8c = $_POST['answer8'];
            $answer9c = $_POST['answer9'];
            $response1 = $_POST['response1'];
            $response2 = $_POST['response2'];
            $response3 = $_POST['response3'];
            $response4 = $_POST['response4'];
            $response5 = $_POST['response5'];
            $response6 = $_POST['response6'];
            $response7 = $_POST['response7'];
            $response8 = $_POST['response8'];
            $response9 = $_POST['response9'];
            $score = "0";
            if ($answer1c == $response1){
                $score ++;
            }
            if ($answer2c == $response2){
                $score ++;
            }
            if ($answer3c == $response3){
                $score ++;
            }
            if ($answer4c == $response4){
                $score ++;
            }
            if ($answer5c == $response5){
                $score ++;
            }
            if ($answer6c == $response6){
                $score ++;
            }
            if ($answer7c == $response7){
                $score ++;
            }
            if ($answer8c == $response8){
                $score ++;
            }
            if ($answer9c == $response9){
                $score ++;
            }
            ?>
            <?php
            $grade="none";
            if($score == "9"){$grade = "A+";}
            if($score == "8"){$grade = "A";}
            if($score == "7"){$grade = "B";}
            if($score == "6"){$grade = "C";}
            if($score == "5"){$grade = "D";}
            if($score < "5"){$grade = "F";}
            ?>
            <div class="result-title"><h2>Results</h2></div>
            <div id="results">
                <h3>Your Score: <?php echo $score; ?> / 9</h3>
                <h3>Grade: <div class="grade"><?php echo $grade; ?></div></h3>
                <div class="message">
                    <h3>
                        <?php
                            if($grade == "A+"){echo "<div class=\"alert alert-success\">Perfect Score!</div>";}
                            if($grade == "A"){echo "<div class=\"alert alert-success\">Awesome Job! You Only Missed One Question</div>";}
                            if($grade == "B"){echo "<div class=\"alert alert-info\">Good Work.</div>";}
                            if($grade == "C"){echo "<div class=\"alert alert-warning\">Not Bad.</div>";}
                            if($grade == "D"){echo "<div class=\"alert alert-warning\">Not Your Best Work.</div>";}
                            if($grade == "F"){echo "<div class=\"alert alert-danger\">Try Again, You Can Do Better.</div>";}
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>