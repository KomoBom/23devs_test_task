<?php

global $db;

$page = $_GET['page'] ?? 1;
$msg_per_page = 4;
$msg_total = $db->query("SELECT COUNT(*) FROM messages")->getColumn();

$pagination = new \myapp\Pagination((int)$page, $msg_per_page, $msg_total);
$start = $pagination->getStart();

$messages = $db->query("SELECT * FROM messages ORDER BY id DESC LIMIT $start, $msg_per_page")->getAll();

require_once VIEWS . '/messages/index.tpl.php';