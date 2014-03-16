	<div id="site_title">
    <?php if ($site_name): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="bottom">
      	<?php print $site_name; ?>
      </a>
      <a class="top" href="/"></a>
    <?php endif; ?>
	</div>

	<?php if ($main_menu): ?>

	  <?php print drupal_render(menu_tree('main-menu')); ?>

	<?php endif; ?>

	<?php print render($page['header']); ?>

	<div id="secondary_page">
		<?php print $messages; ?>
    <?php if ($tabs = render($tabs)): ?>
      <div class="tabs"><?php print $tabs; ?></div>
    <?php endif; ?>
    <?php print render($page['help']); ?>
		<div id="content">
			<?php print render($title_prefix); ?>
			<?php if ($title): ?>
      	<h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print render($page['content']); ?>
		</div> <!-- /content -->
		
		<?php print render($page['sidebar_content_right']); ?>

	</div> <!-- /secondary_page -->

	<div id="events">
		<?php print render($page['events_sidebar']); ?>
	</div><!-- /events -->

	<div id="footer">
		<?php print render($page['footer']); ?>
	</div><!-- /footer -->

<?php print render($page['bottom']); ?>