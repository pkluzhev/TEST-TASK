<?php
const HOST = 'localhost';
const USERNAME = 'admin';
const PASSWORD = '1234';
const DATABASE = 'clients';
const TABLE = 'email_list';

function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

function insertToEmailList($dataAsArray): void
{
    $conn = createDBConnection();

    $sql = "INSERT INTO email_list 
            SET
                email = '{$dataAsArray['email']}',";
    $result = $conn->query($sql);
    if (!$result) {
        throw new Exception('Ошибка при добавлении записи в БД');
    }

    closeDBConnection($conn);
}