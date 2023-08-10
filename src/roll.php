<?php

declare(strict_types=1);

namespace Bank;
class Roll
{
    public int $rounds;
    public int $numRolls;
    public int $currentScore;
    public int $previousScore;
    public int $roundNum;
    public int $dieActual;
    public int $finalScore;

    public function __construct(
        int $rounds,
        int $numRolls,
        int $currentScore,
        int $previousScore,
        int $roundNum,
        int $dieActual,
        int $finalScore
    )
    {
        $this->rounds = $rounds;
        $this->numRolls = $numRolls;
        $this->currentScore = $currentScore;
        $this->previousScore = $previousScore;
        $this->roundNum = $roundNum;
        $this->dieActual = $dieActual;
        $this->finalScore = $finalScore;
    }

    public function rollDie(): Roll
    {
        $this->dieActual = rand(1, 6);
        $this->numRolls += 1;
//        updateStats($this->dieActual);
        return $this;
    }

    public function getDieActual(): int
    {
        return $this->dieActual;
    }
    public function getNumRolls(): int
    {
        return $this->numRolls;
    }
    public function getCurrentScore(): int
    {
        return $this->currentScore;
    }
    public function getPreviousScore(): int
    {
        return $this->previousScore;
    }
    public function getFinalScore(): int
    {
        return $this->finalScore;
    }
    public function getRoundNum(): int
    {
        return $this->roundNum;
    }
}