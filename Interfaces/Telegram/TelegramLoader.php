<?php

interface iTelegramLoader
{
    public function LoadNews(string $chanel, int $lastId): array;

    public function goSleep();
}
