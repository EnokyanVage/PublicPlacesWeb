<?php 


$link = mysqli_connect("localhost", "root", "", "publicplaces");
if (mysqli_connect_errno()) 
{
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

// Поверка, есть ли GET запрос
if (isset($_GET['pageno'])) {
    // Если да то переменной $pageno присваиваем его
    $pageno = $_GET['pageno'];
} else { // Иначе
    // Присваиваем $pageno один
    $pageno = 1;
}
 
// Назначаем количество данных на одной странице
$size_page = 5;
// Вычисляем с какого объекта начать выводить
$offset = ($pageno-1) * $size_page;


$count_sql = "SELECT COUNT(*) FROM places_data";
// Отправляем запрос для получения количества элементов
$result = mysqli_query($link, $count_sql);
// Получаем результат
$total_rows = mysqli_fetch_array($result)[0];
// Вычисляем количество страниц
$total_pages = ceil($total_rows / $size_page);

// Создаём SQL запрос для получения данных
$sql = "SELECT * FROM places_data LIMIT $offset, $size_page";
// Отправляем SQL запрос
$res_data = mysqli_query($link, $sql);
// Цикл для вывода строк
while($row = mysqli_fetch_array($res_data)){
    // Выводим логин пользователя
    echo $row['login'] . '</br>';
?>