<?php

$router->get('', 'messages/index.php');
$router->get('messages', 'messages/show.php');
$router->get('messages/create', 'messages/create.php');
$router->post('messages', 'messages/store.php');
$router->patch('messages', 'messages/update.php');

$router->post('messages/comment', 'messages/comments/comment.php');
