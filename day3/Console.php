<?php

namespace Console;

require_once "DataService.php";

use DataService as ds;

/**
 * chức năng hiển thị danh sách
 */
function ui_list()
{
    global $books;
    echo GREEN . 'The book collection:' . RESET . RN;
    foreach ($books as $key => $b) {
        print "[$key] " . ds\book_info($b) . RN;
    }
}
/**
 * chức năng thêm sách
 */
function ui_new()
{
    $title = readline('Title: ');
    $authors = readline('Authors: ');
    $publisher = readline('Publisher: ');
    $year = (int)readline('Year: ');
    $b = ds\book_create($title, $authors, $publisher, $year);
    ds\book_add($b);
    echo BLUE . ds\book_info($b) . RESET . RN;
}
/**
 * chức năng tải dữ liệu từ file
 */
function ui_load()
{
    ds\data_load();
    echo GREEN . 'Data loaded!' . RESET . RN;
}
/**
 * chức năng lưu dữ liệu vào file
 */
function ui_save()
{
    ds\data_save();
    echo GREEN . 'Data saved!' . RESET . RN;
}
/**
 * chức năng tìm kiếm
 */
function ui_search()
{
    $term = readline('What do you search for? ');
    $found = ds\book_search($term);
    $s = sizeof($found);
    if ($s > 0) {
        echo GREEN . "$s books found:" . RESET . RN;
        foreach ($found as $b) {
            print ds\book_info($b) . RN;
        }
    } else
        echo RED . 'No book found!' . RESET . RN;
}
/**
 * Chức năng xóa dữ liệu
 */
function ui_del()
{
    $term = readline('What do you want to delete? ');
    $count = ds\book_delete($term);
    echo BLUE . "$count books have been removed." . RESET . RN;
}
