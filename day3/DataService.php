<?php

namespace DataService;

require_once "Config.php";
// mảng dữ liệu ban đầu
$books = array(
    [
        'title' => 'PHP programming for dummy',
        'authors' => 'Trump D.',
        'publisher' => 'The White house',
        'year' => 2017
    ],
    [
        'title' => 'PHP programming for expert',
        'authors' => 'Obama B.',
        'publisher' => 'The White house',
        'year' => 2013
    ],
    [
        'title' => 'PHP programming for professional',
        'authors' => 'Bush G.',
        'publisher' => 'The White house',
        'year' => 2009
    ],
    [
        'title' => 'PHP programming for beginner',
        'authors' => 'Clinton B.',
        'publisher' => 'The White house',
        'year' => 2005
    ],
);
/**
 * Thông tin sách
 * @param array $b
 * @return string
 */
function book_info(array $b)
{
    $title = $b['title'];
    $authors = $b['authors'];
    $publisher = $b['publisher'];
    $year = $b['year'];
    return "$title [$authors] -$publisher, $year";
}
/**
 * Thêm sách vào kho
 * @param $b
 */
function book_add($b)
{
    global $books;
    array_push($books, $b);
}
/**
 * Tạo dữ liệu sách mới
 * @param string $title
 * @param string $authors
 * @param string $publisher
 * @param int $year
 * @return array
 */
function book_create(string $title, string $authors, string $publisher, int $year)
{
    return [
        'title' => $title,
        'authors' => $authors,
        'publisher' => $publisher,
        'year' => $year
    ];
}
/**
 * Lưu dữ liệu vào file json
 */
function data_save()
{
    global $books;
    $json = json_encode($books);
    file_put_contents(DATAFILE, $json);
}
/**
 * Tải dữ liệu từ file json
 */
function data_load()
{
    global $books;
    $json = file_get_contents(DATAFILE);
    $books = json_decode($json, true);
}
/**
 * Tìm kiếm
 * @param string $term từ khóa cần tìm
 * @return array mảng sách tìm thấy
 */
function book_search(string $term)
{
    global $books;
    $result = array();
    foreach ($books as $key => $b) {
        if (
            stripos($b['title'], $term) !== false
            || stripos($b['authors'], $term) !== false
            || stripos($b['publisher'], $term) !== false
        ) {
            array_push($result, $b);
        }
    }
    return $result;
}
/**
 * Tìm và xóa
 * @param string $term từ khóa cần tìm
 * @return int số bản ghi bị xóa
 */
function book_delete(string $term)
{
    global $books;
    $count = 0;
    foreach ($books as $key => $b) {
        if (
            stripos($b['title'], $term) !== false
            || stripos($b['authors'], $term) !== false
            || stripos($b['publisher'], $term) !== false
        ) {
            unset($books[$key]);
            $count++;
        }
    }
    return $count;
}
