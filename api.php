<?

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $dbname = '#';
    $dbuser = '#';
    $dbpass = '#';

   $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->prepare('INSERT INTO tasks (name, phone, email, text) VALUES(:name, :phone, :email, :text)');

    
    $stmt->bindValue(':name', $_POST['name']);
    $stmt->bindValue(':phone', $_POST['phone']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':text', $_POST['text']);
    

    if ($stmt->execute()) {
        echo '1';
    }
    ?>