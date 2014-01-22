<?php
$connect = mysql_connect('localhost','root','123456');
$result = mysql_select_db('apm_db_01',$connect);
if($result == 1){
    $tb_name = mysql_list_tables("apm_db_01"); 
    $tb_count = mysql_num_rows($tb_name); 
    for($a = 0;$a<$tb_count; $a++)
    if(mysql_tablename($tb_name, $a) == "member") { 
        $flag = "ok"; 
        break; 
    }
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=dhu;charset=utf8;', 'root', '');
    $stmt = $pdo->query('SELECT * FROM users');

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo implode(', ', $row) . PHP_EOL . '<br />';
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
}

$pdo = null;