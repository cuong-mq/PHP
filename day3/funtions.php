<?php
define('TITLE', 'Tự học ICT - PHP');
$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$books = [
    1 => [
        'title' => 'PHP programming for dummy',
        'authors' => 'Trump D.'
    ],
    [
        'title' => 'PHP programming for beginner',
        'authors' => 'Trump D.'
    ],
    [
        'title' => 'PHP programming for professional',
        'authors' => 'Trump D.'
    ],
    [
        'title' => 'PHP programming for expert',
        'authors' => 'Trump D.'
    ],
];
function book_info(array $b)
{
    echo "{$b['title']} by {$b['authors']}";
}
$list = <<<HTML
<ol>
    <li>Russia</li>
    <li>Canada</li>
    <li>USA</li>
    <li>China</li>
    <li>Brazil</li>
</ol>
HTML;
