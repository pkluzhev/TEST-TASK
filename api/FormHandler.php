<?php
include 'UsingDatabases.php';
include 'CheckData.php';

$method = $_SERVER['REQUEST_METHOD'];

$clientsData = [];
$emailsData = [];

if ($method === 'POST') {
    try {
        $dataAsJson = file_get_contents("php://input");
        $dataAsArray = json_decode($dataAsJson, true);
        if (!$dataAsArray) {
            throw new Exception('Некорректная структура JSON');
        }
        switch ($dataAsArray['form']) {
            case 'subscribe':
                unset($dataAsArray['form']);
                if (checkSubscribeFormData($dataAsArray)) {
                    $emailsData = getDataFromDB($emailsData, 'email_list');
                    $uniq = true;
                    foreach ($emailsData as $row) {
                        if ($row['email'] === $dataAsArray['email']) {
                            $uniq = false;
                        }
                    }
                    if ($uniq !== false) {
                        insertToEmailList($dataAsArray);
                    } else {
                        throw new Exception('existed-subscribe-email');
                    }
                }
                break;
            case 'full':
                unset($dataAsArray['form']);
                if (checkMainFormData($dataAsArray)) {
                    $clientsData = getDataFromDB($clientsData, 'clients_info');
                    $uniq = true;
                    foreach ($clientsData as $row) {
                        if ($row['email'] === $dataAsArray['email']) {
                            $uniq = false;
                        }
                    }
                    if ($uniq !== false) {
                        insertToClientsInfo($dataAsArray);
                    } else {
                        throw new Exception('existed-email');
                    }
                }
                break;
            default:
                throw new Exception('Некорректные данные');
        }
    } catch (Throwable $error) {
        echo $error->getMessage();
        exit();
    }
}