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
        $this-> name = $_name;
        $this-> id = $_id;
        $this-> batch = $_batch;
    }

    // 
    public function Createnewline(){
        return $this->name . ", " . $this->id . ", " . $this->batch . PHP_EOL;
    }

    public function saveData(){
        file_put_contents(self::$file_path, $this->Createnewline(), FILE_APPEND);
    }

    public function DisplayStudent(){
        $students = file(self::$file_path);
        echo "<table style='border: 1px solid black; width: 50%; border-collapse: collapse; margin-top: 20px;'>
        <tr>
            <th style='border: 1px solid black; padding: 8px; text-align: center;'>Name</th>
            <th style='border: 1px solid black; padding: 8px; text-align: center;'>Id</th>
            <th style='border: 1px solid black; padding: 8px; text-align: center;'>Batch</th>
        </tr>";

        foreach($students as $student){
            list($name, $id, $batch) = explode(", " , trim($student));
            
            echo "<table style='border: 1px solid black; width: 50%; border-collapse: collapse; margin-top: 20px;'>
            <tr>
                <td style='border: 1px solid black; padding: 8px; text-align: center;'>$name</td>
                <td style='border: 1px solid black; padding: 8px; text-align: center;'>$id</td>
                <td style='border: 1px solid black; padding: 8px; text-align: center;'>$batch</td>
            </tr>";
        }
    }
}
?>