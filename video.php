<?php
interface video {
    function getName();
    function getSource();
    function getHTMLCode();
}

abstract class film implements video{
    protected $name;
    protected $source;

    function __construct($name, $source){
        $this->name = $name;
        $this->source = $source;
    }
    public function getSource(){
        return $this->source;
    }
    abstract public function getName();
    abstract public function getHTMLCode();
}

class youtube extends film{
    function __construct($name, $source) { parent::__construct($name,$source);}
    public function getSource(){return parent::getSource();}
    public function getName(){
        return 'Youtube | ' . $this->name;
    }
    public function getHTMLCode(){
        return "<figure>
                    <figcaption>". $this->getName() ."</figcaption>
                    <iframe width=\"560\" height=\"315\" src=\"". $this->getSource() ."\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                </figure><br>\n";
    }
}

class vimeo extends film{
    function __construct($name, $source) { parent::__construct($name,$source);}
    public function getSource(){return parent::getSource();}
    public function getName(){
        return 'Vimeo | ' . $this->name;
    }
    public function getHTMLCode(){
        return "<figure>
                    <figcaption>". $this->getName() ."</figcaption>
                    <iframe width=\"560\" height=\"315\" src=\"". $this->getSource() ."\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                </figure><br>\n";
    }
}
