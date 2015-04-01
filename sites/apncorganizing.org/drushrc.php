<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'GcMSRM7sLb';
$options['db_name'] = 'apncorganizingor';
$options['db_user'] = 'apncorganizingor';
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.32',
      'description' => 'This platform is running Drupal 7.32',
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'name' => 'minimal',
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/profiles/minimal/minimal.profile',
      'project' => 'drupal',
      'info' => 
      array (
        'name' => 'Minimal',
        'description' => 'Start with only a few modules enabled.',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'dblog',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'acquia',
      ),
      'version' => '7.32',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'block' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'blog' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'book' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'color' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'comment' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'contact' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'contextual' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'dashboard' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.32',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'dblog' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'field' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'list' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'number' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'options' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'text' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'field_ui' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'file' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'filter' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'forum' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'help' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'image' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'locale' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'menu' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'node' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7014',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'openid' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.32',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'overlay' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'admin' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/admin/admin.module',
      'name' => 'admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Admin',
        'description' => 'UI helpers for Drupal admins and managers.',
        'package' => 'Administration',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'admin.admin.inc',
          1 => 'admin.install',
          2 => 'admin.module',
          3 => 'includes/admin.devel.inc',
          4 => 'includes/admin.theme.inc',
          5 => 'theme/admin-panes.tpl.php',
          6 => 'theme/admin-toolbar.tpl.php',
          7 => 'theme/theme.inc',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'admin',
        'datestamp' => '1292541646',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin',
      'version' => '7.x-2.0-beta3',
    ),
    'boost' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/boost/boost.module',
      'name' => 'boost',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boost',
        'description' => 'Caches generated output as a static file to be served directly from the webserver.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'boost.module',
          1 => 'boost.admin.inc',
          2 => 'boost.blocks.inc',
        ),
        'recommends' => 
        array (
          0 => 'expire',
        ),
        'configure' => 'admin/config/system/boost',
        'version' => '7.x-1.0',
        'project' => 'boost',
        'datestamp' => '1399056528',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'boost',
      'version' => '7.x-1.0',
    ),
    'boost_crawler' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/boost/boost_crawler/boost_crawler.module',
      'name' => 'boost_crawler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boost Crawler',
        'description' => 'Minimal crawler to regenerate the cache as pages are expired.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'boost_crawler.module',
        ),
        'recommends' => 
        array (
          0 => 'boost',
        ),
        'dependencies' => 
        array (
          0 => 'httprl',
          1 => 'expire',
        ),
        'configure' => 'admin/config/system/boost/crawler',
        'version' => '7.x-1.0',
        'project' => 'boost',
        'datestamp' => '1399056528',
        'php' => '5.2.4',
      ),
      'project' => 'boost',
      'version' => '7.x-1.0',
    ),
    'cdn' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/cdn/cdn.module',
      'name' => 'cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CDN',
        'description' => 'Integrates your site with a CDN, through altering file URLs.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/cdn',
        'files' => 
        array (
          0 => 'cdn.test',
        ),
        'version' => '7.x-2.6+3-dev',
        'project' => 'cdn',
        'datestamp' => '1392895444',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'cdn',
      'version' => '7.x-2.6+3-dev',
    ),
    'config_perms' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/config_perms/config_perms.module',
      'name' => 'config_perms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom Permissions',
        'description' => 'Allows additional permissions to be created and managed through an administration form.
