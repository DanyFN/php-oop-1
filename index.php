<?php
  // Per includere le classi nel file index.php non si usa 'include' ma require_one().
  require_once(__DIR__ . '/User.php');
  require_once(__DIR__ . '/Employee.php');
  require_once(__DIR__ . '/Administrator.php');


  $users = [
    [
      'nome'=>'Giancarlo',
      'cognome'=>'Verdi',
      'nickname'=>'Gianca',
      'email'=>'gian@mail.com',
      'eta'=> 34
    ],
    [
      'nome'=>'Mario',
      'cognome'=>'Rossi',
      'nickname'=>'Marietto',
      'email'=>'mario@mail.com',
      'eta'=> 86
    ],
    [
      'nome'=>'Anna',
      'cognome'=>'Trotta',
      'nickname'=>'Annina',
      'email'=>'annabrutta@mail.com',
      'eta'=> 30
    ],
    [
      'nome'=>'Monica',
      'cognome'=>'Rosa',
      'nickname'=>'Monick',
      'email'=>'mon@mail.com',
      'eta'=> 66
    ]
  ];

  $employees = [
    [
      'nome'=>'Cicco',
      'cognome'=>'Franco',
      'nickname'=>'Bomba',
      'email'=>'ciccio@mail.com',
      'eta'=> 33,
      'anzianità'=> 9
    ],
    [
      'nome'=>'Valentina',
      'cognome'=>'Bianchi',
      'nickname'=>'Vale',
      'email'=>'vale@mail.com',
      'eta'=> 26,
      'anzianità'=> 19
    ]
  ];

  $administrators = [
    [
      'nome'=>'Elon',
      'cognome'=>'Maschera',
      'nickname'=>'Tesla',
      'email'=>'elon@mail.com',
      'eta'=> 43
    ],
    [
      'nome'=>'Ivan',
      'cognome'=>'Arlecchino',
      'nickname'=>'Ivano',
      'email'=>'io@mail.com',
      'eta'=> 36
    ]
  ];

  foreach ($users as $user) {
    $utente = new User ($user['nickname'] , $user['email'] , $user['nome'], $user['cognome'], $user['eta']);
    echo $utente->getFullName() . '<br>';
    echo 'Sconto: ' . $utente->setSconto() . '<br>' . '<br>';
  }

  foreach ($employees as $employee) {
    $dipendente = new Employee ($employee['nickname'] , $employee['email'] , $employee['nome'], $employee['cognome'], $employee['eta'], $employee['anzianità']);
    echo $dipendente->getFullName() . '<br>';
    echo 'Livello: ' . $dipendente->setLivello() . '<br>';
    echo 'Sconto: ' . $dipendente->setSconto() . '<br>' . '<br>';
  }

  foreach ($administrators as $administrator) {
    $amministratore = new Administrator ($administrator['nickname'] , $administrator['email'] , $administrator['nome'], $administrator['cognome'], $administrator['eta']);
    echo $amministratore->getFullName() . '<br>';
    echo 'Sconto: ' . $amministratore->setSconto() . '<br>' . '<br>';
  }

?>
