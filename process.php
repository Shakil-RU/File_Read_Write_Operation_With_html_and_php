
<?php
    echo "The Following Book is added to the Book List";
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);
    $books[] = $_POST;
    $booksJson = json_encode($books, JSON_PRETTY_PRINT);
    file_put_contents('books.json', $booksJson);
?>