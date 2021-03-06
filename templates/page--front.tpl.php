<div class="site-wrapper">
  
  <div class="top-bar">
    <div class="wrap">
      <?php print render($page['topbar']); ?>
    </div>
  </div>

  <!-- Header -->
  <header class="site-header <?php if(empty ($page['preface']) ): ?>no-preface<?php endif; ?> " role="banner">
    <div class="wrap">
      <!-- Logo -->
      <div class="logo">
          <?php print render($page['logo']); ?>
      </div>
      <!-- Main Navigation -->
      <div class="hamburger-menu"><a href="#menu-original"><div class="bar"></div></a></div>
      <?php if ($page['main_nav']): ?>
        <nav class="main-nav" role="navigation">
          <?php print render($page['main_nav']); ?>
        </nav>
      <?php endif; ?>
      </div>
  </header>

  <!-- Close Preface -->
  <?php if ($page['preface']): ?>
    <div class="preface cleafix">
      <?php print render($page['preface']); ?>
    </div>
  <?php endif; ?>

  <!-- Main -->
  <main id="content" class="<?php if(empty ($page['preface']) ): ?>no-preface<?php endif; ?> ">
      <?php if ($page['help']): ?>
          <?php print render($page['help']); ?>
      <?php endif; ?>

      <?php if ($page['sidebar_first']): ?>
        <aside class="sidebar-first" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>
      
      <?php if ($page['content']): ?>
          <?php print render($page['content']); ?>
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <aside class="sidebar-second" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>    
  </main>
    <?php if ($page['postscript']): ?>
      <div class="postscript">
        <div class="wrap">
          <?php print render($page['postscript']); ?>
        </div>
      </div>
    <?php endif; ?>

  <footer class="site-footer">
      <div class="wrap">
        <?php print render($page['footer']); ?>
        <p class="copy">&copy; COPYRIGHT <?php echo date("Y"); ?> KENTUCKY RIVER PROPERTIES. ALL RIGHTS RESERVED</p>
      </div>
  </footer>
</div>