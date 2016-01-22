#git-hook

简介
==========
基于php和swoole的简易可靠的代码自动同步工具，可指定分支，指定服务器进行更新


流程
==============
![输入图片说明](http://git.oschina.net/uploads/images/2015/1117/110824_fec0f00f_9084.png "在这里输入图片标题")


特点
==========
    0: 配置化, 配置支持自举
    1：可指定分支


使用
===========
    0:  安装 swoole扩展, https://github.com/swoole/swoole-src

    1:  在分发服务器上执行 php server.php --ip=你服务器ip(默认0.0.0.0) --port=端口(9501) --worker=工作进程数(默认4) -d(守护进程化)

    2:  代码业务服务器执行 php udp.php --ip=你服务器ip(默认0.0.0.0) --port=端口(8991) -d(守护进程化)

    3： 修改config.php里的相关配置

    4:  git的hook shell里可通过 curl执行 http://ip:port (分发服务器的外网ip和端口)，进行代码分发

    5： 提交代码，测试 (注意服务器的防火墙打开相关端口的外部访问权限)