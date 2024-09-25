<?php

function checkVarChar($dataAsArray, $arrKey): bool
{
    $correct = true;

    if (gettype($dataAsArray[$arrKey]) !== 'string') {
        throw new Exception('Некорректный тип данных для ключа ' . $arrKey);
        $correct = false;
    }
    if (!$dataAsArray[$arrKey]) {
        throw new Exception('Пустое поле по ключу ' . $arrKey);
        $correct = false;
    }
    if (strlen($dataAsArray[$arrKey]) > 255) {
        throw new Exception('Превышена длина для данных по ключу ' . $arrKey);
        $correct = false;
    }
    return $correct;
}

function checkTextType($dataAsArray, $arrKey): bool
{
    $correct = true;

    if (gettype($dataAsArray[$arrKey]) !== 'string') {
        throw new Exception('Некорректный тип данных для ключа ' . $arrKey);
        $correct = false;
    }
    if (!$dataAsArray[$arrKey]) {
        throw new Exception('Пустое поле по ключу ' . $arrKey);
        $correct = false;
    }
    return $correct;
}

function checkMainFormData($dataAsArray): bool
{
    $correct = true;

    $correct = checkVarChar($dataAsArray, 'name') 
    && checkVarChar($dataAsArray, 'phone') 
    && checkVarChar($dataAsArray, 'email')
    &&checkTextType($dataAsArray, 'text');
    return $correct;
}

function checkSubscribeFormData($dataAsArray): bool
{
    $correct = true;

    $correct = checkVarChar($dataAsArray, 'email');
    return $correct;
}
