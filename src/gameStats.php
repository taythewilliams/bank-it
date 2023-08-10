<?php

require_once 'gameStats.php';
class GameStats
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
    public function updateStats($die): GameStats
    {
        if ($this->dieActual === 1)
        {
            $this->previousScore = $this->currentScore;
            $this->currentScore = $this->finalScore;
        } elseif ($this->dieActual === 2)
        {
            $this->previousScore = $this->currentScore;
            $this->currentScore *= 2;
        }else
        {
            $this->previousScore = $this->currentScore;
            $this->currentScore += $this->dieActual;
        }
        return $this;
    }
}