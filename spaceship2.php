<?php
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
echo "a" <=> "aa"; // -1
echo "zz" <=> "aa"; // 1