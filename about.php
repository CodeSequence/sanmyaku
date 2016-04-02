<?php if (!defined('APPLICATION')) {
    exit;
}

$ThemeInfo['sanmyaku'] = [
  'Name'        => 'Sanmyaku',
  'Description' => "A theme featuring mountains using Zurb Foundation 5",
  'Version'     => '1.0.0',
  'Author'      => 'Ryan Jordan, Sam Hilson',
  'AuthorEmail' => 'ryjordan@gmail.com',
  'AuthorUrl'   => 'https://github.com/codesequence',
  'License'     => 'MIT',
  'RequiredApplications' => ['Vanilla' => '2.2.x'],

  'Options' => [
    'Styles' => [
      'Light' => '%s',
      'Dark'   => '%s_dark',
    ],
  ]
];
