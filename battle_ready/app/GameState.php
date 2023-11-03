<?php

class GameState
{
    public function __construct(
        private string $gamerName,
        private int $health,
        private bool $inBattle = false,
    ) {
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    public function getHealth(): int {
        return $this->health;
    }

    public function isInBattle(): bool
    {
        return $this->inBattle;
    }

    public function battleStarted(): void
    {
        $this->inBattle = true;
    }

    public function battleFinished(): void
    {
        $this->inBattle = false;
    }

    public function __toString(): string
    {
        return json_encode([
            'health' => $this->health,
            'name' => $this->gamerName,
            'in_battle' => $this->inBattle
        ]);
    }

}