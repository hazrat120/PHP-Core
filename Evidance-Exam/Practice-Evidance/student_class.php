
<?php
class Students{
    private $id;
    private $name;

    private static $file_path = "students_file.txt";

    function __construct($_id, $_name){
        $this->id = $_id;
        $this->name = $_name;
    }

    // snew for save and create new line.
    public function Snew(){
        return $this->id . ", " . $this->name . PHP_EOL; // PHP_EOL for create a new line
    }

    public function SaveData(){

        file_put_contents(self::$file_path, $this->Snew(), FILE_APPEND);
    }

    public static function Display_students(){
        $students = file(self::$file_path);

        echo "ID || Name";
        foreach($students as $student){
            list($id, $name) = explode("," , trim($student));
                echo "Id $id || Name: $name <br>";
        }
    }

}
?>