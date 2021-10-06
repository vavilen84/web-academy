<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class DropboxController extends Controller
{
    public function actionUpload()
    {
        $consoleComponent = Yii::$app->console;
        $filename = $consoleComponent->getDumpFilename();
        $dumpPath = $consoleComponent->getDumpPath($filename);
        $consoleComponent->createDbDump($dumpPath);
        $consoleComponent->uploadToDropbox($dumpPath, $filename);
    }
}