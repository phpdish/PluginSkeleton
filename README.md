# PHPDish Plugin Skeleton

[![Latest Stable Version](https://img.shields.io/packagist/v/phpdish/plugin-skeleton.svg?style=flat-square&label=stable)](https://packagist.org/packages/phpdish/plugin-skeleton)
[![Total Downloads](https://img.shields.io/packagist/dt/phpdish/plugin-skeleton.svg?style=flat-square)](https://packagist.org/packages/phpdish/plugin-skeleton)
[![MIT License](https://img.shields.io/packagist/l/phpdish/plugin-skeleton.svg?style=flat-square)](https://packagist.org/packages/phpdish/plugin-skeleton)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/phpdish/PluginSkeleton.svg?style=flat-square)](https://scrutinizer-ci.com/g/phpdish/PluginSkeleton/?branch=master)

创建 PHPDish 用到的样例代码。一个 PHPDish 插件应该是一个合法的 Symfony 组件。所有的文件结构遵循 [Symfony Bundle](http://symfony.com/doc/current/bundles.html)。

## Installation

1. 在你的 PHPDish 项目下执行下面命令下载代码；

    ```
    $ composer create-project phpdish/plugin-skeleton ProjectName
    ```
    
2. 重命名 `src/AcmePHPDishExamplePlugin.php` 文件为你的插件名称;

    例如：你的插件名称为 `phpdish-email-plugin`，那么本文件名为 `VendorPHPDishEmailPlugin`
    其中vendor是你的名称代号，表示你是这个插件的提供商。

3. 替换命名空间为你的名称开头，如果你不想做这个事情可以省略。

4. 修改的 `composer.json` 文件，把这个插件的命名空间写入自动加载；

   ```json
   {
       "autoload": {
           "psr-4": {
               "Vendor\\PHPDishEmailPlugin\\": "src/"
           }
       },
       "autoload-dev": {
           "psr-4": {
               "Vendor\\PHPDishEmailPlugin\\Tests\\": "tests/"
           }
       },
   }
   ```
   注意，在插件的开发阶段，为确保你的插件会被项目加载，你需要把上面提到的加载项也写入到 `PHPDish` 的 `composer.json` 文件
   里去。

## Support

如果有问题可以前往官网发帖或者直接在 issue 提问。

## License
   
采用 [MIT](https://opensource.org/licenses/MIT) 开源许可证。
