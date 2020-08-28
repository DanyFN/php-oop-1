<!-- Per convenzione il file deve avere lo stesso nome della classe -->
<?php

  class User {

    public $nome;

    public $cognome;

    public $email;

    public $nickname;

    public $commenti;

    public $eta;

    public $sconto = 0;


    public function __construct( $_nickname , $_email , $_nome , $_cognome , $_eta ) {

      $this->nickname = $_nickname;
      $this->email = $_email;
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->eta = $_eta;

    }

    public function getFullName() {
      return $this->nome . ' ' . $this->cognome . '<br>' . $this->nickname . '<br>' . $this->email . '<br>' . $this->eta;
    }

    public function setSconto() {
      if ($this->eta > 60) {
        $this->sconto = 20;
      }
      return $this->sconto;
    }


  }

?>
