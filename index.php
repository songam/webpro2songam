<?php
$connect = mysql_connect('localhost','root','123456');
$result = mysql_select_db('apm_db_01',$connect);
if($result == 1){
    $tb_name = mysql_list_tables("apm_db_01"); // 데이터 베이스에서 테이블 목록 반환
    $tb_count = mysql_num_rows($tb_name); // 테이블 목록을 카운트
    for($a = 0;$a<$tb_count; $a++)
    if(mysql_tablename($tb_name, $a) == "member") { // 테이블 이름이 member와 같은것을 찾아서
        $flag = "ok"; // $flag 변수에 ok 라고 할당 하고
        break; // for문을 빠져 나옵니다. 다음 로직 진행
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