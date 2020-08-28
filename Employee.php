<?php

  class Employee extends User {

    public $sconto = 40;

    public $livello = 0;

    public $anni_anzianita;

    public function __construct($_nickname , $_email , $_nome , $_cognome , $_eta , $_anni_anzianita) {
      $this->anni_anzianita = $_anni_anzianita;
    }

    public function getFullName() {
      return $this->nome . ' ' . $this->cognome . '<br>' . $this->nickname . '<br>' . $this->email . '<br>' . $this->eta '<br>' . $this->anni_anzianita;
    }

    public function setLivello($anni_anzianita) {
      if ($anni_anzianita > 10) {
        $this->livello = 1;
      }
    }

    public function getLivello() {
      $this->livello = 1;
    }

    public function setSconto() {
      return $this->sconto;
    }
  }

?>
