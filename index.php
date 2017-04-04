<?php
// This is the home page of our application
include 'common.php';
include 'lib/Blog/App/blog_app.php';
include 'lib/Blog/View/blog_view.php';

use function Blog\View\display;
?>


<!doctype html>
<html>
<head><title>Women in Tech Blog</title></head>

<body>

<h1>Women in Tech Blog</h1>

<?= display('user', ['heading' => 'User', 'users' => $users, 'blog' => $blog]); ?>
<?= display('items', ['heading' => 'Blog', 'blog' => $blog]); ?>
<?= display('users', ['heading' => 'All Users', 'users' => $users]); ?>

<?php if($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
	<?= display('newitem');?>
<?php else: ?>

<?php echo display('item', \Blog\App\add_item($blog, $_POST) + ['heading' => 'New Item']); ?>

<?php endif; ?>

</body>
</html>


