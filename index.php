<?php
require_once 'C:/xampp/htdocs/CodeHere/project1/includes/db.php';

$posts = getPosts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/x-icon" href="../../static/image/2021_Facebook_icon.svg.webp" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>
    <div class="header">
            <div class="header-left">
                <img src="static/image/2021_Facebook_icon.svg.webp" alt="" />
                <div class="header-input">
                    <span class="material-icons"> search</span>
                <input type="text " placeholder="Search Facebook" />
                </div>
            </div>
            <div class="header-middle">
                <div class="header-action active">
                    <span class="material-icons"> home </span>
                </div>
                <div class="header-action">
                    <span class="material-icons"> ondemand_video </span>
                </div>
                <div class="header-action">
                    <span class="material-icons"> storefront </span>
                </div>
                <div class="header-action">
                    <span class="material-icons"> supervised_user_circle </span>
                </div>
                <div class="header-action">
                    <span class="material-icons"> grid_view </span>
                </div>
            </div>
            <div class="header-right">
                <div class="header-profile">
                    <img src="static/images/avatar.png" class="user-avatar" />
                    <h4>Nguyen Dinh Nam</h4>
                </div>
                <span class="material-icons"> add </span>
                <span class="material-icons"> forum </span>
                <span class="material-icons"> notifications_active </span>
                <span class="material-icons"> arrow_drop_down </span>
            </div>
        </div>
        <!-- header ends -->
    <div class="main-body">
        <!-- side bar -->
        <div class="side-bar">
            <div class="side-bar-row">
                <img src="static/images/avatar.png" class="user-avatar" />
                <h4>Nguyen Dinh Nam</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/friends.png" alt="" />
                <h4>Friends</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/groups.png" alt="" />
                <h4>Groups</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/marketplace.png" alt="" />
                <h4>Marketplace</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/watch.png" alt="" />
                <h4>Watch</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/memories.png" alt="" />
                <h4>Memories</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/saved.png" alt="" />
                <h4>Saved</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/pages.png" alt="" />
                <h4>Pages</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/events.png" alt="" />
                <h4>Events</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/most recent.png" alt="" />
                <h4>Most recents</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/ad center.png" alt="" />
                <h4>Ad Center</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/Ads Maneger.png" alt="" />
                <h4>Ads Maneger</h4>
            </div>
            <div class="side-bar-row">
                <img src="static/image/blood donations.png" alt="" />
                <h4>Blood Donations</h4>
            </div>
        </div>
        <!-- side bar ends -->
         <!-- feed starts -->
        <div class="feed">
            <div class="story-reel">
                <div
                    class="story"
                    style="background-image: url('static/image/bro reel.jpg')"
                >
                    <img
                    src="static/image/brototype logo.jpg"
                    class="user-avatar story-avatar"
                    />
                    <h4>Nam 1</h4>
                </div>

                <div
                    class="story"
                    style="background-image: url('static/image/kaztro/ reel.jpg')"
                >
                    <img
                    src="static/image/kaztro.jpg"
                    class="user-avatar story-avatar"
                    />
                    <h4>Nam 2</h4>
                </div>
                <div class="story" style="background-image: url('static/image/reel.jpg')">
                    <img
                    src="static/image/d2d logo.jpg"
                    class="user-avatar story-avatar"
                    />
                    <h4>Nam 3</h4>
                </div>
                <div class="story" style="background-image: url('static/image/bike.jpg')">
                    <img
                    src="static/image/trek logo.jpg"
                    class="user-avatar story-avatar"
                    />
                    <h4>Nam 4</h4>
                </div>
                <div class="story" style="background-image: url('static/image/reel mt.jpg')">
                    <img
                    src="static/image/mt logo.jpg"
                    class="user-avatar story-avatar"
                    />
                    <h4>Nam 5</h4>
                </div>
            </div>
            <!--  -->
            <div class="message-sender">
                <div class="message-sender-top">
                    <img src="../../static/images/avatar.png" class="user-avatar" />
                    <form>
                        <input type="text" class="message-sender-input" placeholder="What's on your mind, Nam" />
                    </form>
                </div>
                <div class="message-sender-bottom">
                    <div class="message-sender-options">
                        <span style="color: red" class="material-icons">videocam</span>
                        <h4>Live video</h4>
                    </div>
                    <div class="message-sender-options">
                        <span style="color: green" class="material-icons">photo_library</span>
                        <h4>Photo/video</h4>
                    </div>
                    <div class="message-sender-options">
                        <span style="color: orange" class="material-icons">insert_emoticon</span>
                        <h4>Feeling/Activity</h4>
                    </div>
                </div>
            </div>

            <?php foreach ($posts as $post): ?>
                <div class="post ">
                    <div class="post-top">
                        <img src="../../<?php echo $post['avatar_image']; ?>" class="user-avatar post-avatar" />
                        <div class="post-topInfo">
                            <h3><?php echo htmlspecialchars($post['username']); ?></h3>
                            <p><?php echo date("d.m.Y \a\\t H:i", strtotime($post['created_at'])); ?></p>
                        </div>
                    </div>
                    <div class="post-bottom">
                        <p><?php echo htmlspecialchars($post['content']); ?></p>
                    </div>
                    <?php if (!empty($post['image'])): ?>
                        <div class="post-image">
                            <img src="../../<?php echo htmlspecialchars($post['image']); ?>" alt="" />
                        </div>
                    <?php endif; ?>
                    <div class="post-options">
                        <div class="post-option">
                            <span class="material-icons">thumb_up</span>
                            <p><?php echo getLikesByPostId($post['post_id']); ?> Likes</p>
                        </div>
                        <div class="post-option">
                            <span class="material-icons">chat_bubble_outline</span>
                            <p>Comment</p>
                        </div>
                        <div class="post-option">
                            <span class="material-icons">near_me</span>
                            <p>Share</p>
                        </div>
                    </div>
                    
                    <!-- Hiển thị các bình luận -->
                    <div class="comments">
                        <?php
                        $comments = getCommentsByPostId($post['post_id']);
                        foreach ($comments as $comment): ?>
                            <div class="comment">
                                <img src="../../<?php echo $comment['avatar_image']; ?>" class="user-avatar comment-avatar" />
                                <div class="comment-text">
                                    <h4><?php echo htmlspecialchars($comment['username']); ?></h4>
                                    <p><?php echo htmlspecialchars($comment['content']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!--  -->
                    
                </div>
            <?php endforeach; ?>

            
        </div>

        <!-- left side bar starts -->
        <div class="left-sidebar">
            <div class="left-top">
                <div class="sponser-option">
                    <h3>Sponsored</h3>
                </div>
                <div class="sponser-option 1">
                    <img src="static/image/Ad1.jpg" />
                    <div class="ad-name">
                        <h3>NFT Marketplace</h3>
                        <h4>crypto.com</h4>
                    </div>
                </div>
                <div class="sponser-option 2">
                    <img src="static/image/add2.jpg" />
                    <div class="ad-name">
                        <h3>Find IT/ Web Engineering Jobs In Japan</h3>
                        <h4>golobel.find-code.ioy</h4>
                    </div>
                </div>
            </div>
            <div class="left-bottom">
            <div class="left-bootom-bar">
                <h4>Contacts</h4>
                <div class="bar-icon">
                    <div>
                        <span class="material-icons"> video_call </span>
                    </div>
                    <div>
                        <span class="material-icons"> search </span>
                    </div>
                    <div>
                        <span class="material-icons"> more_horiz </span>
                    </div>
                </div>
                </div>
                    <div class="profile">
                    <img src="static/images/avatar.png" class="user-avatar" />
                    <h4>Nam 1</h4>
                </div>
            </div>
        </div>
        <!-- left side bar ends -->
    </div>
</body>
</html>