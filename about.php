<?php if (!defined('APPLICATION')) {
    exit;
}

$ThemeInfo['sanmyaku'] = [
  'Name'        => 'Sanmyaku',
  'Description' => "A mountain theme using Zurb Foundation 5",
  'Version'     => '0.0.1',
  'Author'      => 'Samuel Hilson, Ryan Jordan',
  'AuthorEmail' => 'samrhilson@gmail.com',
  'AuthorUrl'   => 'https://github.com/codesequence',
  'RequiredApplications' => ['Vanilla' => '2.2.x'],

  'Options' => [
    'Styles' => [
      'Light' => '%s',
      'Dark'   => '%s_dark',
    ],
  ]
];
