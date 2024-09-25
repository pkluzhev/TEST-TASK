<?php
include 'UsingDatabases.php';
include 'CheckData.php';

$method = $_SERVER['REQUEST_METHOD'];

$dbData = [];
$clientData = [];

if ($method === 'POST') {
    try {
        $dataAsJson = file_get_contents("php://input");
        $dataAsArray = json_decode($dataAsJson, true);
        if (!$dataAsArray) {
            throw new Exception('Некорректная структура JSON');
        }
        if (checkVarChar($dataAsArray, 'email')) {
            $dbData = getDataFromDB($dbData, 'clients_info');

            $found = false;
            foreach ($dbData as $row) {
                if ($row['email'] === $dataAsArray['email']) {
                    $found = true;
                    $clientData = $row;
                }
            }
            if ($found !== false) {
                echo json_encode($clientData);
            } else {
                throw new Exception('not-found');
            }
        }
    } catch (Throwable $error) {
        echo $error->getMessage();
        exit();
    }
}
