<?php

namespace Alura\DesignPattern\Log;

class ConsoleLogManager extends LogManager
{
    
    public function criarLogWritter(): LogWritter
    {
        return new ConsoleLogWritter();
    }

}
