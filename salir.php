<?php
session_start();
session_destroy();
header("Location:index.php?seccion=1");
exit(0);
?>