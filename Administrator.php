<?php

  class Administrator extends User {

    public  $sconto = 60;

    public function setSconto() {
      return $this->sconto;
    }

  }

?>
