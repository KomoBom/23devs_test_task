<?php

global $db;

if ($_POST['data_updated']) {
    $db->query("UPDATE messages SET `title` = ?, `author` = ?, `short_description` = ?, `full_description` = ? WHERE `messages`.`id` = ?", [
        $_POST['title'], $_POST['author'], $_POST['short_description'], $_POST['full_description'], $_POST['id']
    ]);
} else {
    $db->query("INSERT INTO messages (`title`, `author`, `short_description`, `full_description`) VALUES (?, ?, ?, ?)", [
        $_POST['title'], $_POST['author'], $_POST['short_description'], $_POST['full_description'],
    ]);
}

header("Location: /");
die;