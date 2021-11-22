
<?php

echo <<<'INPUT'
<form>
行：<input type="text" name="row">
列：<input type="text" name="col">
<button>提交</button>
INPUT;



isset($_GET['row']) ? $row = $_GET['row'] : $row = '';

isset($_GET['col'])?$col = $_GET['col']:$col = '';

echo '<table border="1" cellpadding="50" cellspacing="10" width="300">';
for ($i=0;$i<$row;$i++){
   echo '<tr>';
   for ($j=0;$j<$col;$j++){
       echo '<td>'.($i*$col+$j).'</td>';
   }
   echo '</tr>';
}
echo '</table>';
?>
