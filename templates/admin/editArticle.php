<?php include "templates/include/headerOnAdmin.php" ?>
      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

          <li>
          <div class="input-field>
            <label for="title">Tiêu đề bài viết</label>
            <input type="text" name="title" id="title" required autofocus maxlength="255" 
              value="<?php echo htmlspecialchars( $results['article']->title )?>" />
            </div>
          </li>

          <li>
          <div class="input-field>
            <label for="summary">Tóm tắt bài viết</label>
            <textarea name="summary" id="summary" class="materialize-textarea"
               required maxlength="1000" 
              style="height: 5em;"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
            </div>
          </li>

          <li>
          <div class="input-field>
            <label for="content">Nội dung    
            
            <a class="waves-effect waves-light questionmark" href="#modal1">?</a>
            
            </label>
            <textarea name="content" id="content" class="materialize-textarea flow-text" 
              required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
          </div>
          </li>

          <li>
            <label for="publicationDate">Ngày đăng</label>
            <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" />
          </li>
        </ul>


<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Hướng dẫn</h4>
      <p>Chúng tôi hiện đang hỗ trợ sử dụng định dạng html để viết bài đăng: </p>
      <p> <code>&lt;img src="source"&gt;</code> để chèn hình vào bài viết. Để bo tròn các góc hình bạn có thể sử dụng
      thêm <code>class="roundimg"</code></p>
      <p> <code>&lt;h3&gt;</code> để viết tiêu đề của đoạn.</p>
      <p> <code>&lt;ul&gt;</code> và <code>&lt;li&gt;</code> để thêm bullet.</p>
      <p> <code>&lt;p&gt;</code> để phân đoạn.</p>
      <p><code>&lt;iframe src="https://www.youtube.com/embed/videoID"&gt;&lt;/iframe&gt;</code> để chèn video từ Youtube.
      (videoID là phần phía sau cùng của url sau watch?v= )</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>

        <div class="row">
          <input class="wave-effect btn col s12" type="submit" name="saveChanges" value="Lưu thay đổi" />
          </div>
      

<?php if ( $results['article']->id ) { ?>
      <div class="row">
          <input  class="wave-effect btn col s6" type="submit" formnovalidate name="cancel" value="Hủy" />
      <p><a class="btn red col s6" href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" 
        onclick="return confirm('Delete This Article?')">Xóa</a></p>

<?php } else { ?>
    <div class="row">
          <input  class="wave-effect btn col s12" type="submit" formnovalidate name="cancel" value="Hủy" />
    
<?php } ?>

</div>
</form>
<?php include "templates/include/footer.php" ?>

