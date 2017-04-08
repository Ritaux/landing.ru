<?php
	$comment_author = trim($_POST['commentAuthor']);
	$comment_text = trim($_POST['commentText']);
	if (isset($comment_text)) {
		$res = array('answer' => 'Комментарий добавлен!' );
		$res = json_encode($res);
	}
	echo ($res);
?>
