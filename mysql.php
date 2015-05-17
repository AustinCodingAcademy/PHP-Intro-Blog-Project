<?php
function init_db() {
    # connect to the MySQL database server
    # this is the same as doing "vagrant ssh", then "mysql -uroot -proot"
    $db = mysqli_connect('localhost', 'root', 'root');
    # select the "acashop" database
    # this is the same as logging into mysql and saying "USE acashop;"
    mysqli_select_db($db, 'acashop');
    return $db;
}

function load_articles_from_db($db) {
    $result = mysqli_query($db, '
        SELECT * FROM aca_article;
    ');

    $rows = array(); # make an array to store the results
    # put the results in the array, one row at a time
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function load_article_from_db($db, $article_id) {
    $article_id = (int)$article_id;
    $result = mysqli_query($db, "
        SELECT * FROM aca_article WHERE article_id=$article_id;
    ");

    return mysqli_fetch_assoc($result);
}

# adding a new article to the end
function create_article_in_db($db, $article) {
    # mysqli_real_escape_string escapes the VARCHARs by adding \ before the quotes etc
    $title = mysqli_real_escape_string($db,$article['title']);
    $author = mysqli_real_escape_string($db,$article['author']);
    $content = mysqli_real_escape_string($db,$article['content']);
    $date = date('c');

    $query_text = "
        INSERT INTO aca_article
        (title, author, date, content)
        VALUES
        ('$title', '$author', '$date', '$content')
    ";
    $result = mysqli_query($db, $query_text);
    return $result;
}

# edit an existing article
function overwrite_article_in_db($db, $article) {
    # this time our $article array needs an 'article_id' number
    # so we know which row in the db to overwrite
    $id = (int)$article['article_id'];
    $title = mysqli_real_escape_string($db,$article['title']);
    $author = mysqli_real_escape_string($db,$article['author']);
    $content = mysqli_real_escape_string($db,$article['content']);
    $date = date('c');

    $query_text = "
        UPDATE aca_article
        SET 
            title='$title', author='$author',
            date='$date', content='$content'
        WHERE article_id=$id
    ";
    $result = mysqli_query($db, $query_text);
    return $result;
}

# delete an existing article
function delete_article_in_db($db, $article_id) {
    $id = (int)$article_id;
    $query_text = "
        DELETE FROM aca_article WHERE article_id=$id
    ";
    $result = mysqli_query($db, $query_text);
    return $result;
}

?>
