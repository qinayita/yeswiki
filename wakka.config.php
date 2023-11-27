<?php
// wakka.config.php cr&eacute;&eacute;e 2023-11-23T23:02:50+01:00
// ne changez pas la yeswiki_version manuellement !

$wakkaConfig = array (
  'wakka_version' => '0.1.1',
  'wikini_version' => '0.5.0',
  'yeswiki_version' => 'doryphore',
  'yeswiki_release' => '4.4.2',
  'charset' => 'UTF-8',
  'debug' => 'no',
  'mysql_host' => 'localhost',
  'mysql_database' => 'yeswiki2',
  'mysql_user' => 'root',
  'mysql_password' => '',
  'table_prefix' => 'yeswiki_',
  'base_url' => 'https://127.0.0.1:8000/?',
  'rewrite_mode' => false,
  'meta_keywords' => '',
  'meta_description' => '',
  'header_action' => 'header',
  'footer_action' => 'footer',
  'navigation_links' => 'DerniersChangements :: DerniersCommentaires :: ParametresUtilisateur',
  'referrers_purge_time' => 24,
  'pages_purge_time' => 365,
  'default_write_acl' => '*',
  'default_read_acl' => '*',
  'default_comment_acl' => 'comments-closed',
  'default_comment_acl_updated' => true,
  'comments_activated' => true,
  'comments_handler' => 'yeswiki',
  'preview_before_save' => false,
  'allow_raw_html' => true,
  'disable_wiki_links' => false,
  'allowed_methods_in_iframe' => 
  array (
    0 => 'iframe',
    1 => 'editiframe',
    2 => 'bazariframe',
    3 => 'render',
  ),
  'revisionscount' => 30,
  'timezone' => 'Europe/Paris',
  'root_page' => 'PagePrincipale',
  'wakka_name' => 'Mon site YesWiki',
  'htmlPurifierActivated' => true,
  'favorites_activated' => true,
  'archive' => 
  array (
    'hideConfigValues' => 
    array (
      'mysql_host' => '',
      'mysql_database' => '',
      'mysql_user' => '',
      'mysql_password' => '',
      'contact_smtp_host' => '',
      'contact_smtp_user' => '',
      'contact_smtp_pass' => '',
      'api_allowed_keys' => 
      array (
      ),
    ),
    'authorize_bypass_preupdate_backup' => false,
    'preupdate_backup_activated' => true,
    'call_archive_async' => true,
    'privatePath' => 'private/backups',
    'max_nb_files' => 10,
  ),
  'default_language' => 'fr',
  'db_charset' => 'utf8mb4',
);
?>