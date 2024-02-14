<?php

declare(strict_types=1);

namespace NikolayShvetsov\RenameService;

class RenameFile
{
    public function getNewTitle(string $fileName): string
    {
        $path_info = pathinfo($fileName);
        $name = explode('.', $fileName, 2)[0];
        $result = strtoupper($name) . '.' . $path_info['extension'];

        return $result;
    }
}
