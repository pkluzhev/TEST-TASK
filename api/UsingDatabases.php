<?php
const HOST = 'localhost';
const USERNAME = 'admin';
const PASSWORD = '1234';
const DATABASE = 'clients';

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

function insertToClientsInfo($dataAsArray): void
{
    $conn = createDBConnection();

    $sql = "INSERT INTO clients_info 
            SET
                company_name = '{$dataAsArray['name']}',
                phone = '{$dataAsArray['phone']}',
                email = '{$dataAsArray['email']}',
                company_info = '{$dataAsArray['text']}'";
    $result = $conn->query($sql);
    if (!$result) {
        throw new Exception('Ошибка при добавлении записи в БД');
    }

    closeDBConnection($conn);
}

function insertToEmailList($dataAsArray): void
{
    $conn = createDBConnection();

    $sql = "INSERT INTO email_list 
            SET
                email = '{$dataAsArray['email']}'";
    $result = $conn->query($sql);
    if (!$result) {
        throw new Exception('Ошибка при добавлении записи в БД');
    }

    closeDBConnection($conn);
}

function getDataFromDB($data, $table): array
{
    $conn = createDBConnection();

    $sql = "SELECT * FROM " . $table;
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $row) {
        array_push($data, $row);
    }

    closeDBConnection($conn);
    return $data;
}