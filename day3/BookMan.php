<?php
require_once "Config.php";
require_once "Console.php";
require_once "DataService.php";
/**
 * Báo lỗi
 * @param string $cmd lệnh lỗi
 */
function main_error(string $cmd)
{
    echo RED . "Command '$cmd' not found! Type 'help' for supported commands." . RESET . RN;
}
/**
 * Hiển thị trợ giúp
 */
function main_help()
{
    echo BLUE . 'BOOK MANAGER V1.0 By TuHocICT.com' . RESET . RN;
    echo <<<MENU
help     Show this menu
quit     Exit program
list     Show all books
new      Add new book
MENU;
}
$actions = [
    'help' => function () {
        main_help();
    },
    'quit' => function () {
        exit();
    },
    'list' => function () {
        Console\ui_list();
    },
    'new' => function () {
        Console\ui_new();
    },
    'load' => function () {
        Console\ui_load();
    },
    'save' => function () {
        Console\ui_save();
    },
    'search' => function () {
        Console\ui_search();
    },
    'del' => function () {
        Console\ui_del();
    }
];
/**
 * Entry point
 */
function main()
{
    global $actions;
    while (true) {
        echo BLUE . "Command > " . RESET;
        $cmd = strtolower(readline());
        if (array_key_exists($cmd, $actions))
            $actions[$cmd]();
        else
            main_error($cmd);
    }
}
main();
