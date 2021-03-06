<?php

session_start();

if (!isset($_SESSION['identity'])) {
    header('Location: /login.php');
    die();
}

?>

<!doctype html>

<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Crawler</title>
</head>

<body>
    <div class="wrapper-form">
        <form method="POST" action="script.php">
            <div class="form_radio_btn">
                <input id="radio-1" type="radio" name="type" value="forum" class="buttonForum">
                <label for="radio-1">Forum</label>
            </div>

            <div class="form_radio_btn">
                <input id="radio-2" type="radio" name="type" value="reddit" class="buttonReddit" />
                <label for="radio-2">Reddit</label>
            </div>
            <br>
            <br>
            <label for="url">URL:</label>
            <input type="text" name="url" id="url" list="urlList" placeholder="ссылка на ветку форума" />         
            <br />
            <br />
            <div class="wrapper-comments">
                <label for="comments">COMMENTS:</label>
                <input type="text" name="comment_expression" id="comments" list="commentsList" placeholder="выражение xPath" />
                <br />
                <br />
                <label for="commentsText">COMMENTS' TEXT:</label>
                <input type="text" name="comment_text_expression" id="commentsText" list="commentsTextList" placeholder="выражение xPath" />
                <br />
                <br />
                <label for="commentsAuthor">COMMENTS' AUTHOR:</label>
                <input type="text" name="comment_author_expression" id="commentsAuthor" list="commentsAuthorList" placeholder="выражение xPath" />
            </div>
            <br />
            <input type="submit" />
        </form>
        <div class="button">
            <a class="btn" href="/logout.php">LOGOUT</a>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>