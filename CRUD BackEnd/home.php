<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="js/general.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/home.css">
    <title> Teste da Aplicação </title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-light">
        <div class="col-md-5">
          <a href="register.php">
            <button type="button" class="btn btn-outline-secondary"> Registar</button>
          </a>
          <a href="dashboard.php?pagina=1">
            <button type="button" class="btn btn-outline-secondary"> Usuários </button>
          </a>
        </div>
      </nav>
    </header>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <h1>Tarefa:</h1>
           <p>
             <h4>1 - Criar uma tabela de usuarios no banco de dados com os seguintes campos: </h4>
             <p><code>
               codigo do usuario (chave primaria)
               nome
               email (indexado e unico)
             </code></p>
           </p>
           <p>
             <h4>   2 - Criar um formulario de inclusao de usuarios em PHP:</h4>
             <p>Campos do formulario: nome e e-mail
               O sisteminha deve ter tratamento de erro, ou seja, verificar se o e-mail já existe no banco de dados, caso ele já esteja cadastrado, mostrar mensagem de erro, caso contrario, cadastrar usuario.
               O codigo deve ser limpo, comentado se necessario e otimizado, as conexoes devem ser fechadas ao final da execucao do script.
             </p>
           </p>
           <p>
             <h4>  3 - Criar uma pagina que mostre os usuarios de 10 em 10 (paginacao)</h4>
             <p>
               Observacao:
               As paginas web devem ser formatadas por CSS a seu criterio. Pode usar apenas fonte verdana tamanho 10 se quiser, basta mostrar que voce sabe usar o CSS
             </p>
           </p>
         </div>
       </div>
     </div>
  </body>
</html>
