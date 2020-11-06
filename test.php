<?php
require 'db.php';
require 'view.php';
$page=new Page();
$page->start("admin");

    $side_nav = new SideNav();
    $side_nav->addClass("bg-dark");
    
    $side_nav->addLink("Dashboard", "#", " active");
    $side_nav->addLink("Products", "#");

    $nav = new Navbar();
    $nav->addClass("fixed-top");
    $side_nav->addItem($nav->show(false));
    $side_nav->show();

    $code = new Section();
    $code->class="row show-in-nav py-4 my-3"; 
    for($i=0; $i<3; $i++)
    {
        $code->addItem($page->snip("trending_lands"));
    }
    $code->getImages();
    $code->show();

$page->end();
?>