<?php

require_once 'assets/objetos/Team.php';

class Partida {
    
    // Atributos
    private $data;
    private $hora;
    private $estadio;
    private $grupo;
    private $rodada;
    private $timeA;
    private $timeB;
    private $golsA;
    private $golsB;
    private $status;
    
    // Métodos
    public function __construct() {
        $this->status = "aguardando";
    }

    
    public function marcarPartida($data, $hora, $estadio, $grupo, $rodada, $timeA, $timeB) {
        $this->data = $data;
        $this->hora = $hora;
        $this->estadio = $estadio;
        $this->grupo = $grupo;
        $this->rodada = $rodada;
        $this->timeA = $timeA;
        $this->timeB = $timeB;
        $this->status = "marcada";
    }

    public function comecarPartida($golsA, $golsB) {
        $this->golsA += $golsA;
        $this->golsB += $golsB;
        $this->timeA->jogarPartida($golsA, $golsB);
        $this->timeB->jogarPartida($golsB, $golsA);
        $this->status = "aberto";
    }
    
    public function finalizarPartida() {
        if($this->golsA > $this->golsB) {
            $this->timeA->ganharPartida();
            $this->timeB->perderPartida();
        } elseif ($this->golsA == $this->golsB) {
            $this->timeA->empatarPartida();
            $this->timeB->empatarPartida();
        } else {
            $this->timeA->perderPartida();
            $this->timeB->ganharPartida();
        }
    }
    
    public function getData() {
        return $this->data;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getEstadio() {
        return $this->estadio;
    }

    public function getGrupo() {
        return $this->grupo;
    }

    public function getRodada() {
        return $this->rodada;
    }

    public function getTimeA() {
        return $this->timeA;
    }

    public function getTimeB() {
        return $this->timeB;
    }

    public function getGolsA() {
        return $this->golsA;
    }

    public function getGolsB() {
        return $this->golsB;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setData($data): void {
        $this->data = $data;
    }

    public function setHora($hora): void {
        $this->hora = $hora;
    }

    public function setEstadio($estadio): void {
        $this->estadio = $estadio;
    }

    public function setGrupo($grupo): void {
        $this->grupo = $grupo;
    }

    public function setRodada($rodada): void {
        $this->rodada = $rodada;
    }

    public function setTimeA($timeA): void {
        $this->timeA = $timeA;
    }

    public function setTimeB($timeB): void {
        $this->timeB = $timeB;
    }

    public function setGolsA($golsA): void {
        $this->golsA = $golsA;
    }

    public function setGolsB($golsB): void {
        $this->golsB = $golsB;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }



}