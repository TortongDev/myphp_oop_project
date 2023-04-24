<?php
// SELECT * FROM `school_ans`
require_once "../autoload.php";
class getSchool {
    public $school_ans_name;
	public $teacher_ans_id;

    public function getSchool()
    {
        return $this->school_ans_name;
    }
    
    public function getTeacher()
    {
        return $this->teacher_ans_id;
    }

    public function setSchool($school_ans_name)
    {
        $this->$school_ans_name = $school_ans_name;
    }
    public function setTeacher()
    {
        $this->$teacher_ans_id = $teacher_ans_id;
    }
    public function select(){
        $db = new Connection;
        $query = $db->selectData("SELECT * FROM db_localhost.school_ans where ? ",array('1=1'));
       var_dump($query);
    }
}
$gt = new getSchool;
$gt->select();
?>