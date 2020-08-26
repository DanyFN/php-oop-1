<?php

  class Users {

    public $nome;

    public $cognome;

    public $email;

    public $nickname;

    public $commenti;

    public $eta;


    public function __construct( $_nickname , $_email , $_nome , $_cognome) {
      $this->nickname = $_nickname;
      $this->email = $_email;
      $this->nome = $_nome;
      $this->cognome = $_cognome;
    }

    public function getFullName() {
      return $this->nome . ' ' . $this->cognome . ' ' . $this->nickname . ' ' . $this->email;

    }

  }

?>
