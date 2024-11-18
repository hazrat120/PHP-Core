<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index array</title>
</head>
<body>
    <h1>Hello Array</h1>
    
    <?php 
/*     $fruits = array("Apple", 'Kola', 'Komla', 'Mango');
    $name = array('Mizan', 'Ali', 'Hazrat');
    $num = array(1, 2,3 ,4, 5, 6, 7, 8, 9, 10);
    $alphabet = array('a', 'b', 'c','g', 'd', 'b', 'a', 'z', 'x', 'd', 'd', 'e', 'f', 'g', 'a', 'x', 'b',  'e', 'x');

    $array = [
        ["id" => 1, "name" => "Alice", "age" => 25],
        ["id" => 2, "name" => "Bob", "age" => 30],
        ["id" => 3, "name" => "Charlie", "age" => 35]
    ]; */

/*     echo "<br>";
    $chunk = json_encode(array_chunk($num, 3));
    print_r($chunk);

    echo "<br>";
    $name1 = json_encode(array_column($array, "name"));
    $age = json_encode(array_column($array, "age"));
    print_r($name1);
      echo "<br>";
    print_r($age);
    echo "<br>";
    $unique = json_encode(array_unique($alphabet));
    print_r($unique); */


    /* $num = array(1, 2,3 ,4, 5, 6, 11, 12, 13, 7, 7, 14, 15, 16, 17, 18, 19, 20);
    $num2 = array(8, 9, 10, 11, 12, 13, 7, 14, 15, 16); 
    $alphabet = array('a', 'b', 'c','g', 'd', 'b', 'a', 'z', 'x', 'd', 'd', 'e', 'f', 'g', 'a', 'x', 'b',  'e', 'x');

    $array = [
        ["id" => 1, "name" => "Alice", "age" => 25],
        ["id" => 2, "name" => "Bob", "age" => 30],
        ["id" => 3, "name" => "Charlie", "age" => 35]
    ];

    $keys = ["name", "age", "country"];
    $values = ["Alice", 25, "Bangladesh"];
 */
  /*   $combine = json_encode(array_combine($keys, $values));
    print_r($combine);
    echo "<br>";
    $count_values = array_count_values($alphabet);
    print_r($count_values);
    echo "<br>";
    $diff = json_encode(array_diff($num, $num2));
    print_r($diff);
    echo "<br>"; */

   /*  echo <<<END
       <h2 style="text-align: center; color: #333;">User Information Form</h2>

    <form style="width: 300px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;       background-color: #f9f9f9;">
        <label for="name" style="display: block; font-size: 16px; margin-bottom: 8px;">Name:</label>
        <input type="text" id="name" name="name" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
        
        <label for="email" style="display: block; font-size: 16px; margin-bottom: 8px;">Email:</label>
        <input type="email" id="email" name="email" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
        
        <label for="age" style="display: block; font-size: 16px; margin-bottom: 8px;">Age:</label>
        <input type="number" id="age" name="age" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
        
        <label for="gender" style="display: block; font-size: 16px; margin-bottom: 8px;">Gender:</label>
        <select id="gender" name="gender" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <button type="submit" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; font-size: 16px; border: none; border-radius: 5px;">Submit</button>
    </form>
    END;
 */
/* 
    $variable = <<<'EOD'
    This is a Nowdoc string.
    Variables like $combine will not be interpolated.
    EOD;
    echo $variable; */
/* $name = "Alice";
$age = 25;
$city = "Dhaka";

$text = <<<EOD
<div style="border: 1px solid #ccc; padding: 20px; width: 300px; margin: 0 auto; background-color: #f9f9f9;">
              <h2 style="text-align: center; color: #333;">User Profile</h2>
                                    <p><strong>Name:</strong> $name</p>
    <p><strong>Age:</strong> $age</p>
    <p><strong>City:</strong> $city</p>
</div>
EOD;
echo $text; */

   /* $num = array(1, 2,3 ,4, 5, 6, 11, 12, 13, 7, 7, 14, 15, 16, 17, 18, 19, 20);
    $num2 = array(8, 9, 10, 11, 12, 13, 7, 14, 15, 16); 
    $alphabet = array('a', 'b', 'c','g', 'd', 'b', 'a', 'z', 'x', 'd', 'd', 'e', 'f', 'g', 'a', 'x', 'b',  'e', 'x');

    $array = [
        ["id" => 1, "name" => "Alice", "age" => 25],
        ["id" => 2, "name" => "Bob", "age" => 30],
        ["id" => 3, "name" => "Charlie", "age" => 35]
    ];


 $array1 = [
    "a" => "apple", 
    "b" => "banana", 
    "c" => "cherry"
];

$array2 = [
    "a" => "apple", 
    "b" => "orange"
];

$array3 = [
    "c" => "cherry", 
    "d" => "date"
];

    $result = json_encode(array_diff_assoc($array1, $array2, $array3));
    print_r($result);
    echo "<br>";
 */


    // $diff_assoc = json_encode(array_diff_assoc($array1, $array2));
    // print_r($diff_assoc);

    // $diff_key = json_encode(array_diff_key($array1, $array2));
    // echo "<br>";
    // print_r($diff_key);
    // echo "<br>";
    
    // $array1 = [
    //     "a" => "apple", 
    //     "b" => "banana", 
    //     "c" => "cherry"
    // ];

    // $array2 = [
    //     "a" => "apple", 
    //     "b" => "orange",
    //     "c" => "cherry"
    // ];
    // function key_compare_func($key1, $key2){
    //     return strcmp($key1, $key2);
    // }
    
    // $result = array_diff_uassoc($array1, $array2, "key_compare_func");
    // print_r($result);

    
    
?>
</body>
</html>


