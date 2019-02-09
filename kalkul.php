<?php
session_start();
////echo "$_SESSION";
//var_dump($_SESSION);

?>
<form action='' method='post'>
Сумма: <input type='text' name='money' required><br>
Процент: <input type='text' name='percent' required><br>
Кол-во дней: <input type='text' name='days' required><br>
<input type='submit' value='Расчитать'><br><br>
</form>
Предыдущий вклад:
<?php

if (isset($_SESSION["total"])) {
	echo $_SESSION["total"];
}


?>
<?php

function FormulaRas4eta($money, $percent, $days) {
   $total = $money*($percent*$days); return $total;
}
if (isset($_POST['money'])) {
   $total = FormulaRas4eta($_POST['money'], $_POST['percent'], $_POST['days']);
   $_SESSION["total"]="$total";
   echo "<b>Итого</b>: $total рублей";
}
?>
