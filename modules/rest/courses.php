<?php

function GetCourses() {
    $database = Database::get();
    $database -> queryFunc('SELECT title FROM course', function($row) {var_dump($row); echo "\n";});
}
function PostCourses() {
    echo 'POST';
}
function DeleteCourses() {
    echo 'DELETE';
}
?>
