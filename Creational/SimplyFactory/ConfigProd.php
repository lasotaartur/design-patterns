<?php

class ConfigProd implements ConfigInterface
{
    public function getDatabaseName(): string
    {
        return 'database_prod';
    }
}
