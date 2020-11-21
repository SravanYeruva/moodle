<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$_ENV['DATABASE_TYPE'] = 'pgsql';
$_ENV['DATABASE_HOST'] = 'ec2-54-220-229-215.eu-west-1.compute.amazonaws.com';
$_ENV['DATABASE_NAME'] = 'd95dth790m1ut4';
$_ENV['DATABASE_USER'] = 'eeldteyzvlegjc';
$_ENV['DATABASE_PASSWORD'] = 'cffaa415e5b60c54215f80cae9213330bbf0d8ab79739216cb29eed6ee0b1c03';
$_ENV['DATABASE_PORT'] = '5432';
$_ENV['WWWROOT'] = 'http://lmsdemos.herokuapp.com';
$_ENV['DATAROOT'] = '/tmp';

$CFG = new stdClass();


$CFG->dbtype    = getenv('DATABASE_TYPE');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('DATABASE_HOST');
$CFG->dbname    = getenv('DATABASE_NAME');
$CFG->dbuser    = getenv('DATABASE_USER');
$CFG->dbpass    = getenv('DATABASE_PASSWORD');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
