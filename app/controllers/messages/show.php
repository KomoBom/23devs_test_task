<?php

global $db;

$message = $db->query("SELECT * FROM messages WHERE id = ?", [$_GET['id']])->get();
$comments = $db->query("SELECT * FROM comments WHERE message_id = ? ORDER BY id DESC", [$message['id']])->getAll();

require_once VIEWS . '/messages/show.tpl.php';