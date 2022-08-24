<?php

session_start();
unset($_SESSION['autoriziran']);
session_destroy();
header('location: ../index.php?izlaz');