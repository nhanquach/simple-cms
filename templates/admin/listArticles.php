<?php include "templates/include/headerOnAdmin.php" ?>

      <h1>Tất cả các bài viết</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <table class="highlight bordered responsive-table">
        <tr>
          <th>Ngày đăng</th>
          <th>Tên bài đăng</th>
        </tr>

<?php foreach ( $results['articles'] as $article ) { ?>

        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
          <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
            <?php echo $article->title?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p>Tổng cộng <?php echo $results['totalRows']?> bài viết.</p>

      
      <div class="fixed-action-btn">
      <a href="admin.php?action=newArticle" class="btn-floating btn-large waves-effect waves-light 
      tooltipped red" data-position="left" data-delay="50" data-tooltip="Viết bài mới">+</a>
      </div>

<?php include "templates/include/footer.php" ?>

