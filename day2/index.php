<?php
$name = 'obama';
$name_lower = strtolower($name);
if ($name_lower == 'trump') {
    $greeting = 'Mr. president!';
} else {
    if ($name_lower == 'obama')
        $greeting = 'Mr. Obama. Great to see you!';
    else {
        if ($name_lower == 'bush')
            $greeting = 'Mr. Bush - man of wars';
        else {
            if ($name_lower == 'clinton')
                $greeting = 'Mr. Clinton, how is Monica!';
            else
                $greeting = 'Welcome to PHP';
        }
    }
}
echo $greeting, '<br/>';
?>
<?php

?>
<?php
$name1 = 'Your name: ';
switch (strtolower($name)) {
    case 'trump':
        $greeting = 'Mr. president!';
        break;
    case 'obama':
        $greeting = 'Mr. Obama. Great to see you!';
        break;
    case 'bush':
        $greeting = 'Mr. Bush - man of wars';
        break;
    case 'clinton':
        $greeting = 'Mr. Clinton, how is Monica!';
        break;
    default:
        $greeting = 'Welcome to PHP';
        break;
}
echo $greeting, '<br/>';
?>




<?php
$u = $_POST['username'];
// $b= $_POST[''];
$age = $_POST['age'];
$ngay = $_POST['ngaydangky'];
$e = $_POST['email'];
echo $u . $p . $ngay . $e;
$age;
if ($age >= 18)
    $str = 'Đại học';
elseif ($age >= 16)
    $str = 'Trung học phổ thông';
elseif ($age >= 12)
    $str = 'Trung học cơ sở';
elseif ($age >= 6)
    $str = 'Tiểu học';
elseif ($age >= 2)
    $str = 'Mẫu giáo';
elseif ($age >= 0)
    $str = 'Sơ sinh';
else
    $str = 'Bạn đã ra đời chưa?';
echo $str;
?>
<form method="post">
    <input type="text" name="username">
    <input type="number" name="age">
    <input type="hidden" name="ngaydangky">
    <input type="email" name="email">
    <button type="submit">submit</button>
</form>

<?php
$n = 4;
$i = 1;
$factorial = 1;
while ($i <= $n) {
    $factorial *= $i;
    $i += 1;
}
echo $factorial, '<br/>';
?>
<?php
$n = 6;
$factorial = 1;
for ($i = 1; $i <= $n; $i += 1) {
    $factorial *= $i;
}
echo "$factorial\n", '<br/>';
?>
<?php
$i = 0;
while (true) :
    if ($i == 10)
        break;
    echo "$i\t";
    $i++;
