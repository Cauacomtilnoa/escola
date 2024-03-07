<?php
session_start();
// Verificar se a página está sendo carregada por POST:
    // if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/docente_class.php');

 

        // Instanciar um obj do tipo contato:
        $c = new Docente();

 

        // Definir os valores das suas propriedades:
        $c->nome = $_POST['nomeDocente'];
        $c->email = $_POST['emailDocente'];
        

 

 

        try{
            $c->Inserir();
            header('Location: ../view/cad_docente_view.php?msg=6');
            exit();

 

 

        }catch(PDOException $e) {
            header('Location: ../view/cad_docente_view.php?erro=5');

 


        }

 


        // echo "Contato cadastrado com sucesso!";
        // Redirecionar o jovem de volta à agenda:       
        
        
    //     echo '
    //     <script> 
    //       alert("cadastro realizado com sucesso !!!" );
         
    //   </script>';
      
      echo '<script>window.location.href = "../view/cad_docente_view.php";</script>';

 

        // header('Location: ../cad_docente.html');
        // exit();
    // }else{
    //     echo "Você precisa estar logado e essa página deve ser carregada por POST!";
    // 
}

?>