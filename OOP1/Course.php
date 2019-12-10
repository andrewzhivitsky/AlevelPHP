<?php
class Course extends Direction
{
    public $form;
    public $course_length;
    public $cost;

    public function __constract($developer, $form, $course_length , $cost)
{
    parent::__constract($developer);
    $this->form=$form;
    $this->course_length=$course_length;
    $this->cost=$cost;

}

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @return mixed
     */
    public function getCourseLength()
    {
        return $this->course_length;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * @param mixed $course_length
     */
    public function setCourseLength($course_length)
    {
        $this->course_length = $course_length;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }


}