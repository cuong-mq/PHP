<!doctype html>
<?php
// function sum()
// {
//     $args = func_get_args(); //convert param-> arrays
//     $s = 0;
//     var_dump($args);
//     foreach ($args as $num) {
//         if (is_numeric($num))
//             $s += $num;
//     }
//     return $s;
// }
// echo sum(1, 2, 3, 4, 5); 
// echo sum(1, 2, 3, '4', 'abc', 5); 

// function create_new_book(
//     string $title,
//     string $authors,
//     string $publisher,
//     int $year
// ): array {
//     return [
//         'title' => $title,
//         'authors' => $authors,
//         'publisher' => $publisher,
//         'year' => $year
//     ];
// }
// function print_book(array $book)
// {
//     $title = $book['title'];
//     $authors = $book['authors'];
//     $publisher = $book['publisher'];
//     $year = $book['year'];
//     echo "$title $authors -$publisher, $year";
// }
// $book = create_new_book('PHP programming', 'Trump D.', 'Washington', 2020);
// print_book($book);
// // var_dump($book);
// include 'config.php'; 
// echo $a_variable, '<br />';
//  echo A_CONSTANT ;

// use function American\welcome;

// include 'lib1.php';
// include 'lib2.php';
// use function American\welcome as A_Welcome;
// $name = 'Ha Noi';
// A_Welcome($name);
// Russian\welcome($name);

require_once 'funtions.php';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= TITLE; ?></title>
</head>

<body>
    <?php
    echo '<h1>Hello world from PHP</h1>';
    print '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
    ?>
    <h2>Lorem ipsum</h2>
    <p><?= $content ?></p>
    <h2>Best PHP Books</h2>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?php book_info($book); ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>World largest countries</h2>
    <?= $list ?>
</body>

</html>