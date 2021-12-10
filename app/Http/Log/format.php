<?php
namespace App\Http\Log;

use Monolog\formatter\LineFormatter;

class format{
    public function __invoke($logger)
    {
        foreach($logger->getHandlers() as $handler){
            $handler->setFormatter(new LineFormatter("\n%message% | %datetime%"));
        }
    }
}