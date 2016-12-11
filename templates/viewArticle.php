<?php include "templates/include/headerOnArticle.php" ?>

      <h1 class = "atitle"><?php echo htmlspecialchars( $results['article']->title )?></h1>
      <p class="pubDate">Được đăng lúc <?php echo date('j F Y', $results['article']->publicationDate)?></p>
      
      <div class="flow-text" style="padding: 1rem; font-style: italic; margin-bottom: 1rem; background-color: #eee;">
      <u>Tóm tắt</u>: <?php echo htmlspecialchars( $results['article']->summary )?></div>
      
      <div class="flow-text" style="text-align : justify "><?php echo $results['article']->content?></div>

<?php include "templates/include/footerOnArticle.php" ?>

