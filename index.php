<style media="screen">

.bg {
background: url('https://images.unsplash.com/photo-1456213971271-c9b01add56d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
    background-repeat: no-repeat;
background-position: top;
background-size: contain;
height: 500px;
}
/*
button{
            cursor: pointer;
            border: 1px solid #555;
            text-align: center;
            padding: 5px;
            margin-left: 8px;
        }
        .dark{
            background-color: #222;
            color: #e6e6e6;
        }*/
</style>

<?php
$index_url='index.php';
$posts_url='posts/posts.php';
$top_posts_url='posts/topposts.php';
$post_url='posts/post.php';
$newpost_url='posts/newpost.php';
$login_url='users/login.php';
$logout_url='users/logout.php';
$register_url='users/register.php';
$search_url='posts/search.php';
$contact_us_url='users/contact_us.php';

session_start();

include("include/navbar.php");
include("include/bootstrap_cdn.php");

if(isset($_SESSION['username'])) {
	header("location:posts/posts.php");
}

?>

<div class="row">
	<div class="bg"></div>
</div>
