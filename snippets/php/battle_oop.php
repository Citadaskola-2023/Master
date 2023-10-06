<?php
class Character {
    protected $name;
    protected $power;
    protected $health;

    public function __construct($name, $power, $health) {
        $this->name = $name;
        $this->power = $power;
        $this->health = $health;
    }

    public function attack($target) {
        $target->health -= $this->power;
        if ($target->health < 0) {
            $target->health = 0;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getHealth() {
        return $this->health;
    }
}

class Hero extends Character {
    // private: lvl?
    // private: exp?
    // Additional hero-specific methods or properties can be added here
}

class Villain extends Character {
    // private: difficultyLevel?
    // Additional villain-specific methods or properties can be added here
}

$hero = new Hero('Superman', 20, 100);
$villain = new Villain('Joker', 15, 80);

$hero->attack($villain);
echo "{$hero->getName()} attacked {$villain->getName()}. {$villain->getName()}'s health: {$villain->getHealth()}";


// Different weapons?
// Experience for killing the mob?
// loosing item if dead?
// Critical hits?
// Health regeneration?
