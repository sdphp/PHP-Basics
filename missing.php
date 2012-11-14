<?php

echo "INCLUDING A MISSING FILE:\n";
echo "-------------------------\n";
include 'missing_file.php';

echo "\n\n";
echo "REQUIRING A MISSING FILE:\n";
echo "-------------------------\n";

require 'missing_file.php';

echo "\n\nWE ARE AT THE END OF THE FILE\n\n\n";
