# Пакет для изменения названия файлов

Названия файлов меняет на верхний регистр

## Требования

- PHP 7.0

## Установка

composer require nikolay-shvetsov/rename-service

## Использование

$renamiator = new RenameFile();
echo $renamiator->getNewTitle('filename.txt')' // FILENAME.txt
