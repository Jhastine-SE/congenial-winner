<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">じゃんけんゲーム</a>
    <?php if (isset($_SESSION['userName'])): ?>
        <div class="d-flex mt-3">
             <div class="text-white pt-1">ようこそ、<?php echo $_SESSION['userName'] ?>さん </div>
             <form method="post" action="logout.php">
                 <button class="btn rounted btn-secondary btn-sm">ログアウト</button>
             </form>
         </div>
     <?php endif; ?>
  </div>
</nav>