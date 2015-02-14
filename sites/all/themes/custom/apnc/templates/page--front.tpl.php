	<div id="site_title">
    <?php if ($site_name): ?>
      <a class="top" href="/"></a>
    <?php endif; ?>
	</div>

	<?php if ($main_menu): ?>
	  
	  <?php print drupal_render(menu_tree('main-menu')); ?>

	<?php endif; ?>

	<?php print render($page['header']); ?>
	
	<?php print $messages; ?>

	<div id="home_main">
		<?php print render($page['homepage_slideshow']); ?>

		<div id="home_search_and_links">
			<div id="home_search">
				<?php print render($page['homepage_search']); ?>
			</div>
			<!--<ul>
				<li><a href="/take-action">Take Action</a></li>
				<li><a href="http://www.networkforgood.org/donation/MakeDonation.aspx?ORGID2=364394374" title="Donate through Network for Good to Albany Park Neighborhood Council" target="_new">Donate</a></li>
				<li><a href="http://visitor.constantcontact.com/email.jsp?m=1101906894273" title="Join Albany Park Neighborhood Council Mailing List" target="_new">Mailing List</a></li>
				<li><a href="/opportunities">Opportunities</a></li>
			</ul>-->
      <?php print theme('links__menu-home-action-links', array(
        'links' => menu_navigation_links('menu-home-action-links'),
        'attributes' => array(
          'id' => 'home_action_links',
        ),
      )); ?>
		</div><!-- /home_search_and_links -->
	</div><!-- /home_main -->
	
	<?php print theme('links__menu-home-quick-links', array(
	    'links' => menu_navigation_links('menu-home-quick-links'),
	    'attributes' => array(
	      'id' => 'home_quick_links',
	    ),
	  )); ?>

	<div id="home_news">
		<?php print render($page['homepage_news']); ?>
	</div><!-- /home_news -->

	<div id="events">
		<?php print render($page['events_sidebar']); ?>
	</div><!-- /events -->

	<div id="footer">
		<?php print render($page['footer']); ?>
	</div><!-- /footer -->

<?php print render($page['bottom']); ?>
