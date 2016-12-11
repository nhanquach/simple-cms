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
  <div class="flow-text">
    <nav>
      <div class="nav-wrapper">
        <a href="./admin.php" class="brand-logo center">Trang chủ Admin</a>
      
        <ul class="right">
          <li><a href="admin.php?action=logout">Đăng xuất</a></li>
      </ul>
      </div>
    </nav>
  </div>
    <div class="container flow-text">

