<?php
class HTML
{
protected $name;
public $id;
private $with;
protected function basicAttribute()
{
return "name='$this->name' id='$this->id'";
}
}

//----------------------------------------

class HTML_div extends HTML
{
public function __construct($id , $name)
{
$this->id = $id;
$this->name = $name;
}
public function getDiv($content)
{
$basicAttribute = $this->basicAttribute();
return "<div $basicAttribute >$content</div>";
}
}

//-----------------------------------------------

$objDiv = new HTML_div("bloc_main" , 'avc');
echo $objDiv->getDiv('this is and example of inheritance in php');
