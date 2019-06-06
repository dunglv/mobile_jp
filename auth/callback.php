<?php

namespace Auth\Callback;
require '../vendor/autoload.php';
use GuzzleHttp\Client;

if ($_REQUEST['code'] && $_REQUEST['state']) {
    $client = new Client(['http_errors' => false]);
    // お客様による認可が行われたことを「認可コード」として返却します
    $res = $client->request('POST', 'https://conf.uw.docomo.ne.jp/token', [
        'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic ODg4NXp4aHowMDE6ZmpSZ2pzcTUzc0R0VmozN1JxWmZRVkZ2SFRiZTljVDU='
        ],
        'form_params' => [
            'client_id' => '8885zxhz001',
            'grant_type' => 'authorization_code',
            'code' => $_REQUEST['code'],
            'redirect_uri' => 'https://192.168.1.243:3000/auth/callback.php'
        ]]);
    $statusCode = $res->getStatusCode();

    if ($statusCode == 200) {
        $dataObj = json_decode($res->getBody()->getContents());

        // Authentication Requestに対する応答を行います。パラメータに認可コードを設定し、要求元にリダイレクトを行います。
        $client1 = new Client(['http_errors' => false]);
        $userClient = $client1->request('GET', 'https://conf.uw.docomo.ne.jp/userinfo', [
            'headers' => [
                'Authorization' => $dataObj->token_type . ' ' . $dataObj->access_token
            ]]);
        $statusCodeUser = $userClient->getStatusCode();
        if ($statusCodeUser == 200) {
            echo '<pre>';
            var_dump(json_decode($userClient->getBody()->getContents())); die;
            echo '<pre>';
            return json_decode($userClient->getBody()->getContents());
        }
    } else {
        var_dump('error');
    }
}