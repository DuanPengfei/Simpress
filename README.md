Simpress
========

#安装
>1.克隆所有文件到本地

>2.进入 Simpress 目录，执行 composer install 命令

>3.修改配置文件

>>1./app/config/database.php 文件中修改数据库配置信息

>>2./app/database/seeds/UserTableSeeder.php 文件中修改用户信息

>4.创建数据库并导入数据

>>1.创建数据库

>>2.进入 Simpress 目录，执行 php artisan migrate 命令

>>3.进入 Simpress 目录，执行 php artisan db:seed 命令
