<?php declare(strict_types=1);

namespace MichelMelo\LaravelPasses;

use MichelMelo\LaravelPasses\Domains\AppleDomain;
use MichelMelo\LaravelPasses\Domains\GoogleDomain;

class PassBuilder
{
    public function __construct(
        protected AppleDomain $apple,
        protected GoogleDomain $google,
    ) {}

    public function apple(): AppleDomain
    {
        return $this->apple;
    }

    public function google(): GoogleDomain
    {
        return $this->google;
    }
}
