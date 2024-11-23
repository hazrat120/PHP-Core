<?php
class Students{
    public $id;
    public $name;
    public $batch;

    public static $file_path = 'student_data.txt';
}

class Student extends Students{
    public function __construct($_id, $_name, $_batch){
        $this->id = $_id;
        $this->name = $_name;
        $this->batch = $_batch;
    }

    public function SANL() {
        return $this->id . ", " . $this->name . ", " . $this->batch . PHP_EOL;  // Now includes id properly
    }
    
    public function SaveData(){
        file_put_contents(self::$file_path, $this->SANL(), FILE_APPEND);
    }

    public static function Display_Students(){
        $studentss = file(self::$file_path);

       echo "<table style='border: 1px solid black; width: 50%; border-collapse: collapse; margin-top: 20px;'>
                    <tr>
                        <th style='border: 1px solid black; padding: 8px; text-align: center;'>Name</th>
                        <th style='border: 1px solid black; padding: 8px; text-align: center;'>Id</th>
                        <th style='border: 1px solid black; padding: 8px; text-align: center;'>Batch</th>
                    </tr>";

        foreach($studentss as $student){
            list($id, $name, $batch) = explode(", " , trim($student));
            echo "<tr>
                        <td style='border: 1px solid black; padding: 8px; text-align: center;'>$name</td>
                        <td style='border: 1px solid black; padding: 8px; text-align: center;'>$id</td>
                        <td style='border: 1px solid black; padding: 8px; text-align: center;'>$batch</td>
                      </tr>";
        }
    }
}

?>