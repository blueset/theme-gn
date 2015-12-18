i# Theme Gn

![Preview](http://images.1a23.com/di/R116/567382edd2f03.jpg)

制作：蓝色之风

版本：1.0

分栏：单栏式

Demo：1a23.com

支持特性：

* 可后台控制的Banner背景与文字颜色
* 可后台控制的底边栏
* 封面特色图像支持
* 文章内下载地址生成 （`Link*add/Link*name`）
* 自适应宽度
* 链接列表页面模板
* 本主题基于[Roots](http://www.rootstheme.com/)框架，[Twitter Bootstraps](http://twitter.github.io/bootstrap/)框架制作。

受到Google Now的卡片式UI启发，制作出了本主题。

# 二次使用须知
## 站点信息修改

1. LOGO
`/assets/img/logo3.png`

2. Banner 文字内容
`/templates/head-top-navbar.php` L:26

3.自动填充下载文字
`/templates/content-single.php` L:33

## 版权信息

请在使用时保留制作者信息，包括 `Templates/Footer.php` 的链接，以及CSS中的链接信息。

（不做强制要求）

## 自动填充下载链接使用说明

在发布文章时，可在自定义栏目中填写下载地址。对应名称和值如下：

名称 | 值
-|-
`link1name`   |第一个下载链接的显示名称
`link1add`    |第一个链接的地址
`link2name`   |第二个下载链接的显示名称
`link2add`    |第二个链接的地址
`link3name`   |第三个下载链接的显示名称
`link3add`    |第三个链接的地址
此规律只支持三个链接。

## 二次创作并发布

本作品继承框架的协议，即MIT 协议。

付协议文本如下：

```
Copyright (c) Ben Word and Scott Walkinshaw

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
