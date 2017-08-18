
# 腾讯云短信 sdk 使用说明
修改自：https://github.com/qcloudsms/qcloudsms 

yii2 配置文件params.php中配置

    'qcloudsms'                     => [
        'appid'  => '',
        'appkey' => ''
    ],
    
    
或者
  
      $sms = new SmsSingleSender(['appid'  => '','appkey' => '']);