<?php

interface iTelegramData
{
    public function __construct(string $chanel_name);

    public function getChanel(): string;

    public function getLastID(): int;

    public function setLastID(int $id);

}