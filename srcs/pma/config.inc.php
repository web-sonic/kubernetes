<?php

declare(strict_types=1);

/**                                                                                                                              
 * This is needed for cookie based authentication to encrypt password in                                                         
 * cookie. Needs to be 32 chars long.                                                                                            
 */
$cfg['blowfish_secret'] = 'Mylife1Myrules!aaaaaaaaaaaaaaaaaaaaaaaaaaa';

/* Servers configuration */
$i = 1;

/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'mysql';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

$cfg['Servers'][$i]['controluser'] = 'admin';
$cfg['Servers'][$i]['controlpass'] = '0000';

/* Directories for saving/loading files from server */
$cfg['UploadDir'] = '';
$cfg['PmaAbsoluteUri'] = '192.168.99.120:5000';
$cfg['SaveDir'] = '';

$cfg['TempDir'] = '/var/www/phpmyadmin/tmp';
