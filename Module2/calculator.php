<!DOCTYPE html> 
<head>
<title> Zen Calculator </title>
</head>

<body>
<?php
$oL = $_POST['operandL'];
$oR = $_POST['operandR'];
$operation = $_POST['operation'];
$result = 0;
switch ($operation) {
    case "+": 
        $result = $oL + $oR;
        break;
    case "-": 
        $result = $oL - $oR;
        break;
    case "*": 
        $result = $oL * $oR;
        break;
    case "/": 
        $result = $oL / $oR;
        break;
    default: 
        echo "invalid operation";
        $result = 0;
        break;
}

?>   

<form method="post">
        
        <input type="number" name="operandL"><input type="number" name="operandR">
<p>
        <label for="add">+</label>
        <input type="radio" name="operation" id="add" value="+">
        <label for="sub">-</label>
        <input type="radio" name="operation" id="sub" value="-">
        <label for="mul">*</label>
        <input type="radio" name="operation" id="mul" value="*">
        <label for="div">/</label>
        <input type="radio" name="operation" id="div" value="/">
</p>
        <input type="submit" name="submit" value = "Submit">
    </form>

    <?php
    $foo = "1";
    echo "<p>" . $foo . "</p>";
    ?>

</body>