<?php

class EnvDotEditor{
    const ENV_FILE = ".env";

    public static function saveENVConfig(string $envKey, string $envValue){
        $env = self::ENV_FILE;
        $envFile = \EnvEditor\EnvFile::loadFrom($env);

        $envFile->setValue($envKey, $envValue);

        $envFile->saveTo($env);
    }
}