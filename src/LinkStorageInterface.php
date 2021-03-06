<?php

namespace Sabri\Extractor;

interface LinkStorageInterface
{
    public function isLinkExtracted(string $link): bool;
    public function saveLink(string $link, string $hostname): void;
}
