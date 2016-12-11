<?php include "templates/include/header.php" ?>

      <h1>Tất cả bài đăng</h1>

      <ul id="headlines" class="archive">

<?php foreach ( $results['articles'] as $article ) { ?>

        <li class="card hoverable">
          
          <div class="datePub">
            <span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span>
          </div>
          <h4>
            <a class="" href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
            <?php echo htmlspecialchars( $article->title )?></a>
          </h4>
          <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
        </li>

<?php } ?>

      </ul>

      <p>Hiện đang có <?php echo $results['totalRows']?> bài đăng được lưu.</p>

      <a class="waves-effect btn left" href=".">Trở về trang chủ</a>

<?php include "templates/include/footer.php" ?>

