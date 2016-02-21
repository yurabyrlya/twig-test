<?php


/**
* 
*/
class user
{
	private $name;
	private $age;
 	
	function __construct($name = false,$age = false)
	{
	  $this->name = $name;
	  $this->age = $age;
	}

	  public function setName($name)
	  {
	   $this->name = $name; 
	  }
	  public function getName()
	  {
	   return $this->name; 
	  }	 

	  public function setAge($age)
	  {
	   $this->age = $age; 
	  }
	  public function getAge()
	  {
	   return $this->age ; 
	  }
	  public function __sleep()
	  {
	  	echo "<br> ok serialize";
	  	return ['name','age'];
	  }
	   public function __wakeup() {
       echo '<br> unserialize';
      }

}

  $user1 = new user('Adam',18);
  $user2 = new user();

  echo $user1->getName().' ';
  echo $user1->getAge();
   
  $user1Str =  serialize($user1);
  $user1Str =  'O:4:"user":2:{s:10:"username";s:4:"Adam";s:9:"userage";i:18;}';
      echo $user1Str;
  $user1Str = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $user1Str);
   echo "<br>";
    echo $user1Str;
   var_dump(unserialize($user1Str));
   echo "<br>";
 
  $user2 ->setName('Bob');
  $user2 -> setAge(23);

  echo "<br>";
  echo $user2->getName().' ';
  echo $user2->getAge();
  









?>