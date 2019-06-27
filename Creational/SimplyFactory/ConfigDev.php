<?php

class ConfigDev implements ConfigInterface
{
    public function getDatabaseName(): string
    {
        return 'database_dev';
    }
}
