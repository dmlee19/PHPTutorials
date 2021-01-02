<?php 

    class User {
        
        private $email;
        private $name;

        public function __construct($name, $email){
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            echo $this->name . ' logged in';
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            if(is_string($name) && strlen($name)>1){
                $this->name = $name;
                return "name has been updated to $name";
            }else{
                return 'not a valid name';
            } 
        }
    }

    $userTwo = new User('Yoshi','Yoshi@Mario.com');
        // echo $userTwo->name;        //error
        echo $userTwo->getName();   //Yoshi
        $userTwo->login();  // Yoshi logged in
        echo $userTwo->setName(50); // not a valid name --> not string
        echo $userTwo->setName('Mario'); // name has been updated to Mario
        echo $userTwo->getName(); //Mario
?>
