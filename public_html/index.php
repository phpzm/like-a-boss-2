<?php

require dirname(__DIR__) . '/vendor/autoload.php';

/** @noinspection PhpIncludeInspection */
$options = include dirname(__DIR__) . '/config/database.php';

$qb = new Hero\QueryBuilder($options);
#INSERT
$qb
    ->table('users')
    ->fields(['nome', 'login', 'password'])
    ->insert(['William', 'wilcorrea', crypt('senha')]);
#SELECT
$qb
    ->table('users') // poderia não informar, pois já está "salvo"
    ->fields(['id', 'nome', 'login', 'password'])
    ->select();
# UPDATE
$qb
    ->table('users') // poderia não informar, pois já está "salvo"
    ->fields(['nome'])
    ->where(['id = ?'])
    ->update(['William Correa'], [2]);
#DELETE
$qb
    ->table('users') // poderia não informar, pois já está "salvo"
    ->where(['id = ?'])
    ->delete([1]);