<?php
$config = array (
  'debug' => 0,
  'MISP' => 
  array (
    'baseurl' => 'https://s1em_hostname/misp',
    'external_baseurl' => 'https://s1em_hostname/misp',
    'live' => true,
    'language' => 'eng',
    'footermidleft' => '',
    'footermidright' => '',
    'org' => 'CYBER',
    'showorg' => true,
    'threatlevel_in_email_subject' => true,
    'email_subject_TLP_string' => 'tlp:amber',
    'email_subject_tag' => 'tlp',
    'email_subject_include_tag_name' => true,
    'background_jobs' => true,
    'cached_attachments' => true,
    'osuser' => 'www-data',
    'email' => 'email@address.com',
    'contact' => 'email@address.com',
    'cveurl' => 'https://cve.circl.lu/cve/',
    'cweurl' => 'https://cve.circl.lu/cwe/',
    'disablerestalert' => false,
    'default_event_distribution' => '1',
    'default_attribute_distribution' => 'event',
    'tagging' => true,
    'full_tags_on_event_index' => true,
    'attribute_tagging' => true,
    'full_tags_on_attribute_index' => true,
    'footer_logo' => '',
    'take_ownership_xml_import' => false,
    'unpublishedprivate' => false,
    'disable_emailing' => false,
    'manage_workers' => true,
    'Attributes_Values_Filter_In_Event' => 'id, uuid, value, comment, type, category, Tag.name',
    'redis_host' => 'redis',
    'python_bin' => '/usr/bin/python3',
    'uuid' => '37427cf4-0c03-4516-81dd-af7bec85348b',
    'host_org_id' => 1,
    'default_event_tag_collection' => 0,
    'proposals_block_attributes' => false,
	'tmpdir' => '/tmp',
  ),
  'GnuPG' => 
  array (
    'onlyencrypted' => false,
    'email' => '',
    'homedir' => '',
    'password' => '',
    'bodyonlyencrypted' => false,
    'sign' => true,
    'obscure_subject' => false,
  ),
  'SMIME' => 
  array (
    'enabled' => false,
    'email' => '',
    'cert_public_sign' => '',
    'key_sign' => '',
    'password' => '',
  ),
  'Proxy' => 
  array (
    'host' => '',
    'port' => '',
    'method' => '',
    'user' => '',
    'password' => '',
  ),
  'SecureAuth' => 
  array (
    'amount' => 5,
    'expire' => 300,
  ),
  'Security' => 
  array (
    'level' => 'medium',
    'salt' => 'sJh2/ss7s%RkLH4LpJezMUi?#Y=4Qi3d',
    'cipherSeed' => '',
    'require_password_confirmation' => true,
    'advanced_authkeys' => false,
    'csp_enforce' => false,
	'password_policy_length' => 1,
    'password_policy_complexity' => '/^((?=.*\\d)|(?=.*\\W+))(?![\\n])(?=.*[A-Z])(?=.*[a-z]).*$|.{1,}/',
  ),
  'Session.defaults' => 'php',
  'Session.timeout' => 60,
  'Session.cookieTimeout' => 60,
  'Session.autoRegenerate' => false,
  'Session.checkAgent' => false,
  'site_admin_debug' => NULL,
  'Plugin' => 
  array (
    'ZeroMQ_redis_host' => 'redis',
    'ZeroMQ_enable' => true,
    'Enrichment_services_enable' => true,
    'Enrichment_services_url' => 'http://misp-modules',
    'Import_services_enable' => true,
    'Import_services_url' => 'http://misp-modules',
    'Export_services_enable' => true,
    'Export_services_url' => 'http://misp-modules',
    'Cortex_services_enable' => false,
  ),
  'CertAuth' => NULL,
  'ApacheShibbAuth' => NULL,
  'ApacheSecureAuth' => NULL,
  'OidcAuth' => NULL,
);