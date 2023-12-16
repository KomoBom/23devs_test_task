<?php

global $db;

$db->query("INSERT INTO `comments` (`message_id`, `content`) VALUES (?, ?)", [
    $_POST['message_id'], $_POST['content']]);

header("Location: /messages?id={$_POST['message_id']}");
die;