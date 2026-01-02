<?php

$name = "Jimmy";
$point = &$name;
$name = "Timmy";

echo "Hello {$point}";