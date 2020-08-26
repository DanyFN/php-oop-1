<?php

  require_once(__DIR__ . '/users.php');


  $users = [
    [
      'nome'=>'Giancarlo',
      'cognome'=>'Verdi',
      'nickname'=>'Gianca',
      'email'=>'gian@mail.com'
    ],
    [
      'nome'=>'Mario',
      'cognome'=>'Rossi',
      'nickname'=>'Marietto',
      'email'=>'mario@mail.com'
    ],
    [
      'nome'=>'Anna',
      'cognome'=>'Trotta',
      'nickname'=>'Annina',
      'email'=>'annabrutta@mail.com'
    ],
    [
      'nome'=>'Monica',
      'cognome'=>'Rosa',
      'nickname'=>'Monick',
      'email'=>'mon@mail.com'
    ]
  ];

  foreach ($users as $user) {
    $utente = new Users ($user['nickname'] , $user['email'] , $user['nome'], $user['cognome']);
    echo $utente->getFullName() . '<br>';
  }



  // $jordan = new Users ( 'MJ23' , 'jordan@mail.it');
  // $jordan->nome = 'Michael';
  // $jordan->cognome = 'Jordan';
  // $jordan->commenti = '';
  // $jordan->eta = 36;
  // echo 'Utente:'. ' ' . $jordan->getFullName() . '<br>' . 'Nickname:' . ' ' . $jordan->nickname . '<br>' . 'Email:' . ' ' . $jordan->email . '<br>';
  //
  // $mercury = new Users( 'CiaoFreddy' , 'freddy@mail.fr' );
  // echo 'Utente:'. ' ' . $mercury->getFullName() . '<br>' . 'Nickname:' . ' ' . $mercury->nickname . '<br>' . 'Email:' . ' ' . $mercury->email . '<br>';


?>
