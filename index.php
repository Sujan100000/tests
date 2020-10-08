<?php
class Person {
    public $name;
    protected $age;
    private $address;

    function set_name($name){
        $this->name =$name;
    }
    function set_age($age) {
        $this->age =$age;
    }
    function get_name() {
        return $this->name;
    }
    
    function get_age() {
        return $this->age;
    }
}
$sujan = new Person();
$jnish = new Person();

$sujan->set_name('sujan');
$sujan->set_age('20');

//$jnish->set_name('jnish');
//$jnish->set_age('20');

echo "the name is <lr>" .$sujan->get_name() ;
echo "and his age is " .$sujan ->get_age();
//echo "<br>";
//echo "the name is " .$jnish->get_name();
//echo "and his age is " .$jnish->get_age();
?>