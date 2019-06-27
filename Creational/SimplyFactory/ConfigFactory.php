<?php

class ConfigFactory
{
    public function createConfig(string $environment): ConfigInterface
    {
        switch ($environment) {
            case 'dev':
                return new ConfigDev();
            case 'prod':
                return new ConfigProd();
        }
    }
}
