<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/8
 * Time: 10:44
 */
class GumballMachine {
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;
    private $soldOutState;
    private $winnerState;
    private $candyCount;
    private $currentState;

    public function __construct($candyCount = 10) {
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldOutState = new SoldOutState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);
        $this->candyCount = $candyCount;
        if ($this->candyCount > 0) {
            $this->currentState = $this->noQuarterState;
        } else {
            $this->currentState = $this->soldOutState;
        }
    }

    public function insertQuarter() {
        $this->currentState->insertQuarter();
    }

    public function ejectQuarter() {
        $this->currentState->ejectQuarter();
    }

    public function turnCrank() {
        $this->currentState->turnCrank();
    }

    public function dispense() {
        $this->currentState->dispense();
    }

    public function setState(State $state) {
        $this->currentState = $state;
    }

    public function setCandyCount($candyCount) {
        $this->candyCount = $candyCount;
    }

    public function releaseCandy() {
        if ($this->candyCount > 0) {
            echo "give you a candy\n";
            $this->candyCount--;
        } else {
            echo "sold out!!!\n";
            $this->setState($this->getSoldOutState());
        }
    }

    public function replenishCandy($candyCount) {
        $this->candyCount += $candyCount;
    }

    public function getCandyCount() {
        return $this->candyCount;
    }

    public function getNoQuarterState() {
        return $this->noQuarterState;
    }

    public function getHasQuarterState() {
        return $this->hasQuarterState;
    }

    public function getSoldState() {
        return $this->soldState;
    }

    public function getSoldOutState() {
        return $this->soldOutState;
    }

    public function getWinnerState() {
        return $this->winnerState;
    }

    public function soldOut() {
        if ($this->getCandyCount() > 0) {
            return false;
        } else {
            return true;
        }
    }
}