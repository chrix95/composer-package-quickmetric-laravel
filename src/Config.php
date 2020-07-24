<?php

namespace Devchris\Quickmetrics;

class Config
{
    public function getQuickmetricsApiKey()
    {
        return getenv('QUICKMETRICS_API_KEY');
    }

}
