<?php include "templates/include/header.php" ?>
      <h1 style="font-size: 4vw;"> 10 bài đăng mới nhất</h1>

      <ul id="headlines">

<?php foreach ( $results['articles'] as $article ) { ?>

        <li class="card hoverable">
          
          <div class="datePub">
            <span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span>
          </div>
          <h4>
            <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
            <?php echo htmlspecialchars( $article->title )?></a>
          </h4>
          <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
        </li>

<?php } ?>

      </ul>

      <a class="waves-effect btn" style="float: right" href="./?action=archive">Toàn bộ các bài viết</a>

<?php include "templates/include/footer.php" ?>