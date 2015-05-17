<?php
/*
Tasks:
------
- autopopulate the text into the <input>s
- find the right article in $articles
*/

include('mysql.php');
$db = init_db();

# get the data from the correct Article we want to edit

$article_id = $_GET['article'];
$article = load_article_from_db($db, $article_id);

$title   = $article['title'];
$author  = $article['author'];
$date    = $article['date'];
$content = $article['content'];

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="/" id="article_form" class="editing_article" method="POST">
            <h2>Editing Post</h2>
            <div class="form_row">
                <label for="title">Title</label><br>
                <input name="title" value="<?php echo $title; ?>">
            </div>
            <div class="form_row" id="author_date_fields">
                <label for="author">Author</label><br>
                <input name="author" value="<?php echo $author; ?>">
            </div>
            <div class="form_row">
                <label for="content">Content</label><br>
                <textarea name="content"><?php echo $content; ?></textarea>
            </div>
            <div class="form_row">
                <input type="submit" value="Publish">
                or <a href="/">Cancel</a>
            </div>
            <?php # add an invisible POST variable to the form: edited=(articleId) ?>
            <input type="hidden" name="edited" value="<?php echo $article_id; ?>">
        </form>
    </body>
</html>
