<?php
defined('BASEPATH') || exit('No direct script access allowed');

$config['imap_secu'] = 'tls';
$config['imap_cert'] = true;
$config['imap_host'] = 'domain.tld';
$config['imap_port'] = 143;
$config['imap_user'] = NULL;
$config['imap_pass'] = NULL;

$config['imap_folders'] = [
	'inbox'  => 'INBOX',
	'sent'   => 'Sent',
	'trash'  => 'Trash',
	'spam'   => 'Spam',
	'drafts' => 'Drafts',
];

$config['expunge_on_disconnect'] = false;

$config['imap_cache'] = [
	'active'     => false,
	'adapter'    => 'file',
	'backup'     => 'file',
	'key_prefix' => 'imap:',
	'ttl'        => 60,
];
