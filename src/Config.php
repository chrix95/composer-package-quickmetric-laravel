<?php

namespace Devchris\Quickmetrics;

class Config
{
    public function getQuickmetricsApiKey()
    {
        if (getenv('APP_ENV') == 'production') {
            return getenv('LIVE_QUICKMETRICS_API_KEY');
        } else {
            return getenv('TEST_QUICKMETRICS_API_KEY');
        }
    }

}
