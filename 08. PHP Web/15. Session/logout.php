<?php

session_start();
session_destroy();  # menghapus semua session

header("Location: /");
exit();