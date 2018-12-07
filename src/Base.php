<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 2017/8/17
 * Time: 21:04
 */

namespace Qcloud\Sms;

use Yii;

class Base extends \yii\base\BaseObject
{
    public $url;
    public $appid;
    public $appkey;
    public $util;

    public function __construct($config)
    {
        parent::__construct($config);
        if (is_null($this->appid) || is_null($this->appkey)) {
            $this->appid  = Yii::$app->params['qcloudsms']['appid'];
            $this->appkey = Yii::$app->params['qcloudsms']['appkey'];
        }
        $this->util = new SmsSenderUtil();

    }
}
