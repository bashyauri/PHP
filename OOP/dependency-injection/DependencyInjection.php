<?php
class Course{
    public $cid;
    function __construct($cid){
        $this->cid = $cid;
    }
}
class Lesson extends Course{
    public $lid;
    function __construct($lid,Course $course){
        $this->lid = $lid;
        $this->cid = $course->cid;
    }
    function showLessons(){
        echo "Here are the Lessons".PHP_EOL;

    }
}
class Quiz extends Course{
    public $qid;
    function __construct($qid, Course $course){
        $this->qid = $qid;
        $this->cid = $course->cid;
    }
}
$course = new Course(1);
$lesson = new Lesson(100,$course);
$quiz = new Quiz(200,$course);