<?php 
$access = new PDO("mysql:host=localhost;dbname=projeto_academia", "root", "");
$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$access->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);