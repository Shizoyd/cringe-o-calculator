<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form  method="post" class="form">
  <div class="form-example">
    <label for="firstNumber"></label>
    <input type="number" name="firstNumber" placeholder=123 id="firstNumber" required />
  </div>
  <div class="form-example">
    <label for="secondNumber"></label>
    <input type="number" name="secondNumber" placeholder= 123 id="secondNumber" required />
  </div>
  <div class="formButtons">
    <input name="summ" type="submit" value="Summ" />
    <input name="sub" type="submit" value="Sub" />
    <input name="mult" type="submit" value="Mult" />
    <input name="div" type="submit" value="Div" />  
    <input name="pow" type="submit" value="Pow" />  
  </div>
  <div>
    
  <input name="fuck" type="submit" value="Fuck" />
  <input name="sqrt" type="submit" value="Sqrt" />
  </div>
</form>
<?php
    
        if(isset($_POST['summ'])) {
            echo $_POST['firstNumber'] + $_POST['secondNumber'];
        }
        if(isset($_POST['sub'])) {
            echo $_POST['firstNumber'] - $_POST['secondNumber'];
        }
        if(isset($_POST['mult'])) {
            echo $_POST['firstNumber'] * $_POST['secondNumber'];
        }
        if(isset($_POST['div'])) {
            echo $_POST['firstNumber'] / $_POST['secondNumber'];
        }
        if(isset($_POST['pow'])) {
            echo $_POST['firstNumber'] ** $_POST['secondNumber'];
        }
        if(isset($_POST['sqrt'])) {
            echo sqrt($_POST['firstNumber']). "\n" . sqrt($_POST['secondNumber']);
        }
        if(isset($_POST['fuck'])) {
            $min;
            $max;
            if ($_POST['firstNumber'] > $_POST['secondNumber'] ){
                $min = $_POST['secondNumber'];
                $max = $_POST['firstNumber'];
                
            }
            else {
                $min = floor($_POST['firstNumber']);
                $max =floor( $_POST['secondNumber']);
            } 
            $fuck = 1;
            if ($min == $max){
                $fuck =$max;
            }
            if ($max >= 0 && $min >= 0){
                for ($min; $min <= $max; $min++){
                    $fuck *=$min;
                }
                echo $fuck;
            }
            else echo "Something is negative!";
        }
    ?>
</body>
</html>