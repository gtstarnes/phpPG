<?php
$name = "Jimmy";
$otherName = &$name;
$name = "Chaz";
echo "Hello, {$name}";