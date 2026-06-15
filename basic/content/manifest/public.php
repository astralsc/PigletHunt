<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  /*'id' => 'global',
  'version' => 1,
  'entries' => (object)[]
  ]*/

  /*'entries' => [
      [
          'contentId'  => 'items.sword_01',
          'version'    => 'abc123',
          'uri'        => 'https://cdn.beamable.com/content/items.sword_01.json',
          'type'       => 'items',
          'manifestID' => 'global',
          'visibility' => 'public',
          'tags'       => ['weapon', 'melee'],
      ],
      [
          'contentId'  => 'items.shield_01',
          'version'    => 'def456',
          'uri'        => 'https://cdn.beamable.com/content/items.shield_01.json',
          'type'       => 'items',
          'manifestID' => 'global',
          'visibility' => 'public',
          'tags'       => ['armor'],
      ],
      [
          'contentId'  => 'announcements.welcome',
          'version'    => 'ghi789',
          'uri'        => 'https://cdn.beamable.com/content/announcements.welcome.json',
          'type'       => 'announcements',
          'manifestID' => 'global',
          'visibility' => 'public',
          'tags'       => [],
      ],
  ]*/
];

echo json_encode($data);