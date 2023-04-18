<?php


/*include 'Point.php';

$point1 = new Point();
$point1->x = 0;
$point1->y = 'kasdmcksam';*/

/*echo $point1->y;*/

class User
{
    public $username = 'Steve';
    public $password;
    public $email;

    function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function getInfo(): string
    {
        return "{$this->username}" . " {$this->password}" . " {$this->email}";
    }
}

/*$user = new User('Maks', '1234', 'maks@gmail.com');
$user->Hello();*/

class Admin extends User
{
    public $info;
    public $rights;

    function __construct($username, $password, $email, $info, $rights)
    {
        parent::__construct($username, $password, $email);
        $this->info = $info;
        $this->rights = $rights;
    }

    public function getInfo(): string
    {
        $information = parent::getInfo();
        $information .= "{$this->info}" . "{$this->rights}";
        return $information;
    }
}

$admin = new Admin('Maks', '1234', 'maks@gmail.com', 'Moderator', 'True');
echo $admin->getInfo();


class Base
{
    public function sayHello()
    {
        echo "Hello";
    }
}

trait sayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo "World";
    }
}

class myHelloWorld extends Base
{
    use sayWorld;
}

$object = new myHelloWorld();
$object->sayHello();

// Error ignoring:
/*@require_once 'file.txt';*/

//exceptions:
$file = 'namespace.php';

try {
    if (!file_exists($file)) {
        throw new Exception('File not found exception');
    }

} catch (Exception $e) {
    echo $e->getMessage();
}

