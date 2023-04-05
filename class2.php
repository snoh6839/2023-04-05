<?
class People {
    protected $name;
    
    public function __construct($setName)
    {
        $this->name = $setName;
    }
    public function printPeople()
    {
        echo $this->name;
    }
}

class Student extends People
{
    private $id;
    function __construct($setId, $setName)
    {
        $this->id = $setId;
        $this->name = $setName;
    }
    public function printPeople()
    {
        print " -Student- \n";
        parent::printPeople();
        print " Id : ". $this->id."\n";
    }
}

$student1 = new Student('snoh6839','노수빈');
$student1->printPeople();

?>