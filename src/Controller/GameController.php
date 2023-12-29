<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class GameController extends AbstractController
{
    public function selectRounds(): \Symfony\Component\HttpFoundation\Response
    {
        $roundOptions = [3, 5, 7, 10, 15, 20];
        return $this->render('select.html.twig', [
            'roundOptions' => $roundOptions,
        ]);
    }
    public function selectConfirm($totalRounds): \Symfony\Component\HttpFoundation\Response
    {
        $roundOptions = [3, 5, 7, 10, 15, 20];
        if(!in_array($totalRounds, $roundOptions))
        {
            return $this->render('home.html.twig', []);
        };
        return $this->render('confirm.html.twig', [
            'roundOptions' => $roundOptions,
            'totalRounds' => $totalRounds,
        ]);
    }
    public function playStart($totalRounds): \Symfony\Component\HttpFoundation\Response
    {
        $currentDie = 0;
        $status = 'current';
        return $this->render('play.html.twig', [
            'totalRounds' => $totalRounds,
            'currentDie' => $currentDie,
            'status' => $status,
            'round' => 1,
            'current' => 0,
            'previous' => 0,
            'end' => false,
        ]);
    }
    public function roll($totalRounds, $round, $current): \Symfony\Component\HttpFoundation\Response
    {
        // TODO: in-between round phase and end of game screen.

        $end = false;
        $status = 'current';

        $newRoll = rand(1,6);

        if($newRoll != 1 ) {
            $previous = $current;
            if($newRoll == 2){
                if($current == 0){
                    $current = 2;
                } else {
                    $current *= 2;
                }
            } else {
                $current += $newRoll;
            }
        } elseif($round != $totalRounds){
            // end of round
            $round ++;
            $status = 'final';
            $previous = $current;
            $current = 0;
        } else {
            // end of game
            $previous = $current;
            $current = 0;
            $end = true;
            $status = 'final';
        }

        return $this->render('play.html.twig', [
            'totalRounds' => $totalRounds,
            'currentDie' => $newRoll,
            'status' => $status,
            'round' => $round,
            'current' => $current,
            'previous' => $previous,
            'end' => $end,
        ]);
    }
}