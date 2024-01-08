<meta charset=utf-8>
<?php

include 'connect.php';

 // так подключение есть, теперь проверим может уже есть пользователь
 // с таким логином 
 
$tmp_registr = false; // флаг регистрации
$sql_select = "SELECT * FROM `users` LIMIT 0, 50 ";
$stmt = $pdo->query($sql_select);
while ($row = $stmt->fetch())
{
    if ($row['username'] == "$_POST[username]"){ // проверяем
    $tmp_registr = true; // если нашли флаг в true
    echo  "Пользователь с таким именем существует через 5 секунд будет выполнено перенаправление на страницу входа";
    break;
   }
    
}

if ($tmp_registr == false) {

// регистрируем нового пользователя
$sql_insert = 'INSERT INTO `users`
                 SET 
                  `username` = "'.$_POST[username].'",
                  `password` = "'.$_POST[password].'"
                 ';




// Подключение к базе данных и другие необходимые настройки

// ...

// Проверка существования учетной записи администратора
// $sql_select = "SELECT COUNT(*) as count FROM users WHERE role = 'admin'";
// $stmt = $pdo->query($sql_select);
// $row = $stmt->fetch();
// $adminCount = $row['count'];

// if ($adminCount > 0) {
//   // Учетная запись администратора уже существует
//   // Выводите сообщение об ошибке или выполняйте действия, подходящие для вашей логики
//   echo "Регистрация новой учетной записи администратора запрещена.";
// } else {
//   // Можно продолжить регистрацию новой учетной записи администратора
//   // Выполняете необходимые действия для создания учетной записи

//   // ...
// }




$count = $pdo->exec($sql_insert); //запись в базу данных
if ($count!=0) echo "Пользователь зарегистрирован через 5 секунд будет выполнено перенаправление на страницу входа";
else
echo "Что-то пошло не так";
}

?>
<script> window.setTimeout(function() { window.location = '../check.php'; }, 5000) </script>


  