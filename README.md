# Carousel Videos plugin for CakePHP

## Prerequisites
Bootstrap 4

## Installation
Run:
```
composer require connect232/carousel-videos
```
## Usage
Run :
```
bin/cake plugin load CarouselVideos
```
Or in your `src/Application.php` add:
```
$this->addPlugin('CarouselVideos');
```
Run migrations:
```
bin/cake migrations migrate -p CarouselVideos
```
Add carousel cell to template file:
```
<?= $this->cell('CarouselVideos.Carousel'); ?>
```
Include script and css:
```
<?= $this->Html->script('CarouselVideos.carousel'); ?>
<?= $this->Html->css('CarouselVideos.carousel'); ?>
```
or if using AssetCompress plugin in you asset_compress.ini file add:
```
paths[] = ../vendor/connect232/carousel-videos/webroot/js/*
files[] = carousel.js
paths[] = ../vendor/connect232/carousel-videos/webroot/css/*
files[] = carousel.css
```
Add to your routes file:
```
$routes->prefix('admin', function (RouteBuilder $routes) {
    $routes->loadPlugin('CarouselVideos');
    $routes->fallbacks(DashedRoute::class);
});
```
