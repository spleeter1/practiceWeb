<?php
include_once 'C:/xampp/htdocs/CodeHere/project1/includes/config.php';

function getPosts() {
    global $conn;
    $sql = "SELECT posts.*, users.username, users.avatar_image 
            FROM posts 
            JOIN users ON posts.user_id = users.user_id 
            ORDER BY posts.created_at DESC";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getCommentsByPostId($post_id) {
    global $conn;
    $sql = "SELECT comments.*, users.username, users.avatar_image 
            FROM comments 
            JOIN users ON comments.user_id = users.user_id 
            WHERE comments.post_id = ? 
            ORDER BY comments.created_at ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getLikesByPostId($post_id) {
    global $conn;
    $sql = "SELECT COUNT(*) as like_count 
            FROM likes 
            WHERE post_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()['like_count'];
}
?>