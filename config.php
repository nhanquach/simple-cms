<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Asia/Ho_Chi_Minh" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost; dbname=mycms" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 10 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "password" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  ?> 
  <div style="width:100%; display: block; margin: auto">
    <p>Lỗi: Cơ sở dữ liệu chưa được khởi tạo.</p>
    <h3>Tạo ngay bây giờ?</h3>
    <button type="button" id="btn">Tạo</button>  
  </div>
  <script>
    var btn = document.getElementById('btn');
    btn.addEventListener('click', function (){
      <?php
         echo "alert( '". createDB() ."' );"; 
      ?>
      location.reload();
    });
  </script>



  <?php
}

set_exception_handler( 'handleException' );
?>


<?php
function createDB(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $res = "";
    $conn = new mysqli($host, $user, $pass);
    //Check connection.
        if ($conn -> connect_error){
          $res = "Không kết nối được mySQL";
          die("Không kết nôi được mySQL");
        }
    $sql = "CREATE DATABASE mycms";
    
    if ($conn->query($sql) === TRUE) {
        
    } else {
        $res = "Không tạo được cơ sở dữ liệu";
        echo "console.log('Error creating database: '" . $conn->error;
    }

    $dbname = "mycms";
    $conn = new mysqli($host, $user, $pass, $dbname);
    $sql = "CREATE TABLE IF NOT EXISTS `articles` (
            `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
            `publicationDate` date NOT NULL,
            `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
            `summary` text NOT NULL,
            `content` mediumtext NOT NULL,
            PRIMARY KEY (`id`)
            ) 
            ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14;";
    
    if($conn->query($sql) === TRUE){
        
    }else{
      $res = "Không tạo được bảng trong cơ sở dữ liệu.";
    }

    if($res == "")
      return "Thành công";
    else
      return $res;
    $conn->close();
}
?>
