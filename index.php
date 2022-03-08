<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Список дел</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="./img/logo.png" alt="" width="100px">
          </a>
          <div class="col-md-1 text-end  ">
            <button type="button" class="btn btn-success"><ya-tr-span data-index="17-0" data-translated="true" data-source-lang="ru" data-target-lang="ru" data-value="LoginSign-up" data-translation="Вход Регистрация" data-type="trSpan">☰</ya-tr-span></button>
          </div>
        </header>
      </div>


  <div class="container">
    <h1>Список дел</h1>
    <form action="/add.php" method="post">
      <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
      <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
    </form>

    <?php
      require 'configDB.php';

      echo '<ul>';
      $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
      }
      echo '</ul>';
    ?>

  </div>

   <div class="footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted"><ya-tr-span data-index="6-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="© 2021 Company, Inc" data-translation="© 2021 Company, Inc" data-type="trSpan">© 2021 Company, Inc</ya-tr-span></span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">

          </ul>
        </footer>
      </div>
</body>
</html>
