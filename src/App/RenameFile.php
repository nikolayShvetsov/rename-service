<?php

declare(strict_types=1);

namespace NikolayShvetsov\RenameService;

class RenameFile
{
    public function getNewTitle(string $fileName): string
    {
        $path_info = pathinfo($fileName);
        $result = strtoupper($fileName) . '.' . $path_info['extension'];

        return $result;
    }
}