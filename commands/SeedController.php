<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\tests\fixtures\UserFixture;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $fixtures = [
            'user' => UserFixture::class,
            // Add other fixtures here
        ];

        foreach ($fixtures as $fixture) {
            echo "Loading " . $fixture . "\n";
            $fixtureInstance = new $fixture();
            $fixtureInstance->unload();
            $fixtureInstance->load();
        }

        return ExitCode::OK;
    }
}
