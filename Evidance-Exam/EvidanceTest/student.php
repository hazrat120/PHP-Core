<?php
class  Students{
    public $name;
    public $id;

    public function __construct($_name, $_id)
    {
        $this->name = $_name;
        $this->id = $_id;
    }

    public static $file_path = 'data.txt';

    public function CSV(){
        return $this->name . ", " .  $this->id . PHP_EOL;
    }

    public function saveData(){
        file_put_contents(self::$file_path, $this->CSV(), FILE_APPEND);
    }

    public static function Displayinfo(){
        $students =  file(self::$file_path);

        echo "<table style='border: 1px solid black; width: 40%; border-collapse: collapse; margin-top: 50px;'>
                <tr style='background-color: #d5d8dc;'>
                    <th style='border: 1px solid black; padding: 8px; text-align: center;'>Name</th>
                    <th style='border: 1px solid black; padding: 8px; text-align: center;'>Id</th>
                </tr>";
        
        $row_count = 0;
        foreach($students as $student){
            list($name, $id) = explode(", ", trim($student));

            // Alternate row colors (gray and white)
            $row_color = ($row_count % 2 == 0) ? 'background-color: white;' : 'background-color: #eaecee;';

            echo "<tr style='$row_color'>
                <td style='border: 1px solid black; padding: 8px; text-align: center;'>$name</td>
                <td style='border: 1px solid black; padding: 8px; text-align: center;'>$id</td>
            </tr>";
            
            $row_count++; // Increment row counter
        }
        echo "</table>";
    }
}
?>