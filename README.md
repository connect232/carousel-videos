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
<?= $this->cell('Carousel'); ?>
```
