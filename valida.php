<?php 
  session_start();
   /* echo'<pre>';
   echo $_POST['email'];
   echo'</pre>';
   echo'<pre>';
   echo $_POST['senha'];
   echo'</pre>';*/

 

   $usuario_autenticado = false;

   $usuarios_sist = array(
       array(
            'email' => 'thiagodiaslima10@gmail.com' ,
            'senha' => '123456' 
       ),

       array(
        'email' => 'cericetesting@gmail.com' ,
            'senha' => '654321' 
    ),

    array(
        'email' => 'commitup@cerice.org' ,
            'senha' => 'abc12345' 
    )

   );

   foreach($usuarios_sist as $usuarios){

        if($usuarios['email'] == $_POST['email'] &&  $usuarios['senha'] == $_POST['senha']){
                $usuario_autenticado = true;

        }

        if($usuario_autenticado){
            
           $_SESSION['autenticado'] = 'sim';
           header('Location: inicio.php');
        } 
        else {

            $_SESSION['autenticado'] = 'nao'; 
            header('Location: index.php?login=erro');
           
        }

   }


?>