<?php

namespace App\Controllers\Modules;

class ModNews
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
