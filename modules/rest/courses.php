<?php

function GetCourses() {
    $database = Database::get();
    $database -> queryFunc('SELECT title FROM course', function($row) {var_dump($row); echo "\n";});
}
function PostCourses() {
    echo 'POST';
}
//DeleteCourses gets a parameter which holds  the course's ID
function DeleteCourses($course_id) {
    $uid = $_SESSION['uid'];	//Getting user ID via session variable
    Database::get() -> queryFunc("DELETE FROM course_user WHERE course_id=$course_id AND user_id=$uid",
				 function($row) { echo json_encode($row);} );
}
?>
