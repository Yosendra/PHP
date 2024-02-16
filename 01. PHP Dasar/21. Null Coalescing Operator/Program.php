<?php
/* 

Null Coalescing Operator (??)

*/

$data = [];
$action = $data["action"] ?? "nothing";         // Null Coalescing Operator, $data["action"] is not set, so $action will take the alternative on the right
echo $action;