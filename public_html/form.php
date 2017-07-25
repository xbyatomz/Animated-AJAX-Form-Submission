<?php 
// Try to connect to the server, catch any errors
try
{
    // Replace this connection String with your own server connection
   $pdo = new PDO('mysql:dbname=form;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (PDOExecption $e)
{
    echo 'Failed to connect to the server - ' . $e;
}

// Make sure something has been submitted
if (isset($_POST) && $_POST != '')
{
    // Try to insert into the database
    try
    {
        // Create the query string with place holders for SQL Injection protection
       $stmt = $pdo->prepare('INSERT INTO people(fname,sname, ip, port)
                             VALUES(:firstname, :surname, :ip, :port)');
        // Used to define what the place holder values are
        $criteria = [
            'firstname' => $_POST['fname'],
            'surname' => $_POST['sname'],
            'ip' => $_POST['ip'],
            'port' => $_POST['port']
        ];
        // Execute the query
        $stmt->execute($criteria);
        //Provide user feedback
        echo 'Insert Successful!';
    }
    // Catch any errors thrown by the database insert
    catch (Execption $ee)
    {
        echo 'Insert Failded - ' . $ee;
    }
}
// Provide feedback on invalid requests
else 
{
    echo 'Invalid Request';
}
?>