<?php include "templates/include/header.php" ?>

      <form class="card" action="admin.php?action=login" method="post">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>
          <li><h3>Đăng nhập Admin</h3></li>
          <li>
            <label for="username" style="clear:both">Tên đăng nhập</label>
            <input type="text" name="username" id="username" placeholder="Tên đăng nhập Admin" required autofocus maxlength="20" />
          </li>

          <li>
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" placeholder="Mật khẩu" required maxlength="20" />
          </li>

        </ul>

        <div class="row">
        <div class="waves-effect btn s12" style="width:100%">
          <input type="submit" name="login" value="Đăng nhập" />
        </div>
        </div>

      </form>

<?php include "templates/include/footer.php" ?>

