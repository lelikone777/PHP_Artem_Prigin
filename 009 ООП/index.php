<?php


use JetBrains\PhpStorm\Pure;

class Article
{
    public string $title;
    public int $titleFontSize;
    public string $articleBody;
    public int $articleBodyFontSize;
    public string $border;
    public string $bg;

    public function __construct(string $title, string $articleBody, string $border, string $bg, int $titleFontSize=20, int $articleBodyFontSize=14)
    {
        $this->title = $title;
        $this->titleFontSize = $titleFontSize;
        $this->articleBody = $articleBody;
        $this->articleBodyFontSize = $articleBodyFontSize;
        $this->border = $border;
        $this->bg = $bg;
    }

    public function printArticle()
    {
echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
<h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2> <span>{$this->articleBody}</span></div>";
    }
}

class SportsArticle extends Article
{
    public $image;
    #[Pure] public function __construct(string $title, string $articleBody, string $border, string $bg, string $image, int $titleFontSize = 20, int $articleBodyFontSize = 14)
    {
        $this->image = $image;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }
    public function printArticle()
    {
        //Это полиморфизм
        echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
<h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2> <span>{$this->articleBody}</span><img src='{$this->image}' alt='avatar' width='100px'> </div>";
    }
}

class WeatherArticle extends Article
{
    public $temperature;
    public function __construct(string $title, string $articleBody, string $border, string $bg, string $temperature, int $titleFontSize=20, int $articleBodyFontSize=14)
    {
        $this->temperature = $temperature;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }
    public function printArticle()
    {
        //Это полиморфизм
        echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
<h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2> <span>{$this->articleBody}</span><span>{$this->temperature}</span></div>";
    }
}

class PoliticsArticle extends Article
{
    public $link;
    public function __construct(string $title, string $articleBody, string $border, string $bg, string $link, int $titleFontSize=20, int $articleBodyFontSize=14)
    {
        $this->link = $link;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }
    public function printArticle()
    {
        //Это полиморфизм
        echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
<h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2> <span>{$this->articleBody}</span><a style='font-size: {$this->titleFontSize}' href='{$this->link}'>{$this->link}</a></div>";
    }
}



$sportsNews = new SportsArticle('SportTitle', 'lorem sport', '3px solid red', 'white', 'avatar.jpg');
$sportsNews->printArticle();

$weatherNews = new weatherArticle('weatherTitle', 'lorem weather', '3px solid green', 'yellow', '+20');
$weatherNews->printArticle();

$politicsNews = new politicsArticle('politicsTitle', 'lorem politics', '3px solid orange', 'tomato', 'https://google.com');
$politicsNews->printArticle();