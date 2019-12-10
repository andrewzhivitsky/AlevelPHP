<?php
class Group extends Course {
 public $students;
 public $teacher;
  public function __construct($developer,$form,$course_length, $cost, $students, $teacher)
  {
      parent:: __constract($developer,$form,$course_length, $cost);
      $this->students=$students;
      $this->teacher=$teacher;

  }

    /**
     * @return mixed
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }

}