<?php
echo "<a href='index.php'>Обратно</a><br>";

class Notify {
    private static ?Notify $instance = null;
    private Array $observed;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance() : Notify {
        if (self::$instance == null) {
            self::$instance = new Notify();
        }
        return self::$instance;
    }

    public function addUser(User $user) : void {
        $this->observed[] = $user;
    }

    public function removeUser(User $user) : void  {
        foreach ($this->observed as $key => $observedUser) {
            if ($observedUser->getEmail() == $user->getEmail()) {
                unset($this->observed[$key]);
                break;
            }
        }
    }

    public function notifyUsers() : void {
        foreach ($this->observed as $user) {
            echo "На почту " . $user->getEmail() . " отправленно письмо! <br>";
        }
    }
}


class Vacancy {
    public function __construct()
    {
        $notify = Notify::getInstance();
        $notify->notifyUsers();
    }
}


class User {
    private string $name;
    private string $email;
    private int $experience;

    public function __construct(string $name, string $email, int $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }
}

$notify = Notify::getInstance();

$user1 = new User("Вася", "vali@mail.ru", 2);
$user2 = new User("Андрей", "andrey@mail.ru", 3);
$user3 = new User("Никита", "nikita@mail.ru", 2);

$notify->addUser($user1);
$notify->addUser($user3);

new Vacancy();

$notify->removeUser($user1);

new Vacancy();