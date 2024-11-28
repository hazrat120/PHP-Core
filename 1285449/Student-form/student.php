<?php
class Student{
    public $name;
    public $id;
    public $batch;

    public static $file_path = 'data.txt';
}

class Students extends Student{
    public function __construct($_name, $_id, $_batch)
    {
        $this->name = $_name;
        $this->id = $_id;
        $this->batch = $_batch;
    }

    public function CSV(){
        return $this->name . ", " . $this->id . ", " . $this->batch . PHP_EOL;
    }

    public function SaveData(){
        file_put_contents(self::$file_path, $this->CSV(), FILE_APPEND);
    }

    public static function Displaydata(){
        $students =  file(self::$file_path);

        echo "<table style='border: 1px solid black; width: 40%; border-collapse: collapse; margin-top: 50px;'>
                <tr style='background-color: #4CAF50;'>
                    <th style='border: 1px solid black; padding: 8px; text-align: center;'>Id</th>
                    <th style='border: 1px solid black; padding: 8px; text-align: center;'>Name</th>
                    <th style='border: 1px solid black; padding: 8px; text-align: center;'>Batch</th>
                </tr>";
        
        foreach($students as $student){
            list($name, $id, $batch) = explode(", ", trim($student));

            echo "<tr style='background-color: #ebedef;'>
                <td style='border: 1px solid black; padding: 8px; text-align: center;'>$name</td>
                <td style='border: 1px solid black; padding: 8px; text-align: center;'>$id</td>
                <td style='border: 1px solid black; padding: 8px; text-align: center;'>$batch</td>
            </tr>";
        }
        echo "</table>";
    }
}
?>