<br /><small>Machine name: config_perms</small>',
        'core' => '7.x',
        'package' => 'Permissions',
        'configure' => 'admin/people/custom_permissions',
        'version' => '7.x-2.0+33-dev',
        'project' => 'config_perms',
        'datestamp' => '1412099050',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'config_perms',
      'version' => '7.x-2.0+33-dev',
    ),
    'css_emimage' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/css_emimage/css_emimage.module',
      'name' => 'css_emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CSS Embedded Images',
        'description' => 'Replaces image URLs in CSS files with embedded images when CSS optimization is enabled.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/performance',
        'version' => '7.x-1.3+3-dev',
        'project' => 'css_emimage',
        'datestamp' => '1380568223',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'css_emimage',
      'version' => '7.x-1.3+3-dev',
    ),
    'display_cache' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/display_cache/display_cache.module',
      'name' => 'display_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display Cache',
        'description' => 'Provides views and panels plugins to display rendered entities from cache.',
        'package' => 'Performance',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.0',
        'project' => 'display_cache',
        'datestamp' => '1399555728',
        'php' => '5.2.4',
      ),
      'project' => 'display_cache',
      'version' => '7.x-1.0',
    ),
    'esi' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/esi/esi.module',
      'name' => 'esi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Edge Side Includes',
        'description' => 'Allow Drupal components to be delivered via ESI (Edge-Side Includes).  Requires an ESI-capable proxy.',
        'package' => 'Caching',
        'recommends' => 
        array (
          0 => 'varnish',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-alpha1+16-dev',
        'project' => 'esi',
        'datestamp' => '1380577290',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'esi',
      'version' => '7.x-3.0-alpha1+16-dev',
    ),
    'esi_block' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/esi/modules/esi_block/esi_block.module',
      'name' => 'esi_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Block',
        'description' => 'Deliver Drupal blocks via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'esi',
        ),
        'files' => 
        array (
          0 => 'esi_block.test',
        ),
        'version' => '7.x-3.0-alpha1+16-dev',
        'project' => 'esi',
        'datestamp' => '1380577290',
        'php' => '5.2.4',
      ),
      'project' => 'esi',
      'version' => '7.x-3.0-alpha1+16-dev',
    ),
    'esi_context' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/esi/modules/esi_context/esi_context.module',
      'name' => 'esi_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Context integration',
        'description' => 'Deliver context-controlled blocks via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'esi',
          2 => 'esi_block',
        ),
        'version' => '7.x-3.0-alpha1+16-dev',
        'project' => 'esi',
        'datestamp' => '1380577290',
        'php' => '5.2.4',
      ),
      'project' => 'esi',
      'version' => '7.x-3.0-alpha1+16-dev',
    ),
    'esi_panels' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/esi/modules/esi_panels/esi_panels.module',
      'name' => 'esi_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Panels',
        'description' => 'Deliver panel-panes via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'panels',
          1 => 'page_manager',
          2 => 'esi',
        ),
        'version' => '7.x-3.0-alpha1+16-dev',
        'project' => 'esi',
        'datestamp' => '1380577290',
        'php' => '5.2.4',
      ),
      'project' => 'esi',
      'version' => '7.x-3.0-alpha1+16-dev',
    ),
    'expire' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/expire/expire.module',
      'name' => 'expire',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cache Expiration',
        'description' => 'Logic for expiring cached pages.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'configure' => 'admin/config/system/expire',
        'files' => 
        array (
          0 => 'includes/expire.api.inc',
          1 => 'includes/expire.comment.inc',
          2 => 'includes/expire.domain.inc',
          3 => 'includes/expire.interface.inc',
          4 => 'includes/expire.menu_link.inc',
          5 => 'includes/expire.node.inc',
          6 => 'includes/expire.user.inc',
          7 => 'includes/expire.votingapi.inc',
          8 => 'includes/expire.file.inc',
        ),
        'version' => '7.x-2.0-rc4',
        'project' => 'expire',
        'datestamp' => '1414746830',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'expire',
      'version' => '7.x-2.0-rc4',
    ),
    'filefield_nginx_progress' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/filefield_nginx_progress/filefield_nginx_progress.module',
      'name' => 'filefield_nginx_progress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'FileField Nginx Progress',
        'description' => 'Adds upload progress functionality for Nginx',
        'files' => 
        array (
          0 => 'filefield_nginx_progress.install',
          1 => 'filefield_nginx_progress.module',
        ),
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'package' => 'Fields',
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-2.3+1-dev',
        'project' => 'filefield_nginx_progress',
        'datestamp' => '1380579093',
      ),
      'project' => 'filefield_nginx_progress',
      'version' => '7.x-2.3+1-dev',
    ),
    'flood_control' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/flood_control/flood_control.module',
      'name' => 'flood_control',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flood control',
        'description' => 'Interface for hidden flood control options.',
        'core' => '7.x',
        'configure' => 'admin/config/system/flood-control',
        'version' => '7.x-1.x-dev',
        'project' => 'flood_control',
        'datestamp' => '1380579747',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'flood_control',
      'version' => '7.x-1.x-dev',
    ),
    'force_password_change' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/force_password_change/force_password_change.module',
      'name' => 'force_password_change',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Force Password Change',
        'description' => 'Allows administrators to force users to change their password',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'force_password_change.install',
          1 => 'force_password_change.module',
          2 => 'force_password_change.pages.inc',
        ),
        'version' => '7.x-1.0-rc2',
        'project' => 'force_password_change',
        'datestamp' => '1296546103',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'force_password_change',
      'version' => '7.x-1.0-rc2',
    ),
    'fpa' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/fpa/fpa.module',
      'name' => 'fpa',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fast Permissions Administration',
        'description' => 'Fast filtering on permissions administration form.',
        'core' => '7.x',
        'package' => 'Administration',
        'version' => '7.x-2.6',
        'project' => 'fpa',
        'datestamp' => '1408744435',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'fpa',
      'version' => '7.x-2.6',
    ),
    'httprl' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/httprl/httprl.module',
      'name' => 'httprl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HTTP Parallel Request Library',
        'description' => 'Send http requests out in parallel in a blocking or non-blocking manner.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'version' => '7.x-1.14',
        'project' => 'httprl',
        'datestamp' => '1388542110',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'httprl',
      'version' => '7.x-1.14',
    ),
    'js' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/js/js.module',
      'name' => 'js',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JavaScript callback handler',
        'description' => 'A high-performance JavaScript callback handler for 3rd party modules.',
        'package' => 'Performance',
        'core' => '7.x',
        'configure' => 'admin/config/system/js',
        'version' => '7.x-1.0+5-dev',
        'project' => 'js',
        'datestamp' => '1394174606',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'js',
      'version' => '7.x-1.0+5-dev',
    ),
    'js_test' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/js/tests/js_test.module',
      'name' => 'js_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JavaScript callback handler tests',
        'description' => 'Tests for the JS module.',
        'package' => 'Performance',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'js_test.test',
        ),
        'version' => '7.x-1.0+5-dev',
        'project' => 'js',
        'datestamp' => '1394174606',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'js',
      'version' => '7.x-1.0+5-dev',
    ),
    'login_security' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/login_security/login_security.module',
      'name' => 'login_security',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Login Security',
        'description' => 'Enable security options in the login flow of the site.',
        'files' => 
        array (
          0 => 'login_security.test',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/login_security',
        'version' => '7.x-1.9',
        'project' => 'login_security',
        'datestamp' => '1392987818',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'login_security',
      'version' => '7.x-1.9',
    ),
    'nocurrent_pass' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/nocurrent_pass/nocurrent_pass.module',
      'name' => 'nocurrent_pass',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'No Current Password',
        'description' => 'Make the "current password" requirement on the user edit form optional.',
        'package' => 'Other',
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'nocurrent_pass',
        'datestamp' => '1328692247',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'nocurrent_pass',
      'version' => '7.x-1.0',
    ),
    'panels_content_cache' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/panels_content_cache/panels_content_cache.module',
      'name' => 'panels_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels Content Cache',
        'core' => '7.x',
        'package' => 'Panels',
        'description' => 'A content based caching plugin for panels. Allows panel caches to be expired based on content creation / updates.',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'version' => '7.x-1.0',
        'project' => 'panels_content_cache',
        'datestamp' => '1367328019',
        'php' => '5.2.4',
      ),
      'project' => 'panels_content_cache',
      'version' => '7.x-1.0',
    ),
    'print' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print.module',
      'name' => 'print',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Printer-friendly pages',
        'description' => 'Generates a printer-friendly version of Drupal pages.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'files' => 
        array (
          0 => 'print_join_page_counter.inc',
        ),
        'dependencies' => 
        array (
          0 => 'node',
        ),
        'configure' => 'admin/config/user-interface/print',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_epub_phpepub' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_epub/lib_handlers/print_epub_phpepub/print_epub_phpepub.module',
      'name' => 'print_epub_phpepub',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHPePub library handler',
        'description' => 'EPUB generation library using PHPePub.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_epub',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_epub' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_epub/print_epub.module',
      'name' => 'print_epub',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'EPUB version',
        'description' => 'Adds the capability to export pages as EPUB. Requires an EPUB library and the respective handler module.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/epub',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_mail' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_mail/print_mail.module',
      'name' => 'print_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Send by email',
        'description' => 'Provides the capability to send the web page by email',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/email',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_pdf_dompdf' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_dompdf/print_pdf_dompdf.module',
      'name' => 'print_pdf_dompdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'dompdf library handler',
        'description' => 'PDF generation library using dompdf.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/dompdf',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_pdf_mpdf' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_mpdf/print_pdf_mpdf.module',
      'name' => 'print_pdf_mpdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'mPDF library handler',
        'description' => 'PDF generation library using mPDF.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_pdf_tcpdf' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_tcpdf/print_pdf_tcpdf.module',
      'name' => 'print_pdf_tcpdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TCPDF library handler',
        'description' => 'PDF generation library using TCPDF.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'files' => 
        array (
          0 => 'print_pdf_tcpdf.class.inc',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/tcpdf',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_pdf_wkhtmltopdf' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_wkhtmltopdf/print_pdf_wkhtmltopdf.module',
      'name' => 'print_pdf_wkhtmltopdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'wkhtmltopdf library handler',
        'description' => 'PDF generation library using wkhtmltopdf.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/wkhtmltopdf',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_pdf' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_pdf/print_pdf.module',
      'name' => 'print_pdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PDF version',
        'description' => 'Adds the capability to export pages as PDF. Requires a PDF library and the respective handler module.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/pdf',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'print_ui' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/print/print_ui/print_ui.module',
      'name' => 'print_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Printer-friendly pages UI',
        'description' => 'Manages the printer-friendly versions link display conditions. Without this module, those links are not displayed.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/ui',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'purge' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/purge/purge.module',
      'name' => 'purge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Purge',
        'description' => 'Purge clears urls from reverse proxy caches like Varnish and Squid by issuing HTTP PURGE requests.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'expire',
        ),
        'files ' => 
        array (
          0 => 'purge.module',
          1 => 'purge.inc',
        ),
        'configure' => 'admin/config/development/performance/purge',
        'version' => '7.x-1.6',
        'project' => 'purge',
        'datestamp' => '1358998406',
        'php' => '5.2.4',
      ),
      'project' => 'purge',
      'version' => '7.x-1.6',
    ),
    'readonlymode' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/readonlymode/readonlymode.module',
      'name' => 'readonlymode',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '9999',
      'info' => 
      array (
        'name' => 'Read Only Mode',
        'description' => 'This module will lock your site for any form postings.',
        'core' => '7.x',
        'package' => 'Administration',
        'configure' => 'admin/config/development/maintenance',
        'files' => 
        array (
          0 => 'readonlymode.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'readonlymode',
        'datestamp' => '1402574630',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'readonlymode',
      'version' => '7.x-1.2',
    ),
    'reroute_email' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/reroute_email/reroute_email.module',
      'name' => 'reroute_email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Reroute emails',
        'description' => 'Reroutes emails send from the site to a predefined email. Useful for test sites.',
        'package' => 'Development',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'reroute_email.test',
        ),
        'configure' => 'admin/config/development/reroute_email',
        'version' => '7.x-1.2',
        'project' => 'reroute_email',
        'datestamp' => '1414831432',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'reroute_email',
      'version' => '7.x-1.2',
    ),
    'robotstxt' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/robotstxt/robotstxt.module',
      'name' => 'robotstxt',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'robots.txt',
        'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'robotstxt.module',
          1 => 'robotstxt.admin.inc',
          2 => 'robotstxt.install',
        ),
        'configure' => 'admin/config/search/robotstxt',
        'version' => '7.x-1.2',
        'project' => 'robotstxt',
        'datestamp' => '1402738728',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'robotstxt',
      'version' => '7.x-1.2',
    ),
    'securesite' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/securesite/securesite.module',
      'name' => 'securesite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Secure Site',
        'description' => 'Enables HTTP Auth security or an HTML form to restrict site access.',
        'core' => '7.x',
        'configure' => 'admin/config/system/securesite',
        'files' => 
        array (
          0 => 'securesite.test',
          1 => 'securesite.inc',
        ),
        'version' => '7.x-2.0-beta2+4-dev',
        'project' => 'securesite',
        'datestamp' => '1396946353',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'securesite',
      'version' => '7.x-2.0-beta2+4-dev',
    ),
    'session_expire' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/session_expire/session_expire.module',
      'name' => 'session_expire',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session Expire',
        'description' => 'Expires rows from the session table older than a certain time.',
        'core' => '7.x',
        'configure' => 'admin/config/system/session_expire',
        'files' => 
        array (
          0 => 'session_expire.module',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'site_verify' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/site_verify/site_verify.module',
      'name' => 'site_verify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site Verification',
        'description' => 'Verifies ownership of a site for use with search engines.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'site_verify.module',
          1 => 'site_verify.admin.inc',
          2 => 'site_verify.install',
          3 => 'site_verify.test',
        ),
        'configure' => 'admin/config/search/verifications',
        'version' => '7.x-1.1',
        'project' => 'site_verify',
        'datestamp' => '1395656959',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'site_verify',
      'version' => '7.x-1.1',
    ),
    'speedy' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/speedy/speedy.module',
      'name' => 'speedy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Speedy',
        'description' => 'Tools to improve the front end performance of your site.',
        'core' => '7.x',
        'configure' => 'admin/config/development/performance',
        'version' => '7.x-1.15',
        'project' => 'speedy',
        'datestamp' => '1416498504',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'speedy',
      'version' => '7.x-1.15',
    ),
    'taxonomy_edge' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/taxonomy_edge/taxonomy_edge.module',
      'name' => 'taxonomy_edge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Edge',
        'description' => 'Edge lists for taxonomies',
        'package' => 'Taxonomy',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'configure' => 'admin/structure/taxonomy/edge',
        'files' => 
        array (
          0 => 'tests/tree.test',
          1 => 'tests/unit.test',
        ),
        'version' => '7.x-1.9',
        'project' => 'taxonomy_edge',
        'datestamp' => '1409109835',
        'php' => '5.2.4',
      ),
      'project' => 'taxonomy_edge',
      'version' => '7.x-1.9',
    ),
    'views_taxonomy_edge' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/taxonomy_edge/views_taxonomy_edge/views_taxonomy_edge.module',
      'name' => 'views_taxonomy_edge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Taxonomy Edge',
        'description' => 'Views for taxonomies using Taxonomy Edge',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy_edge',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_argument_term_edge_node_tid_depth.inc',
          1 => 'handlers/views_handler_argument_term_edge_node_tid_depth_modifier.inc',
          2 => 'handlers/views_handler_filter_term_edge_node_tid_depth.inc',
          3 => 'handlers/views_join_term_edge.inc',
          4 => 'handlers/views_handler_sort_term_edge_hierarchy.inc',
        ),
        'version' => '7.x-1.9',
        'project' => 'taxonomy_edge',
        'datestamp' => '1409109835',
        'php' => '5.2.4',
      ),
      'project' => 'taxonomy_edge',
      'version' => '7.x-1.9',
    ),
    'textile' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/textile/textile.module',
      'name' => 'textile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Textile',
        'description' => 'Allows content to be submitted using Textile, a simple, plain text syntax that is filtered into valid XHTML.',
        'package' => 'Input filters',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'vars (> 1.0)',
        ),
        'version' => '7.x-2.0-rc11',
        'project' => 'textile',
        'datestamp' => '1319231138',
        'php' => '5.2.4',
      ),
      'project' => 'textile',
      'version' => '7.x-2.0-rc11',
    ),
    'variable_clean' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/variable_clean/variable_clean.module',
      'name' => 'variable_clean',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable Cleanup',
        'description' => 'Allows you to remove variables not currently used.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_clean.module',
          1 => 'variable_clean.test',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'variable_clean',
        'datestamp' => '1382151358',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'variable_clean',
      'version' => '7.x-1.x-dev',
    ),
    'vars' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/vars/vars.module',
      'name' => 'vars',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable API',
        'description' => 'Implements an API to handle persistent variables.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'vars.classes.inc',
          1 => 'tests/vars.test',
        ),
        'version' => '7.x-2.0-alpha10',
        'project' => 'vars',
        'datestamp' => '1318969538',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'vars',
      'version' => '7.x-2.0-alpha10',
    ),
    'views404' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/views404/views404.module',
      'name' => 'views404',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views 404',
        'description' => 'Return 404 if the path doesn\'t match the view path.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'views404',
        'datestamp' => '1382152094',
        'php' => '5.2.4',
      ),
      'project' => 'views404',
      'version' => '7.x-1.x-dev',
    ),
    'views_accelerator' => 
    array (
      'filename' => '/data/all/021/o_contrib_seven/views_accelerator/views_accelerator.module',
      'name' => 'views_accelerator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Accelerator',
        'description' => 'Performance boost for views that are receptive to render optimisations.',
        'core' => '7.x',
        'configure' => 'admin/config/system/views-accelerator',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_cache_none_accelerated.inc',
          1 => 'views/plugins/views_plugin_cache_none_debug.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_accelerator',
        'datestamp' => '1404551329',
        'php' => '5.2.4',
      ),
      'project' => 'views_accelerator',
      'version' => '7.x-1.0-alpha2',
    ),
    'path' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'php' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'poll' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'rdf' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'search' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'shortcut' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'simpletest' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud.test',
          10 => 'tests/entity_crud_hook_test.test',
          11 => 'tests/entity_query.test',
          12 => 'tests/error.test',
          13 => 'tests/file.test',
          14 => 'tests/filetransfer.test',
          15 => 'tests/form.test',
          16 => 'tests/graph.test',
          17 => 'tests/image.test',
          18 => 'tests/lock.test',
          19 => 'tests/mail.test',
          20 => 'tests/menu.test',
          21 => 'tests/module.test',
          22 => 'tests/pager.test',
          23 => 'tests/password.test',
          24 => 'tests/path.test',
          25 => 'tests/registry.test',
          26 => 'tests/schema.test',
          27 => 'tests/session.test',
          28 => 'tests/tablesort.test',
          29 => 'tests/theme.test',
          30 => 'tests/unicode.test',
          31 => 'tests/update.test',
          32 => 'tests/xmlrpc.test',
          33 => 'tests/upgrade/upgrade.test',
          34 => 'tests/upgrade/upgrade.comment.test',
          35 => 'tests/upgrade/upgrade.filter.test',
          36 => 'tests/upgrade/upgrade.forum.test',
          37 => 'tests/upgrade/upgrade.locale.test',
          38 => 'tests/upgrade/upgrade.menu.test',
          39 => 'tests/upgrade/upgrade.node.test',
          40 => 'tests/upgrade/upgrade.taxonomy.test',
          41 => 'tests/upgrade/upgrade.trigger.test',
          42 => 'tests/upgrade/upgrade.translatable.test',
          43 => 'tests/upgrade/upgrade.upload.test',
          44 => 'tests/upgrade/upgrade.user.test',
          45 => 'tests/upgrade/update.aggregator.test',
          46 => 'tests/upgrade/update.trigger.test',
          47 => 'tests/upgrade/update.field.test',
          48 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'statistics' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'syslog' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'system' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7079',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'taxonomy' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'toolbar' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.32',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'tracker' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'translation' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'trigger' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'update' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.32',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'user' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'acquia' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/profiles/acquia/acquia.profile',
      'name' => 'acquia',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Acquia Drupal',
        'distribution_name' => 'Acquia Drupal',
        'description' => 'Acquia enchanced Drupal.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
          21 => 'token',
          22 => 'pathauto',
          23 => 'acquia_agent',
          24 => 'acquia_spi',
        ),
        'files' => 
        array (
          0 => 'acquia.profile',
        ),
        'acquia' => '1',
        'version' => '7.x-1.38',
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.x-1.38',
    ),
    'acquia_agent' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/profiles/acquia/modules/acquia_connector/acquia_agent/acquia_agent.module',
      'name' => 'acquia_agent',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia agent',
        'description' => 'Allows Drupal to securely communicate with the Acquia Network, and checks for updates to Acquia Drupal.',
        'package' => 'Acquia Network Connector',
        'core' => '7.x',
        'configure' => 'admin/config/system/acquia-agent',
        'files' => 
        array (
          0 => 'tests/acquia_agent.test',
        ),
        'php' => '5.2',
        'version' => '7.x-2.14',
        'project' => 'acquia_connector',
        'datestamp' => '1397136254',
        'acquia' => '1',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'acquia_connector',
      'version' => '7.x-2.14',
    ),
    'acquia_spi' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/profiles/acquia/modules/acquia_connector/acquia_spi/acquia_spi.module',
      'name' => 'acquia_spi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia Site Profile Information',
        'description' => 'Sends detailed information about your Drupal site (status, info, debugging, etc...) to the Acquia Network.',
        'package' => 'Acquia Network Connector',
        'php' => '5.0',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'acquia_agent',
        ),
        'files' => 
        array (
          0 => 'tests/acquia_spi.test',
        ),
        'version' => '7.x-2.14',
        'project' => 'acquia_connector',
        'datestamp' => '1397136254',
        'acquia' => '1',
      ),
      'project' => 'acquia_connector',
      'version' => '7.x-2.14',
    ),
    'pathauto' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/profiles/acquia/modules/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.2',
        'project' => 'pathauto',
        'datestamp' => '1344525185',
        'acquia' => '1',
        'php' => '5.2.4',
      ),
      'project' => 'pathauto',
      'version' => '7.x-1.2',
    ),
    'sqlsrv' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/profiles/acquia/modules/sqlsrv/sqlsrv.module',
      'name' => 'sqlsrv',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SQL Server',
        'description' => 'Driver for SQL Server and SQL Azure.',
        'core' => '7.x',
        'package' => 'Database engines',
        'required' => true,
        'files' => 
        array (
          0 => 'tests/sqlsrv.schema.test',
          1 => 'tests/sqlsrv.select.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'sqlsrv',
        'datestamp' => '1326470746',
        'acquia' => '1',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'sqlsrv',
      'version' => '7.x-1.2',
    ),
    'minimal' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/profiles/minimal/minimal.profile',
      'name' => 'minimal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Minimal',
        'description' => 'Start with only a few modules enabled.',
        'version' => '7.32',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'dblog',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'advagg' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/advagg/advagg.module',
      'name' => 'advagg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced CSS/JS Aggregation',
        'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'configure' => 'admin/config/development/performance/advagg',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_bundler' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/advagg/advagg_bundler/advagg_bundler.module',
      'name' => 'advagg_bundler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Bundler',
        'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/bundler',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_css_cdn' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/advagg/advagg_css_cdn/advagg_css_cdn.module',
      'name' => 'advagg_css_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN CSS',
        'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_css_compress' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/advagg/advagg_css_compress/advagg_css_compress.module',
      'name' => 'advagg_css_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress CSS',
        'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/css-compress',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_js_cdn' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/advagg/advagg_js_cdn/advagg_js_cdn.module',
      'name' => 'advagg_js_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN Javascript',
        'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_js_compress' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/advagg/advagg_js_compress/advagg_js_compress.module',
      'name' => 'advagg_js_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress Javascript',
        'description' => 'Compress Javascript with a 3rd party compressor, JSMin+ currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/js-compress',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_mod' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/advagg/advagg_mod/advagg_mod.module',
      'name' => 'advagg_mod',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Modifier',
        'description' => 'Allows one to alter the CSS and JS array.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/mod',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'advagg_validator' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/advagg/advagg_validator/advagg_validator.module',
      'name' => 'advagg_validator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CSS/JS Validator',
        'description' => 'Validate the CSS & JS files used in Aggregation for syntax errors.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/validator',
        'version' => '7.x-2.7',
        'project' => 'advagg',
        'datestamp' => '1402608232',
        'php' => '5.2.4',
      ),
      'project' => 'advagg',
      'version' => '7.x-2.7',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7205',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'backup_migrate.module',
          1 => 'backup_migrate.install',
          2 => 'includes/destinations.inc',
          3 => 'includes/profiles.inc',
          4 => 'includes/schedules.inc',
        ),
        'configure' => 'admin/config/system/backup_migrate',
        'version' => '7.x-2.8',
        'project' => 'backup_migrate',
        'datestamp' => '1383686305',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'backup_migrate',
      'version' => '7.x-2.8',
    ),
    'bean' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/bean/bean.module',
      'name' => 'bean',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bean',
        'description' => 'Create Bean (Block Entities)',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'bean.module',
          1 => 'bean.test',
          2 => 'includes/bean.core.inc',
          3 => 'includes/bean.info.inc',
          4 => 'includes/bean.pages.inc',
          5 => 'plugins/base.inc',
        ),
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'entity',
          2 => 'ctools',
        ),
        'version' => '7.x-1.0-beta9',
        'project' => 'bean',
        'datestamp' => '1322880637',
        'php' => '5.2.4',
      ),
      'project' => 'bean',
      'version' => '7.x-1.0-beta9',
    ),
    'bean_admin_ui' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/bean/bean_admin_ui/bean_admin_ui.module',
      'name' => 'bean_admin_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bean Admin UI',
        'description' => 'Add the ability to create Block Types in the UI',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'bean_admin_ui.module',
          1 => 'plugins/custom.inc',
          2 => 'includes/features.inc',
        ),
        'dependencies' => 
        array (
          0 => 'bean',
        ),
        'version' => '7.x-1.0-beta9',
        'project' => 'bean',
        'datestamp' => '1322880637',
        'php' => '5.2.4',
      ),
      'project' => 'bean',
      'version' => '7.x-1.0-beta9',
    ),
    'better_formats' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/better_formats/better_formats.module',
      'name' => 'better_formats',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Better Formats',
        'description' => 'Enhances the core input format system by managing input format defaults and settings.',
        'core' => '7.x',
        'configure' => 'admin/config/content/formats',
        'version' => '7.x-1.0-beta1+2-dev',
        'project' => 'better_formats',
        'datestamp' => '1380555927',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'better_formats',
      'version' => '7.x-1.0-beta1+2-dev',
    ),
    'blockcache_alter' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/blockcache_alter/blockcache_alter.module',
      'name' => 'blockcache_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Cache Alter',
        'description' => 'Alter the cache settings per block.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'version' => '7.x-1.0+4-dev',
        'project' => 'blockcache_alter',
        'datestamp' => '1380556229',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'blockcache_alter',
      'version' => '7.x-1.0+4-dev',
    ),
    'blockreference' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/blockreference/blockreference.module',
      'name' => 'blockreference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block reference',
        'description' => 'Defines a field type for referencing a block from a node.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
          2 => 'block',
        ),
        'version' => '7.x-1.9',
        'project' => 'blockreference',
        'datestamp' => '1314436018',
        'php' => '5.2.4',
      ),
      'project' => 'blockreference',
      'version' => '7.x-1.9',
    ),
    'ckeditor' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ckeditor/ckeditor.module',
      'name' => 'ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CKEditor',
        'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
        'core' => '7.x',
        'package' => 'User interface',
        'configure' => 'admin/config/content/ckeditor',
        'version' => '7.x-1.16',
        'project' => 'ckeditor',
        'datestamp' => '1413311935',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ckeditor',
      'version' => '7.x-1.16',
    ),
    'conditional_fields' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/conditional_fields/conditional_fields.module',
      'name' => 'conditional_fields',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Conditional Fields',
        'description' => 'Define dependencies between fields based on their states and values.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'configure' => 'admin/structure/dependencies',
        'version' => '7.x-3.0-alpha1',
        'project' => 'conditional_fields',
        'datestamp' => '1384798705',
        'php' => '5.2.4',
      ),
      'project' => 'conditional_fields',
      'version' => '7.x-3.0-alpha1',
    ),
    'contemplate' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/contemplate/contemplate.module',
      'name' => 'contemplate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6102',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Content Templates',
        'description' => 'Create templates to customize output of teaser and body content.',
        'package' => 'CCK',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contemplate.module',
          1 => 'contemplate.test',
        ),
        'version' => '7.x-1.0-rc3',
        'project' => 'contemplate',
        'datestamp' => '1316480802',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'contemplate',
      'version' => '7.x-1.0-rc3',
    ),
    'bulk_export' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'ctools' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6008',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/math-expr.inc',
          2 => 'includes/stylizer.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'page_manager' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'stylizer' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'term_depth' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'views_content' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.4',
    ),
    'date' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Makes date/time fields available.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date_admin.inc',
          1 => 'date_content_generate.inc',
          2 => 'date_elements.inc',
          3 => 'date_repeat.inc',
          4 => 'date.install',
          5 => 'date.module',
          6 => 'date.theme',
          7 => 'date.tokens.inc',
          8 => 'date.views.inc',
          9 => 'tests/date_api.test',
          10 => 'tests/date.test',
          11 => 'tests/date_field.test',
          12 => 'tests/date_validation.test',
          13 => 'tests/date_timezone.test',
        ),
        'version' => '7.x-2.0-alpha5',
        'project' => 'date',
        'datestamp' => '1322563238',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'date_api' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_api.module',
          1 => 'date_api_elements.inc',
          2 => 'date_api_ical.inc',
          3 => 'date_api_sql.inc',
          4 => 'date_api.admin.inc',
          5 => 'date_api.install',
          6 => 'theme/theme.inc',
        ),
        'version' => '7.x-2.0-alpha5',
        'project' => 'date',
        'datestamp' => '1322563238',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'date_context' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date_context/date_context.module',
      'name' => 'date_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Context',
        'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'date_context.module',
        ),
        'version' => '7.x-2.0-alpha5',
        'project' => 'date',
        'datestamp' => '1322563238',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'date_migrate' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date_migrate/date_migrate.module',
      'name' => 'date_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Migration',
        'description' => 'Provides support for importing into date fields with the Migrate module.',
        'core' => '7.x',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'migrate',
          1 => 'date',
        ),
        'files' => 
        array (
          0 => 'date.migrate.inc',
          1 => 'date_migrate.test',
        ),
        'version' => '7.x-2.0-alpha5',
        'project' => 'date',
        'datestamp' => '1322563238',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
      'name' => 'date_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_repeat',
          2 => 'date_migrate',
          3 => 'features',
          4 => 'migrate',
        ),
        'description' => 'Examples of migrating with the Date module',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-date_migrate_example-body',
            1 => 'node-date_migrate_example-field_date',
            2 => 'node-date_migrate_example-field_date_range',
            3 => 'node-date_migrate_example-field_date_repeat',
            4 => 'node-date_migrate_example-field_datestamp',
            5 => 'node-date_migrate_example-field_datestamp_range',
            6 => 'node-date_migrate_example-field_datetime',
            7 => 'node-date_migrate_example-field_datetime_range',
          ),
          'node' => 
          array (
            0 => 'date_migrate_example',
          ),
        ),
        'files' => 
        array (
          0 => 'date_migrate_example.migrate.inc',
        ),
        'name' => 'Date Migration Example',
        'package' => 'Features',
        'project' => 'date',
        'version' => '7.x-2.0-alpha5',
        'datestamp' => '1322563238',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'date_popup' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/content/date_popup',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'themes/datepicker.1.7.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_popup.module',
          1 => 'date_popup.install',
          2 => 'date_popup.js',
          3 => 'themes/calendar.css',
          4 => 'themes/datepicker.css',
          5 => 'themes/timeentry.css',
        ),
        'version' => '7.x-2.0-alpha5',
        'project' => 'date',
        'datestamp' => '1322563238',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'date_repeat' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date_repeat_calc.inc',
          1 => 'date_repeat_form.inc',
          2 => 'date_repeat.install',
          3 => 'date_repeat.module',
          4 => 'tests/date_repeat.test',
        ),
        'version' => '7.x-2.0-alpha5',
        'project' => 'date',
        'datestamp' => '1322563238',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'date_tools' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/structure/date',
        'files' => 
        array (
          0 => 'date_tools.module',
          1 => 'tests/date_tools.test',
        ),
        'version' => '7.x-2.0-alpha5',
        'project' => 'date',
        'datestamp' => '1322563238',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'date_views' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Views',
        'description' => 'Views integration for date fields and date functionality.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date_views.module',
          1 => 'includes/date_handler_field_multiple.inc',
          2 => 'includes/date_views_argument_handler.inc',
          3 => 'includes/date_views_argument_handler_simple.inc',
          4 => 'includes/date_views_fields.inc',
          5 => 'includes/date_views_filter_handler.inc',
          6 => 'includes/date_views_filter_handler_simple.inc',
          7 => 'includes/date_views.views_default.inc',
          8 => 'includes/date_views.views.inc',
          9 => 'includes/date_views_plugin_pager.inc',
          10 => 'includes/date_navigation_plugin_style.inc',
          11 => 'includes/date_plugin_display_attachment.inc',
          12 => 'theme/theme.inc',
          13 => 'theme/date-navigation.tpl.php',
          14 => 'theme/date-views-pager.tpl.php',
          15 => 'theme/date-valarm.tpl.php',
          16 => 'theme/date-vcalendar.tpl.php',
          17 => 'theme/date-vevent.tpl.php',
          18 => 'theme/date-views-filter-form.tpl.php',
        ),
        'version' => '7.x-2.0-alpha5',
        'project' => 'date',
        'datestamp' => '1322563238',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-alpha5',
    ),
    'devel' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'devel_generate' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'devel',
        ),
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'entity' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.info.inc',
          2 => 'entity.rules.inc',
          3 => 'entity.test',
          4 => 'includes/entity.inc',
          5 => 'includes/entity.controller.inc',
          6 => 'includes/entity.ui.inc',
          7 => 'includes/entity.wrapper.inc',
          8 => 'views/entity.views.inc',
          9 => 'views/handlers/entity_views_field_handler_helper.inc',
          10 => 'views/handlers/entity_views_handler_field_boolean.inc',
          11 => 'views/handlers/entity_views_handler_field_date.inc',
          12 => 'views/handlers/entity_views_handler_field_duration.inc',
          13 => 'views/handlers/entity_views_handler_field_entity.inc',
          14 => 'views/handlers/entity_views_handler_field_field.inc',
          15 => 'views/handlers/entity_views_handler_field_numeric.inc',
          16 => 'views/handlers/entity_views_handler_field_options.inc',
          17 => 'views/handlers/entity_views_handler_field_text.inc',
          18 => 'views/handlers/entity_views_handler_field_uri.inc',
          19 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          20 => 'views/handlers/entity_views_handler_relationship.inc',
          21 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'entity',
        'datestamp' => '1320914735',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.0-rc1',
    ),
    'entity_token' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'entity',
        'datestamp' => '1320914735',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.0-rc1',
    ),
    'entitycache' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/entitycache/entitycache.module',
      'name' => 'entitycache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache',
        'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'files' => 
        array (
          0 => 'entitycache.module',
          1 => 'entitycache.comment.inc',
          2 => 'entitycache.taxonomy.inc',
          3 => 'entitycache.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'entitycache',
        'datestamp' => '1315901203',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entitycache',
      'version' => '7.x-1.1',
    ),
    'field_group' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/field_group/field_group.module',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Fieldgroup',
        'description' => 'Fieldgroup',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field_group.install',
          1 => 'field_group.module',
          2 => 'field_group.field_ui.inc',
          3 => 'field_group.form.inc',
          4 => 'field_group.features.inc',
          5 => 'tests/field_group.ui.test',
          6 => 'tests/field_group.display.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'field_group',
        'datestamp' => '1380124361',
        'php' => '5.2.4',
      ),
      'project' => 'field_group',
      'version' => '7.x-1.3',
    ),
    'field_group_test' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/field_group/tests/field_group_test.module',
      'name' => 'field_group_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fieldgroup Test',
        'description' => 'Test module for fieldgroup',
        'core' => '7.x',
        'package' => 'Fieldgroup',
        'version' => '7.x-1.3',
        'project' => 'field_group',
        'datestamp' => '1380124361',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'field_group',
      'version' => '7.x-1.3',
    ),
    'file_entity' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/file_entity/file_entity.module',
      'name' => 'file_entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7104',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File entity',
        'description' => 'Extends Drupal file entities to be fieldable and viewable.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'file',
          2 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'views/views_handler_argument_file_type.inc',
          1 => 'views/views_handler_field_file_type.inc',
          2 => 'views/views_handler_filter_file_type.inc',
          3 => 'views/views_plugin_row_file_view.inc',
          4 => 'tests/file_entity.test',
        ),
        'version' => '7.x-2.0-unstable2',
        'project' => 'file_entity',
        'datestamp' => '1318435604',
        'php' => '5.2.4',
      ),
      'project' => 'file_entity',
      'version' => '7.x-2.0-unstable2',
    ),
    'imagefield_crop' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/imagefield_crop/imagefield_crop.module',
      'name' => 'imagefield_crop',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image crop',
        'description' => 'Add cropping ability to images using javascript',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'files' => 
        array (
          0 => 'imagefield_crop.module',
        ),
        'version' => '7.x-1.1',
        'project' => 'imagefield_crop',
        'datestamp' => '1360049318',
        'php' => '5.2.4',
      ),
      'project' => 'imagefield_crop',
      'version' => '7.x-1.1',
    ),
    'jquery_update' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jquery_update.module',
          1 => 'jquery_update.install',
        ),
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-2.4',
        'project' => 'jquery_update',
        'datestamp' => '1396482246',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'jquery_update',
      'version' => '7.x-2.4',
    ),
    'link' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'link.module',
          1 => 'link.install',
          2 => 'tests/link.test',
          3 => 'tests/link.attribute.test',
          4 => 'tests/link.crud.test',
          5 => 'tests/link.crud_browser.test',
          6 => 'tests/link.token.test',
          7 => 'tests/link.validate.test',
          8 => 'views/link_views_handler_argument_target.inc',
          9 => 'views/link_views_handler_filter_protocol.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'link',
        'datestamp' => '1319392535',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'link',
      'version' => '7.x-1.0',
    ),
    'media' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/media/media.module',
      'name' => 'media',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7020',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media',
        'description' => 'Provides the core Media API',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file_entity',
          1 => 'image',
        ),
        'files' => 
        array (
          0 => 'includes/MediaReadOnlyStreamWrapper.inc',
          1 => 'test/media.types.test',
          2 => 'test/media.entity.test',
        ),
        'version' => '7.x-1.0-rc2',
        'project' => 'media',
        'datestamp' => '1318450906',
        'php' => '5.2.4',
      ),
      'project' => 'media',
      'version' => '7.x-1.0-rc2',
    ),
    'media_internet' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
      'name' => 'media_internet',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media Internet Sources',
        'description' => 'Provides an API for accessing media on various internet services',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
        ),
        'files' => 
        array (
          0 => 'media_internet.module',
        ),
        'version' => '7.x-1.0-rc2',
        'project' => 'media',
        'datestamp' => '1318450906',
        'php' => '5.2.4',
      ),
      'project' => 'media',
      'version' => '7.x-1.0-rc2',
    ),
    'media_flickr' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/media_flickr/media_flickr.module',
      'name' => 'media_flickr',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: Flickr',
        'description' => 'Integrates Flickr.com photos and photosets with Media.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
          1 => 'media_internet',
        ),
        'files' => 
        array (
          0 => 'media_flickr.module',
          1 => 'includes/media_flickr.admin.inc',
          2 => 'includes/media_flickr.utilities.inc',
          3 => 'includes/MediaFlickrStreamWrapper.inc',
          4 => 'includes/MediaInternetFlickrHandler.inc',
          5 => 'includes/MediaFlickrStyles.inc',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'media_flickr',
        'datestamp' => '1344959823',
        'php' => '5.2.4',
      ),
      'project' => 'media_flickr',
      'version' => '7.x-1.0-alpha3',
    ),
    'media_youtube' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/media_youtube/media_youtube.module',
      'name' => 'media_youtube',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: YouTube',
        'description' => 'Provides YouTube support to the Media module.',
        'package' => 'Media',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'media_youtube.module',
          1 => 'includes/MediaYouTubeStreamWrapper.inc',
          2 => 'includes/MediaInternetYouTubeHandler.inc',
          3 => 'includes/media_youtube.styles.inc',
          4 => 'includes/MediaYouTubeStyles.inc',
        ),
        'dependencies' => 
        array (
          0 => 'media_internet',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'media_youtube',
        'datestamp' => '1306891017',
        'php' => '5.2.4',
      ),
      'project' => 'media_youtube',
      'version' => '7.x-1.0-alpha5',
    ),
    'overlay_paths' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/overlay_paths/overlay_paths.module',
      'name' => 'overlay_paths',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths',
        'description' => 'Allows other developers to define paths that should use the overlay, but not an admin theme',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay',
        ),
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'project' => 'overlay_paths',
      'version' => '7.x-1.3',
    ),
    'overlay_paths_example' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/overlay_paths/overlay_paths_example/overlay_paths_example.module',
      'name' => 'overlay_paths_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths - Example',
        'description' => 'A demonstration module for Overlay paths that provides a UI for setting paths that should appear in the overlay.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay_paths',
        ),
        'configure' => 'admin/config/system/overlay_paths_example',
        'hidden' => 'true',
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'project' => 'overlay_paths',
      'version' => '7.x-1.3',
    ),
    'overlay_paths_ui' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/overlay_paths/overlay_paths_ui/overlay_paths_ui.module',
      'name' => 'overlay_paths_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths UI',
        'description' => 'Provides a UI for overlay paths, allow site builders to select paths that should appear in the overlay.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay_paths',
        ),
        'configure' => 'admin/config/system/overlay_paths_ui',
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'project' => 'overlay_paths',
      'version' => '7.x-1.3',
    ),
    'node_reference' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/references/node_reference/node_reference.module',
      'name' => 'node_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'files' => 
        array (
          0 => 'node_reference.test',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'references',
        'datestamp' => '1305236816',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.0-beta3',
    ),
    'references' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/references/references.module',
      'name' => 'references',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'References',
        'description' => 'Defines common base features for the various reference field types.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'views/references_handler_relationship.inc',
          1 => 'views/references_handler_argument.inc',
          2 => 'views/references_plugin_display.inc',
          3 => 'views/references_plugin_style.inc',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'references',
        'datestamp' => '1305236816',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.0-beta3',
    ),
    'user_reference' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/references/user_reference/user_reference.module',
      'name' => 'user_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'references',
        'datestamp' => '1305236816',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.0-beta3',
    ),
    'token' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.module',
          1 => 'token.install',
          2 => 'token.tokens.inc',
          3 => 'token.pages.inc',
          4 => 'token.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'token',
        'datestamp' => '1311709319',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.0-beta3',
    ),
    'views' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_text.inc',
          2 => 'handlers/views_handler_area_view.inc',
          3 => 'handlers/views_handler_argument.inc',
          4 => 'handlers/views_handler_argument_date.inc',
          5 => 'handlers/views_handler_argument_formula.inc',
          6 => 'handlers/views_handler_argument_many_to_one.inc',
          7 => 'handlers/views_handler_argument_null.inc',
          8 => 'handlers/views_handler_argument_numeric.inc',
          9 => 'handlers/views_handler_argument_string.inc',
          10 => 'handlers/views_handler_field.inc',
          11 => 'handlers/views_handler_field_counter.inc',
          12 => 'handlers/views_handler_field_boolean.inc',
          13 => 'handlers/views_handler_field_custom.inc',
          14 => 'handlers/views_handler_field_date.inc',
          15 => 'handlers/views_handler_field_markup.inc',
          16 => 'handlers/views_handler_field_math.inc',
          17 => 'handlers/views_handler_field_numeric.inc',
          18 => 'handlers/views_handler_field_prerender_list.inc',
          19 => 'handlers/views_handler_field_time_interval.inc',
          20 => 'handlers/views_handler_field_serialized.inc',
          21 => 'handlers/views_handler_field_url.inc',
          22 => 'handlers/views_handler_filter.inc',
          23 => 'handlers/views_handler_filter_boolean_operator.inc',
          24 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          25 => 'handlers/views_handler_filter_date.inc',
          26 => 'handlers/views_handler_filter_equality.inc',
          27 => 'handlers/views_handler_filter_in_operator.inc',
          28 => 'handlers/views_handler_filter_many_to_one.inc',
          29 => 'handlers/views_handler_filter_numeric.inc',
          30 => 'handlers/views_handler_filter_string.inc',
          31 => 'handlers/views_handler_relationship.inc',
          32 => 'handlers/views_handler_relationship_groupwise_max.inc',
          33 => 'handlers/views_handler_sort.inc',
          34 => 'handlers/views_handler_sort_date.inc',
          35 => 'handlers/views_handler_sort_formula.inc',
          36 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          37 => 'handlers/views_handler_sort_random.inc',
          38 => 'includes/base.inc',
          39 => 'includes/handlers.inc',
          40 => 'includes/plugins.inc',
          41 => 'includes/view.inc',
          42 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          43 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          44 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          45 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          46 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          47 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          48 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          49 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          50 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          51 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          52 => 'modules/comment/views_handler_field_comment.inc',
          53 => 'modules/comment/views_handler_field_comment_depth.inc',
          54 => 'modules/comment/views_handler_field_comment_link.inc',
          55 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          56 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          57 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          58 => 'modules/comment/views_handler_field_comment_node_link.inc',
          59 => 'modules/comment/views_handler_field_comment_username.inc',
          60 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          61 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          62 => 'modules/comment/views_handler_field_node_comment.inc',
          63 => 'modules/comment/views_handler_field_node_new_comments.inc',
          64 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          65 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          66 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          67 => 'modules/comment/views_handler_filter_node_comment.inc',
          68 => 'modules/comment/views_handler_sort_comment_thread.inc',
          69 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          70 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          71 => 'modules/comment/views_plugin_row_comment_rss.inc',
          72 => 'modules/comment/views_plugin_row_comment_view.inc',
          73 => 'modules/contact/views_handler_field_contact_link.inc',
          74 => 'modules/field/views_handler_field_field.inc',
          75 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          76 => 'modules/field/views_handler_filter_field_list.inc',
          77 => 'modules/filter/views_handler_field_filter_format_name.inc',
          78 => 'modules/locale/views_handler_argument_locale_group.inc',
          79 => 'modules/locale/views_handler_argument_locale_language.inc',
          80 => 'modules/locale/views_handler_field_locale_group.inc',
          81 => 'modules/locale/views_handler_field_locale_language.inc',
          82 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          83 => 'modules/locale/views_handler_filter_locale_group.inc',
          84 => 'modules/locale/views_handler_filter_locale_language.inc',
          85 => 'modules/locale/views_handler_filter_locale_version.inc',
          86 => 'modules/node/views_handler_argument_dates_various.inc',
          87 => 'modules/node/views_handler_argument_node_language.inc',
          88 => 'modules/node/views_handler_argument_node_nid.inc',
          89 => 'modules/node/views_handler_argument_node_type.inc',
          90 => 'modules/node/views_handler_argument_node_vid.inc',
          91 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          92 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          93 => 'modules/node/views_handler_field_node.inc',
          94 => 'modules/node/views_handler_field_node_link.inc',
          95 => 'modules/node/views_handler_field_node_link_delete.inc',
          96 => 'modules/node/views_handler_field_node_link_edit.inc',
          97 => 'modules/node/views_handler_field_node_revision.inc',
          98 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          99 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          100 => 'modules/node/views_handler_field_node_path.inc',
          101 => 'modules/node/views_handler_field_node_type.inc',
          102 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          103 => 'modules/node/views_handler_filter_node_access.inc',
          104 => 'modules/node/views_handler_filter_node_status.inc',
          105 => 'modules/node/views_handler_filter_node_type.inc',
          106 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          107 => 'modules/node/views_plugin_argument_default_node.inc',
          108 => 'modules/node/views_plugin_argument_validate_node.inc',
          109 => 'modules/node/views_plugin_row_node_rss.inc',
          110 => 'modules/node/views_plugin_row_node_view.inc',
          111 => 'modules/profile/views_handler_field_profile_date.inc',
          112 => 'modules/profile/views_handler_field_profile_list.inc',
          113 => 'modules/profile/views_handler_filter_profile_selection.inc',
          114 => 'modules/search/views_handler_argument_search.inc',
          115 => 'modules/search/views_handler_field_search_score.inc',
          116 => 'modules/search/views_handler_filter_search.inc',
          117 => 'modules/search/views_handler_sort_search_score.inc',
          118 => 'modules/search/views_plugin_row_search_view.inc',
          119 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          120 => 'modules/system/views_handler_argument_file_fid.inc',
          121 => 'modules/system/views_handler_field_file.inc',
          122 => 'modules/system/views_handler_field_file_extension.inc',
          123 => 'modules/system/views_handler_field_file_filemime.inc',
          124 => 'modules/system/views_handler_field_file_uri.inc',
          125 => 'modules/system/views_handler_field_file_status.inc',
          126 => 'modules/system/views_handler_filter_file_status.inc',
          127 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          128 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          129 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          130 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          131 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          132 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          133 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          134 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          135 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          136 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          137 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          138 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          139 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          140 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          141 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          142 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          143 => 'modules/system/views_handler_filter_system_type.inc',
          144 => 'modules/translation/views_handler_argument_node_tnid.inc',
          145 => 'modules/translation/views_handler_field_node_language.inc',
          146 => 'modules/translation/views_handler_field_node_link_translate.inc',
          147 => 'modules/translation/views_handler_field_node_translation_link.inc',
          148 => 'modules/translation/views_handler_filter_node_language.inc',
          149 => 'modules/translation/views_handler_filter_node_tnid.inc',
          150 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          151 => 'modules/translation/views_handler_relationship_translation.inc',
          152 => 'modules/upload/views_handler_field_upload_description.inc',
          153 => 'modules/upload/views_handler_field_upload_fid.inc',
          154 => 'modules/upload/views_handler_filter_upload_fid.inc',
          155 => 'modules/user/views_handler_argument_user_uid.inc',
          156 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          157 => 'modules/user/views_handler_field_user.inc',
          158 => 'modules/user/views_handler_field_user_language.inc',
          159 => 'modules/user/views_handler_field_user_link.inc',
          160 => 'modules/user/views_handler_field_user_link_cancel.inc',
          161 => 'modules/user/views_handler_field_user_link_edit.inc',
          162 => 'modules/user/views_handler_field_user_mail.inc',
          163 => 'modules/user/views_handler_field_user_name.inc',
          164 => 'modules/user/views_handler_field_user_picture.inc',
          165 => 'modules/user/views_handler_field_user_roles.inc',
          166 => 'modules/user/views_handler_filter_user_current.inc',
          167 => 'modules/user/views_handler_filter_user_name.inc',
          168 => 'modules/user/views_handler_filter_user_roles.inc',
          169 => 'modules/user/views_plugin_argument_default_current_user.inc',
          170 => 'modules/user/views_plugin_argument_default_user.inc',
          171 => 'modules/user/views_plugin_argument_validate_user.inc',
          172 => 'plugins/views_plugin_access.inc',
          173 => 'plugins/views_plugin_access_none.inc',
          174 => 'plugins/views_plugin_access_perm.inc',
          175 => 'plugins/views_plugin_access_role.inc',
          176 => 'plugins/views_plugin_argument_default.inc',
          177 => 'plugins/views_plugin_argument_default_php.inc',
          178 => 'plugins/views_plugin_argument_default_fixed.inc',
          179 => 'plugins/views_plugin_argument_default_raw.inc',
          180 => 'plugins/views_plugin_argument_validate.inc',
          181 => 'plugins/views_plugin_argument_validate_numeric.inc',
          182 => 'plugins/views_plugin_argument_validate_php.inc',
          183 => 'plugins/views_plugin_cache.inc',
          184 => 'plugins/views_plugin_cache_none.inc',
          185 => 'plugins/views_plugin_cache_time.inc',
          186 => 'plugins/views_plugin_display.inc',
          187 => 'plugins/views_plugin_display_attachment.inc',
          188 => 'plugins/views_plugin_display_block.inc',
          189 => 'plugins/views_plugin_display_default.inc',
          190 => 'plugins/views_plugin_display_extender.inc',
          191 => 'plugins/views_plugin_display_feed.inc',
          192 => 'plugins/views_plugin_exposed_form_basic.inc',
          193 => 'plugins/views_plugin_exposed_form.inc',
          194 => 'plugins/views_plugin_exposed_form_input_required.inc',
          195 => 'plugins/views_plugin_display_page.inc',
          196 => 'plugins/views_plugin_localization_core.inc',
          197 => 'plugins/views_plugin_localization.inc',
          198 => 'plugins/views_plugin_localization_none.inc',
          199 => 'plugins/views_plugin_pager.inc',
          200 => 'plugins/views_plugin_pager_full.inc',
          201 => 'plugins/views_plugin_pager_mini.inc',
          202 => 'plugins/views_plugin_pager_none.inc',
          203 => 'plugins/views_plugin_pager_some.inc',
          204 => 'plugins/views_plugin_query.inc',
          205 => 'plugins/views_plugin_query_default.inc',
          206 => 'plugins/views_plugin_row.inc',
          207 => 'plugins/views_plugin_row_fields.inc',
          208 => 'plugins/views_plugin_style.inc',
          209 => 'plugins/views_plugin_style_default.inc',
          210 => 'plugins/views_plugin_style_grid.inc',
          211 => 'plugins/views_plugin_style_list.inc',
          212 => 'plugins/views_plugin_style_jump_menu.inc',
          213 => 'plugins/views_plugin_style_rss.inc',
          214 => 'plugins/views_plugin_style_summary.inc',
          215 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          216 => 'plugins/views_plugin_style_summary_unformatted.inc',
          217 => 'plugins/views_plugin_style_table.inc',
          218 => 'tests/handlers/views_handler_area_text.test',
          219 => 'tests/handlers/views_handler_argument_null.test',
          220 => 'tests/handlers/views_handler_field_boolean.test',
          221 => 'tests/handlers/views_handler_field_custom.test',
          222 => 'tests/handlers/views_handler_field_counter.test',
          223 => 'tests/handlers/views_handler_field_date.test',
          224 => 'tests/handlers/views_handler_field_file_size.test',
          225 => 'tests/handlers/views_handler_field_math.test',
          226 => 'tests/handlers/views_handler_field_url.test',
          227 => 'tests/handlers/views_handler_field_xss.test',
          228 => 'tests/handlers/views_handler_filter_date.test',
          229 => 'tests/handlers/views_handler_filter_equality.test',
          230 => 'tests/handlers/views_handler_filter_in_operator.test',
          231 => 'tests/handlers/views_handler_filter_numeric.test',
          232 => 'tests/handlers/views_handler_filter_string.test',
          233 => 'tests/handlers/views_handler_sort_random.test',
          234 => 'tests/handlers/views_handler_sort_date.test',
          235 => 'tests/handlers/views_handler_sort.test',
          236 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          237 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          238 => 'tests/views_access.test',
          239 => 'tests/views_analyze.test',
          240 => 'tests/views_basic.test',
          241 => 'tests/views_argument_default.test',
          242 => 'tests/views_argument_validator.test',
          243 => 'tests/views_exposed_form.test',
          244 => 'tests/views_glossary.test',
          245 => 'tests/views_groupby.test',
          246 => 'tests/views_handlers.test',
          247 => 'tests/views_module.test',
          248 => 'tests/views_pager.test',
          249 => 'tests/views_plugin_localization_test.inc',
          250 => 'tests/views_translatable.test',
          251 => 'tests/views_query.test',
          252 => 'tests/views_upgrade.test',
          253 => 'tests/views_test.views_default.inc',
          254 => 'tests/user/views_user_argument_default.test',
          255 => 'tests/user/views_user_argument_validate.test',
          256 => 'tests/user/views_user.test',
          257 => 'tests/views_cache.test',
          258 => 'tests/views_view.test',
          259 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.0-rc1',
        'project' => 'views',
        'datestamp' => '1308341220',
      ),
      'project' => 'views',
      'version' => '7.x-3.0-rc1',
    ),
    'views_ui' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.0-rc1',
        'project' => 'views',
        'datestamp' => '1308341220',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.0-rc1',
    ),
    'views_cache_bully' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/views_cache_bully/views_cache_bully.module',
      'name' => 'views_cache_bully',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Cache Bully',
        'description' => 'Forcibily cache all views, come hell or high water.',
        'core' => '7.x',
        'package' => 'views',
        'files' => 
        array (
          0 => 'views_cache_bully.views.inc',
        ),
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_cache_bully',
        'datestamp' => '1389886710',
        'php' => '5.2.4',
      ),
      'project' => 'views_cache_bully',
      'version' => '7.x-3.1',
    ),
    'views_content_cache' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/views_content_cache/views_content_cache.module',
      'name' => 'views_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Content Cache',
        'description' => 'Provides a views cache plugin based on content type changes.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'plugins/views_content_cache/base.inc',
          1 => 'plugins/views_content_cache/comment.inc',
          2 => 'plugins/views_content_cache/node.inc',
          3 => 'plugins/views_content_cache/node_only.inc',
          4 => 'plugins/views_content_cache/og.inc',
          5 => 'plugins/views_content_cache/votingapi.inc',
          6 => 'views/views_content_cache_plugin_cache.inc',
          7 => 'tests/views_content_cache.test',
        ),
        'version' => '7.x-3.0-alpha3',
        'project' => 'views_content_cache',
        'datestamp' => '1383658110',
        'php' => '5.2.4',
      ),
      'project' => 'views_content_cache',
      'version' => '7.x-3.0-alpha3',
    ),
    'webform' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7316',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'files' => 
        array (
          0 => 'includes/webform.export.inc',
          1 => 'views/webform_handler_field_form_body.inc',
          2 => 'views/webform_handler_field_is_draft.inc',
          3 => 'views/webform_handler_field_node_link_edit.inc',
          4 => 'views/webform_handler_field_node_link_results.inc',
          5 => 'views/webform_handler_field_submission_count.inc',
          6 => 'views/webform_handler_field_submission_link.inc',
          7 => 'views/webform_handler_filter_is_draft.inc',
          8 => 'views/webform.views.inc',
          9 => 'tests/components.test',
          10 => 'tests/permissions.test',
          11 => 'tests/submission.test',
          12 => 'tests/webform.test',
        ),
        'version' => '7.x-3.15',
        'project' => 'webform',
        'datestamp' => '1323326755',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'webform',
      'version' => '7.x-3.15',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows to edit content with client-side editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/wysiwyg',
        'files' => 
        array (
          0 => 'wysiwyg.module',
          1 => 'tests/wysiwyg.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'wysiwyg',
        'datestamp' => '1308450722',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'wysiwyg',
      'version' => '7.x-2.1',
    ),
    'apnc_custom' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/modules/custom/apnc_custom/apnc_custom.module',
      'name' => 'apnc_custom',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'APNC Custom',
        'description' => 'Custom functionality for APNC',
        'core' => '7.x',
        'package' => 'APNC',
        'files' => 
        array (
          0 => 'apnc_custom.module',
        ),
        'project' => 'apnc_custom',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => 'apnc_custom',
      'version' => NULL,
    ),
    'entityreference' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc',
      'name' => 'entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => '',
      'version' => NULL,
    ),
    'field_collection' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc',
      'name' => 'field_collection',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => '',
      'version' => NULL,
    ),
  ),
  'themes' => 
  array (
    'apnc' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/themes/custom/apnc/apnc.info',
      'name' => 'apnc',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'screenshot' => 'screenshot.png',
        'name' => 'APNC Theme',
        'description' => 'Custom APNC theme',
        'core' => '7.x',
        'base theme' => 'zen',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'screen.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'interaction.js',
        ),
        'regions' => 
        array (
          'help' => 'Help',
          'homepage_slideshow' => 'Homepage Slideshow',
          'homepage_news' => 'Homepage News',
          'homepage_search' => 'Homepage Search',
          'events_sidebar' => 'Events sidebar',
          'content' => 'Content',
          'sidebar_content_right' => 'Sidebar Content Right',
          'header' => 'Header',
          'footer' => 'Footer',
          'bottom' => 'Page bottom',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'favicon',
          6 => 'main_menu',
          7 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'zen_breadcrumb' => 'yes',
          'zen_breadcrumb_separator' => ' › ',
          'zen_breadcrumb_home' => '1',
          'zen_breadcrumb_trailing' => '1',
          'zen_breadcrumb_title' => '0',
          'zen_jump_link_target' => 'main-menu',
          'zen_rebuild_registry' => '1',
          'zen_wireframes' => '0',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'bartik' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'garland' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'seven' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'stark' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.32',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1413387510',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.32',
    ),
    'zen' => 
    array (
      'filename' => '/data/disk/a4289963153/static/platforms/apnc/sites/all/themes/contrib/zen/zen.info',
      'name' => 'zen',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Zen',
        'description' => 'Zen sub-themes are the ultimate starting themes for Drupal 7. Read the <a href="http://drupal.org/node/873778">online docs</a> or the included README-FIRST.txt on how to create a theme with Zen.',
        'screenshot' => 'zen-internals/screenshot.png',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'regions' => 
        array (
          'help' => 'Help',
          'sidebar_first' => 'First sidebar',
          'sidebar_second' => 'Second sidebar',
          'navigation' => 'Navigation bar',
          'highlighted' => 'Highlighted',
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
          'bottom' => 'Page bottom',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'zen_breadcrumb' => 'yes',
          'zen_breadcrumb_separator' => ' › ',
          'zen_breadcrumb_home' => '1',
          'zen_breadcrumb_trailing' => '1',
          'zen_breadcrumb_title' => '0',
          'zen_layout' => 'zen-columns-liquid',
          'zen_jump_link_target' => 'main-menu',
          'zen_rebuild_registry' => '0',
          'zen_wireframes' => '0',
        ),
        'version' => '7.x-3.1',
        'project' => 'zen',
        'datestamp' => '1303759317',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'zen',
      'version' => '7.x-3.1',
    ),
  ),
);
$options['profile'] = 'minimal';
$options['language'] = 'en';
$options['aliases'] = array (
  0 => 'www.apncorganizing.org',
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
