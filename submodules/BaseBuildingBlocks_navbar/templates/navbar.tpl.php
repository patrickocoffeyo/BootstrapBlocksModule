<div class="navbar <?php echo isset($classes) ? $classes : ''; ?>">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-reorder"></i></a>
      <div class="nav-collapse">
        <ul class="nav">
          <?php echo render($menu); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
