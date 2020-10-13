<?php 
$usuarios_app = [
    ['email' => 'teste@teste.com' , 'senha' => 123456],
    ['email' => 'user@teste.com', 'senha' => "abcd"],
];

// echo '<pre>';
// print_r($usuarios_app);
// echo '</pre>';~
 foreach($usuarios_app as $user) {
     
    echo 'Usuario app: ' . $user['email'] . ' / ' . $user['senha'];
    echo '<br>';
    echo 'Usuario app: ' . $_POST['email'] . ' / ' . $_POST['senha'];
    echo "<hr>";

};

//  print_r($_GET);
//  echo "<br>";
//  echo $_GET['email'];
//  echo "<br>";
//  echo $_GET['senha'];

// print_r($_POST);

// echo $_POST ['email'];
// echo "<br>";
// echo $_POST ['senha'];
// echo "<hr>";