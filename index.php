<?php
# init database and get related functions
include('mysql.php');
$db = init_db();

# this function displays a single article
function echo_article($article) {
	$title = $article['title'];
	$author = $article['author'];
	$date = $article['date'];
	$content = nl2br($article['content']);
    $article_id = $article['article_id'];
?>
		<div class="article" id="<?php echo $article_id; ?>">
			<h2 class="article_title"><?php echo $title; ?></h2>
			<p class="byline">
				by <span class="author"><?php echo $author; ?></span>
				on <span class="date"><?php echo $date; ?></span>
			</p>
			<div class="article_content">
				<?php echo $content; ?>
			</div>
            <div class="actions">
                <a href="/edit.php?article=<?php echo $article_id; ?>">Edit</a>
                <a class="link-format" onclick="deleteIfSure('/?delete=<?php echo $article_id; ?>')">Delete</a>
            </div>
		</div>
<?php
}

# if they sent any post variables, either create or edit article
if (count($_POST) > 0) {
    # if POST has the "edited", edit the existing article that has that id
    if (isset($_POST['edited'])) {
        $article_id = $_POST['edited'];
        unset($_POST['edited']);

        $edited_article = $_POST;
        $edited_article['article_id'] = $article_id;

        overwrite_article_in_db($db, $edited_article);
    }
    # no "edited" variable?  then create a new article
    else {
        $new_article = $_POST;
        create_article_in_db($db, $new_article);
    }
}

# if the $_GET variable "delete" is present, delete that article
if (isset($_GET['delete'])) {
    $article_id = $_GET['delete'];
    delete_article_in_db($db, $article_id);
}

$articles = load_articles_from_db($db);

# start of HTML
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Blog</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>
            function deleteIfSure(link) {
                pressedOK = confirm('Are you sure you want to Delete this Post?');
                if (pressedOK) {
                    document.location = link;
                }
            }
        </script>
	</head>
	<body>
		<h1>My PHP Blog</h1>

        <div id="table_of_contents">
<?php
    if (count($articles) > 0) {
?>
            <h2>Posts</h2>

            <ul>
<?php
        foreach ($articles as $article) {
            $article_id = $article['article_id'];
?>
                <li>
                    <a href="#<?php echo $article_id; ?>"><?php echo $article['title'] ?></a>
                </li>
<?php
        }
?>
            </ul>
        </div>

        <?php # echo all the $articles using a foreach loop ?>
<?php
        foreach ($articles as $article) {
            echo_article($article);
        }
    }
?>

        <form id="article_form" method="POST">
            <h2>Write a New Post!</h2>
            <div class="form_row">
                <label for="title">Title</label><br>
                <input name="title">
            </div>
            <div class="form_row" id="author_date_fields">
                <label for="author">Author</label><br>
                <input name="author">
            </div>
            <div class="form_row">
                <label for="content">Content</label><br>
                <textarea name="content"></textarea>
            </div>
            <div class="form_row">
                <input type="submit" value="Publish">
            </div>
        </form>
	</body>
</html>

