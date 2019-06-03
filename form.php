<?php

$parameters = ['operand1', 'operator', 'operand2'];

foreach ($parameters as $parameter) {
    if (empty($_POST[$parameter])) {
        die('element not found');
    }
}

$operand1 = floatval($_POST['operand1']);
$operand2 = floatval($_POST['operand2']);
$operator = $_POST['operator'];

switch ($operator) {
    case '+':
        $result = $operand1 + $operand2;
        break;
    case '-':
        $result = $operand1 - $operand2;
        break;
    case '*':
        $result = $operand1 * $operand2;
        break;
    case '/':
        $result = $operand1 / $operand2;
        break;
    default:
        die('wrong operator: '. $operator);
}

echo $operand1 . ' ' . $operator . ' ' . $operand2 . ' = ' . $result;
