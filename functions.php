<?php
function getBooks() : array {
    $booksJson = file_get_contents('books.json');
    return json_decode($booksJson, true);
}
// function putBooks(array $books) {
//     $booksJson = json_encode($books);
//     file_put_contents('books.json');
// }
