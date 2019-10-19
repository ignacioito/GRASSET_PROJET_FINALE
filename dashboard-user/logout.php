<?php
session_start();
session_destroy();
header('Location: ../website/index.php');
exit();