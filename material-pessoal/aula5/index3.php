<?php

class customer{
    protected $name;
    protected $email;

    function __construct($n, $e){
        $this->name = $n;
        $this->email = $e;
    }

    protected function customers(){
        echo $this->name . " " . $this->email;
    }
}

$customers = [
    new customer('Paulo', 'paulovdbarbosa@gmail.com'),
    new customer('Aline', 'alinesdn@gmail.com'),
    new customer('Josinalva', 'josinalvajosin@gmail.com')
];

echo "<pre>";
print_r($customers);