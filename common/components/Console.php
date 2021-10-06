<?php
namespace common\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use Dropbox;

class Console extends Component
{
    public function getDumpFilename()
    {
        return date('d-m-Y_G:i') . '.bz2';
    }

    public function getDumpPath($filename = null)
    {
        $filename = $filename ?: $this->getDumpFilename();

        return '/tmp/' . $filename;
    }

    public function createDbDump($dumpPath = null)
    {
        $db = Yii::$app->db;
        $dumpPath = $dumpPath ?: Yii::$app->console->getDumpPath();
        $command = sprintf(
            'mysqldump -h localhost -u %s --password=%s %s | bzip2 > %s',
            $db->username,
            $db->password,
            Yii::$app->params['dbName'],
            $dumpPath
        );
        exec($command);
    }

    public function uploadToDropbox($dumpPath, $filename)
    {
        $dbxClient = new Dropbox\Client(Yii::$app->params['dropboxToken'], Yii::$app->params['dropboxClientIdentificator']);
        $f = fopen($dumpPath, 'rb');
        $dbxClient->uploadFile('/' . date('Y') . '/' . date('m') . '/' . $filename, Dropbox\WriteMode::add(), $f);
        fclose($f);
        unlink($dumpPath);
    }
}