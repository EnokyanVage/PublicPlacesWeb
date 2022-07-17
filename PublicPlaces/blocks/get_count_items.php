<?php

$link = mysqli_connect("localhost", "root", "", "publicplaces");
if (mysqli_connect_errno()) 
{
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

function get_count_items($id_category){
    global $link;
    $sql = "SELECT * FROM placescategory WHERE id_category = $id_category";
    $result_count = mysqli_query($link, $sql);
    $count_items_return = mysqli_num_rows($result_count);
    return $count_items_return;
}
?>
