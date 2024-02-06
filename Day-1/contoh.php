<?php
function calculator($input1, $operator, $input2) {
    if ($operator == '+') {
            return $input1 + $input2;
        } elseif ($operator == '-') {
            return $input1 - $input2;
        } elseif ($operator == '*') {
            return $input1 * $input2;
        } elseif ($operator == '/') {
            return $input1 / $input2;
        }else {
            return 'Invalid operator';
        }
    }
echo calculator(5, '/', 30);

// atu gunakan kode yang dibawah
//     if ($operator == '+') {
//         return $input1 + $input2;
//     } elseif ($operator == '-') {
//         return $input1 - $input2;
//     } elseif ($operator == '*') {
//         return $input1 * $input2;
//     } elseif ($operator == '/') {
//         if ($input2 == 0) {
//             throw new Exception("Bilangan 0");
//         }
//         return $input1 / $input2;
//     } else {
//         throw new Exception("Error!");
//     }
// }

// try {
//     $input1 = 18;
//     $input2 = 5;
//     $operator = '*';

//     $result = calculator($input1, $operator, $input2);
//     echo "Result: " . $result;
// } catch (Exception $e) {
//     echo 'Error: ' . $e->getMessage();
// }

