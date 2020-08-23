
<?php
//setcookie("name","bob");
setcookie("name","bob",time()-100);
echo $_COOKIE["name"];