endwhile;
echo "\r\n", '<br/>';
$j = 0;
do {
    $j += 1;
    if ($j == 5) continue;
    echo "$j\t";
} while ($j < 10);
?>
<?php
$e = 'trump@gmail.com';
$a = array(1, 2, 3, 4, 5);
echo '<br/>', $e, '<br/>';
print_r($a);
?>
<?php
$books = array(
    [ // mỗi phần tử là một cuốn sách - là một mảng kết hợp
        'title' => 'PHP programming for dummy',
        'authors' => 'Trump D.',
        'publisher' => 'The White house',
        'year' => 2017
    ],
    '<br/>',
    [
        'title' => 'PHP programming for expert',
        'authors' => 'Obama B.',
        'publisher' => 'The White house',
        'year' => 2013
    ],
    '<br/>',
    [
        'title' => 'PHP programming for professional',
        'authors' => 'Bush G.',
        'publisher' => 'The White house',
        'year' => 2009
    ], '<br/>',
    [
        'title' => 'PHP programming for beginner',
        'authors' => 'Clinton B.',
        'publisher' => 'The White house',
        'year' => 2005
    ],
);
print_r($books);
?>
<?php
$emails = array('trump@gmail.com', 'obama@gmail.com', 'bush@gmail.com',);
echo '<br/>', $emails[0], '<br/>', $emails[1], '<br/>', $emails[2], '<br/>';
$names = ['Trump D.', 'Obama B.', 'Bush G.', 'Clinton B.',];
echo $names[0], '<br/>',  $names[1], '<br/>',  $names[2], '<br/>', $names[3], '<br/>';
// echo chon phan tử và in màn hình , print_r in ra tất cả mảng 
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
];
$row0 = $matrix[0];
print_r($row0);
$books = array(
    [ # mỗi phần tử là một cuốn sách
        'title' => 'PHP programming for dummy',
        'authors' => 'Trump D.',
        'publisher' => 'The White house',
        'year' => 2017,
    ],
    [
        'title' => 'PHP programming for expert',
        'authors' => 'Obama B.',
        'publisher' => 'The White house',
        'year' => 2013,
    ],
);
$book0 = $books[0]; // truy xuất phần tử đầu tiên ($book0 cũng là một mảng)
$book0_title = $books[0]['title']; // tương đương với $book0['title']
$book0_authors = $books[0]['authors']; // tương đương với $book0['authors']
echo $book0_title, $book0_authors, '<br />';
foreach ($books as $book) {
    echo $book['title'], '<br />';
}
foreach ($books as $key => $info) {
    echo "$key = $info[title], $info[authors], $info[year] , <br />";
}
?>
<?php
$trump = [
    'firstname' => 'Donald',
    'lastname' => 'Trump',
    'age' => 74,
    'city' => 'New York',
];
unset($trump['age']);
var_dump($trump);
extract($trump);
$contact = compact('firstname', 'lastname');
echo '<br/>', "$firstname,$lastname,$city";
echo "<br />";
print_r($contact);
echo '<br/>';
?>
<?php
$phone  = array('1212', '12', '2');
$phone[] = '123123312';
$phone[] = '3133';
$phone[] = '123';

print_r($phone) . "\n";
echo "<br>";
?>
<?php
$days = [2 => 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', '7'];
unset($days[2], $days[4], $days[6], $days[8]);
var_dump($days);
echo "<br>";
echo in_array(7, $days) ? "Yes" : "No", "\r\n";
echo "<br>";
echo in_array(7, $days, true) ? "Yes" : "No", "\r\n";
echo "<br>";
array_splice($days, 1, 1); // delete: offset and amount 
var_dump($days);
echo "<br>";
?>
<?php
$book = [
    [

        'authors' => 'Trump D.',
        'publisher' => 'Washington',
        'year' => 2020
    ],
    [
        'title' => 'PHP programming ffff',
        'authors' => 'abbbbccc.',
        'publisher' => 'HN',
        'year' => 202
    ]
];
foreach ($book as $key => $info) {
    // echo "$key = $info[title], $info[authors], $info[year] , <br />";
    // echo  array_key_exists('title', $key) ? true : false;
    echo in_array('202', $info) ? "Yes" : "No", '<br />';
    if (array_key_exists('title', $info)) {
        echo $info['title'], '<br />';
    }
    echo false;
}
// echo array_key_exists('title', $book) ? "Key exists!" : "Key not found!", '<br />';

echo "mang co ", count($book), '<br />';
echo is_array($book) ? true : false, '<br />';
?>
<?php
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
sort($days);
foreach ($days as $d) echo $d, " ";
echo "\r\n", '<br />';
rsort($days);
foreach ($days as $d) echo $d, " ";
echo '<br />';
?>
<?php
function factorial($n)
{
    if ($n == 0) return 1;
    return $n * factorial($n - 1);
}
echo factorial(5);
echo $b, '<br/>';
?>
<?php
function goodbye(&$a)
{
    $a = "See you later!";
}
$b = "";
goodbye($b);
echo $b, '<br/>';
function equation($a, $b = 0, $c = 0)
{
    $d = $b * $b - 4 * $a * $c;
    if ($d < 0) return false;
    return [
        'x1' => (-$b + sqrt($d)) / (2 * $a),
        'x2' => (-$b - sqrt($d)) / (2 * $a)
    ];
}
print_r(equation(1, 2, 1));
print_r(equation(1, 2));
print_r(equation(1));
