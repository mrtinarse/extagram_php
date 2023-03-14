<?php
(new mysqli("database", "extagram_admin", "pass123", "extagram_db"))->query("DELETE FROM posts");
array_map('unlink', glob("images/*"));
?>
