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
    <div class="wrap">
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
    </div>
        <?php if ($page['postscript']): ?>
        <div class="postscript">
          <?php print render($page['postscript']); ?>
        </div>
      <?php endif; ?>
  </main>

  <footer>
    <?php if ($page['footer']): ?>
      <div class="wrap">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </footer>
</div>