<?php

session_start();
session_destroy();

header("location:/dentoimagen/index.php?action=inicio");
