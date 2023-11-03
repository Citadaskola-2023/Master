<?php

class ActionHandler
{
    public function __construct(
        private GameState $gameState
    ) {
    }


    public function handleAction(string $action): string
    {
        $action = Actions::tryFrom($action);

        return match ($action) {
            Actions::Move => $this->handleMove(),
            Actions::Attack => $this->handleAttack(),
            Actions::Flee => $this->handleFlee(),
            Actions::Status => $this->showStatus(),
            default => 'Invalid action.',
        };
    }

    public function handleAttack(): string
    {
        $currentHealth = $this->gameState->getHealth();
        $damage = rand(10, 20);

        $newHealth = $currentHealth - $damage;

        $this->gameState->setHealth($newHealth);

        if ($newHealth < 20) {
            $this->gameState->setHealth($newHealth + rand(50, 70));
            return 'OMG, you need to drink some health potion, otherwise you are dead';
        }

        return 'battle_ready goes on';
    }

    public function handleFlee(): string
    {
        if ($this->gameState->isInBattle()) {
            $this->gameState->battleFinished();
            return 'you left the battle_ready';
        }

        return 'you are not in the battle_ready';
    }

    public function handleMove(): string
    {
        if ($this->gameState->isInBattle()) {
            return 'you cannot move, you have to fight';
        }

        $randomValue = mt_rand() / mt_getrandmax();
        $chanceOfAttack = 0.7;

        if ($randomValue <= $chanceOfAttack) {
            $this->gameState->battleStarted();
            return 'somebody is attacking you';
        }

        return 'you are moving';
    }

    public function showStatus(): string
    {
        return (string) $this->gameState;
    }

    public function printActions()
    {
        $scriptName = $_SERVER['SCRIPT_NAME'];
        return array_map(
            fn ($action) => $scriptName . '?action=' . $action->value,
            Actions::cases()
        );
    }

}