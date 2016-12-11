<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
    
    <link rel="stylesheet" href="templates/materialize/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
<main>
  <div class="navbar">
    <nav>
      <div class="nav-wrapper">
        <a href="." class="brand-logo center">My CMS</a>
      </div>
    </nav>
  </div>
    <div class="container">
      <form method="post">
        <div class="input-field">
          <input id="search" type="search" name="search" required>
          <label for="search">Tìm kiếm</label>
          <i class="material-icons">x</i>
        </div>
      </form>

      <?php 
      if ( !empty( $_POST["search"] ) ){
        echo "<h4>Kết quả: </h4>";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mycms";

        //Create Connection.
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Check connection.
        if ($conn -> connect_error){
          die("Khong truy xuat duoc CSDL");
        }

        //Query
        $sql = "SELECT id, title FROM ARTICLES WHERE title LIKE '%".$_POST["search"]."%'";
        $result = $conn -> query($sql);
        
        /*<a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
        <?php echo htmlspecialchars( $article->title )?></a>*/



        if ($result -> num_rows > 0){
          //Out put data.
          while($row = $result->fetch_assoc()){
            echo '<a href=".?action=viewArticle&amp;articleId='.$row["id"].'">'.$row["title"].'</a>';
          }
        }else{
          $sql = "SELECT id, title FROM ARTICLES WHERE content LIKE '%".$_POST["search"]."%'";
          $result = $conn -> query($sql);

          if ($result -> num_rows > 0){
            while ($row = $result->fetch_assoc()){
              echo '<a href=".?action=viewArticle&amp;articleId='.$row["id"].'">'.$row["title"].'</a>';
            }
          }else{
            echo "Không tìm thấy kết quả.";
          }
        }
        $conn->close();
      }
      ?>
