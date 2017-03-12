<?php
exec("/usr/bin/php71 /www/htdocs/vXXXXXX/NextCloud/cron.php 2>&1", $out, $result);
echo "Return Code: " .$result ."<br>";
echo "Output: " ."<br>";
echo "<pre>"; print_r($out);
?>
