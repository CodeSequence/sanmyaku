<?php if (!defined('APPLICATION')) {
    exit;
}

$ThemeInfo['vanilla-foundation'] = [
  'Name'        => 'Zurb Foundation Theme',
  'Description' => "A Zurb Foundation 5 Theme for vanilla forums",
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
