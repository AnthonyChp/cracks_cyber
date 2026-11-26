<?php
    Auth::getInstance()->logoff();
    header('Location:index.php');
    exit;
