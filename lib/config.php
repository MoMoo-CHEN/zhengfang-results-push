<?php
/**
 *
 * User: chuwen
 * Date Time: 2020/7/2 17:00
 * Email: <chenwenzhou@aliyun.com>
 */

return [
    //如果你的教务系统强制使用  https  请将 http 末尾加一个 s
    //不知道 gnmkdm
    'URL' => 'https://jwglxt.nmukd.edu.cn/jwglxt/xtgl/login_slogin.html/jwglxt/cjcx/cjcx_cxDgXscj.html?doType=query&gnmkdm=N305005',
    //请将“教务系统域名”改成你的正方教务系统域名
AT_xWvcvmiQbp4MumOql3k7rWHDU0Ykjtr5
    //哪个学年的成绩
    //2020 表示 2020~2021学年度
    'XNM' => 2023,

    //3：上学期
    //12：下学期
    'XQM' => 12,

    //微信消息推送服务（由 WxPusher 提供）
    'WxPusherConfig' => [
        //你在 http://wxpusher.zjiecode.com/admin/app/list
        //创建的 APP_TOKEN
        'APP_TOKEN' => '',
    ]
];
