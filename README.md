# CodeIgniter - IMAP lib

Powered IMAP library for codeigniter

This will provide a way to access to the IMAP protocol over a mail account

## FEATURES:

- **Connect and auth**.to a mail account using traditional simple user and password
- **Retrieve the messages** of the mail account and almost any way to read them

## INSTALLING

Comes included with CodeigniterPowered, but for CI 2 or CI3:

**Requirements**

* Codeigniter 2.x or 3.x

**Manual controlled install**

**1)** Located your Codeigniter proyect and then download the repository at the `Applications` root directory

`wget https://github.com/codeigniterpower/codeigniter-imap/archive/master.tar.gz -O codeigniter-imap.tar.gz`

**2)** Extract the contents or place the files into your applications directory root, this must be 2 files inside, rest dont make any importance are just examples:

* `config/imap.php` 
* `libraries/Imap.php`

**3)** Then, just use it
    
`$this->load->library('imap');`

## CONFIGURATION

Wil be located at the `config/imap.php` file, and heres the documentation:

* `$config['imap_secu']           = 'tls';` protocol of security to use, can be NULL, tls or ssl
* `$config['imap_port']           = 143;` will depends of the protocol of security, its the port of connection.
* `$config['imap_host']           = 'venenux.domain';` hostname or ip of the mail server to connect
* `$config['imap_user']           = 'username';`  pass the username of the mail
* `$config['imap_pass']           = 'userpass';`  pass the pssword of the username

This library is a simple way of connection, you cannot use it to connect to more complex mail clients. for that in future, you must use php-imap, we will try to implement in future.

## USAGE

```php
$this->load->library('imap');
$config = array(
			'host'     => 'imap.venenux.dot',
			'encrypto' => 'ssl',
			'user'     => 'phpimapclient@venenux.dot',
			'pass'     => 'Abcd12345**'
		);
$this->imap->imap_connect($config);
$folders = $this->imap->get_folders();
```
# Credits

This is an improved work based on original, check [LICENSE](LICENSE)

2022 PICCORO Lenz McKAY
