<?php
return [
    'test'=>[                                    //项目名
        'refs/heads/dev'=> [                            //分支名称
            [
                'host'=>'127.0.0.1',                        //分支所属服务器ip
                'port'=>8999,                               //分支所属服务器端口
                'path'=> '/home/shenzhe/test',
            ],
        ],
        'refs/heads/master'=> [                            //分支名称
            [
                'host'=>'192.168.0.1',                        //分支所属服务器ip
                'port'=>8999,                                   //分支所属服务器端口
                'path'=> '/home/shenzhe/test',
            ]
        ]
    ],

];