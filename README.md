[Русский](#русский) | [English](#english)

---

[![Latest Stable Version](https://img.shields.io/packagist/v/rosgear/rg-wd-article.svg)](https://packagist.org/packages/rosgear/rg-wd-article)
[![Total Downloads](https://img.shields.io/packagist/dt/rosgear/rg-wd-article.svg)](https://packagist.org/packages/rosgear/rg-wd-article)
[![Author](https://img.shields.io/badge/author-anton.tivonenko@gmail.com-blue.svg)](mailto:anton.tivonenko@gmail)
[![Source Code](https://img.shields.io/badge/source-rosgear/rg--wd--article-blue.svg)](https://github.com/rosgear/rg-wd-article)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/rosgear/rg-wd-article/blob/main/LICENSE)
![Component type: widget](https://img.shields.io/badge/component%20type-widget-green.svg)
![Component ID: rg-wd-article](https://img.shields.io/badge/component%20id-rg.wd.article-green.svg)
![php 8.2+](https://img.shields.io/badge/php-min%208.2-red.svg)

<a name="русский"></a>
## <img src="https://raw.githubusercontent.com/rosgear/rg-wd-article/refs/heads/main/assets/images/icon.svg" width="64px" height="64px" align="absmiddle"> Виджет «Материал»

Виджет предназначен для отображения материала (статьи) из базы данных на странице веб-сайта.

### Пример применения
#### с менеджером виджетов:
```
$articles = Ge::$app->widgets->get(
    'rg.wd.article', 
    [
        'showHeader' => false, 
        'viewFile' => '/articles/default.phtml'
    ]
);
$articles->run();
```
#### в шаблоне:
```
echo $this->widget(
    'rg.wd.article', [
    [
        'showHeader' => false, 
        'viewFile' => '/articles/default.phtml'
    ]
]);
```
#### с namespace:
```
use Rg\Widget\Article\Widget as Article;
echo Article::widget(
    'rg.wd.article', [
    [
        'showHeader' => false, 
        'viewFile' => '/articles/default.phtml'
    ]
);
```
если namespace ранее не добавлен в PSR, необходимо выполнить:
```
Ge::$loader->addPsr4('Rg\Widget\Article\\', Ge::$app->modulePath . '/rg/rg.wd.article/src');
```

### Установка

Для добавления виджета в ваш проект, вы можете просто выполнить команду ниже:

```
$ composer require rosgear/rg-wd-article
```

или добавить в файл composer.json вашего проекта:
```
"require": {
    "rosgear/rg-wd-article": "*"
}
```
или скачать архив на [странице виджета](https://rosgear.ru/component/rg-wd-article/) в каталоге приложений RosGear.

После добавления виджета в проект выполните его установку в редакцию веб‑приложения с помощью Панели управления GePanel.

<a name="english"></a>
## <img src="https://raw.githubusercontent.com/rosgear/rg-wd-article/refs/heads/main/assets/images/icon.svg" width="64px" height="64px" align="absmiddle"> Widget «Article»

The widget is designed to display material (articles) from the database on a website page.

### Installation

To add the widget to your project, you can simply run the command below:

```
$ composer require rosgear/rg-wd-article
```

or add to your project's composer.json file:
```
"require": {
    "rosgear/rg-wd-article": "*"
}
```
or download the archive from the [widget page](https://rosgear.ru/component/rg-wd-article/) in the RosGear application catalog.

After adding the widget to the project, install it into the web application edition using the GePanel Control Panel.