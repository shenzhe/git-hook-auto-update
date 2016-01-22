<?php
return [
    'laya-hook'=>[
        'refs/heads/master'=> [
            [
                'host'=>'127.0.0.1',
                'port'=>8999,
                'path'=> '/home/git/laya-hook',
            ]
        ]
    ],
    'laya-ask'=>[
        'refs/heads/master'=> [  //主分支，对应于线上的数据
            [
                'host'=>'ask.layabox.com',
                'port'=>8999,
                'path'=> '/data/wwwroot/ask.layabox.com',
            ]
        ],
        'refs/heads/dev'=> [
            [
                'host'=>'127.0.0.1',
                'port'=>8999,
                'path'=> '/home/git/laya-ask',
            ]
        ]
    ],
    'laya-sso'=>[
        'refs/heads/master'=> [  //主分支，对应于线上的数据
            [
                'host'=>'sso.layabox.com',
                'port'=>8999,
                'path'=> '/data/wwwroot/sso.layabox.com',
            ]
        ],
        'refs/heads/dev'=> [
            [
                'host'=>'127.0.0.1',
                'port'=>8999,
                'path'=> '/home/git/laya-sso',
            ]
        ]
    ],
    'laya-ucenter'=>[
        'refs/heads/master'=> [  //主分支，对应于线上的数据
            [
                'host'=>'sso.layabox.com',
                'port'=>8999,
                'path'=> '/data/wwwroot/ucenter.layabox.com',
            ]
        ],
        'refs/heads/dev'=> [
            [
                'host'=>'127.0.0.1',
                'port'=>8999,
                'path'=> '/home/git/laya-ucenter',
            ]
        ]
    ],
    'laya-lib'=>[
        'refs/heads/master'=> [  //主分支，对应于线上的数据
            [
                'host'=>'sso.layabox.com',
                'port'=>8999,
                'path'=> '/data/wwwroot/laya-lib',
            ],
        ],
        'refs/heads/dev'=> [
            [
                'host'=>'127.0.0.1',
                'port'=>8999,
                'path'=> '/home/git/laya-lib',
            ]
        ]
    ],
    'laya-open'=>[
//        'refs/heads/master'=> [  //主分支，对应于线上的数据
//            'host'=>'sso.layabox.com',
//            'port'=>8999,
//            'path'=> '/data/wwwroot/laya-open',
//        ],
        'refs/heads/dev'=> [
            [
                'host'=>'127.0.0.1',
                'port'=>8999,
                'path'=> '/home/git/laya-open',
            ]
        ]
    ],
    'laya-open-sdk'=>[
//        'refs/heads/master'=> [  //主分支，对应于线上的数据
//            'host'=>'sso.layabox.com',
//            'port'=>8999,
//            'path'=> '/data/wwwroot/laya-open',
//        ],
        'refs/heads/dev'=> [
            [
                'host'=>'127.0.0.1',
                'port'=>8999,
                'path'=> '/home/git/laya-open-sdk',
            ]
        ]
    ],
    'laya-bbs'=>[
//        'refs/heads/master'=> [  //主分支，对应于线上的数据
//            'host'=>'sso.layabox.com',
//            'port'=>8999,
//            'path'=> '/data/wwwroot/laya-open',
//        ],
        'refs/heads/dev'=> [
            [
                'host'=>'127.0.0.1',
                'port'=>8999,
                'path'=> '/home/git/laya-bbs',
            ]
        ]
    ],
];