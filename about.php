<?php if (!defined('APPLICATION')) {
    exit;
}

$ThemeInfo['sanmyaku'] = [
  'Name'        => 'Sanmyaku',
  'Description' => "A theme featuring mountains using Zurb Foundation 5",
  'Version'     => '1.0.5',
  'Author'      => 'Ryan Jordan, Sam Hilson',
  'AuthorEmail' => 'ryjordan@gmail.com',
  'AuthorUrl'   => 'https://github.com/codesequence',
  'License'     => 'MIT',
  'RequiredApplications' => ['Vanilla' => '2.6'],

  'Options' => [
    'Styles' => [
      'Light' => '%s',
      'Dark'   => '%s_dark',
    ],
  ]
];
