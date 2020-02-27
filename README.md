# PROLO
prolo is a php web framework used to easly render user interface and reduce html codding by enabling code reusing and implementing opensorce framework like bootstrap classes.
## Introduction

* **understanding the config file**
#
The most basic thing to know is how to use the config file. It contains various configurations including app and database configurations.

  ```php
  <?php
  //your app configuration
  $app=array(
        "name" => "prolo", // replace with your application name
        "brand" => "Forefront of inovation", //replace with your app brand
        "icon" => "res/icons/favicon.svg", //replace with location to your website favicon
        "host"=>"localhost/prolo", //replace with the host of your site
        "color"=>array(
            "primaryDark"=>"#228b22" //this is the color of the status bar of mobile devices
        ),
        "css" => array( //defines all the css to be used in the site
                        //all css should be placed in the css folder
            "css/all.css",
            "bootstrap.min.css",
            "theme.css",
            "style.css"
        ),
        "js" => array( //defines all the js to be used in the site
                        //all js should be placed in the js folder
            "jquery-3.3.1.slim.min.js",
            "bootstrap.min.js",
            "app.js"
        ),
        "links" => array(
          //The navbar links
            "id"=>array(
                array("item1", "page1.php"),
                array("item2", "page2.php"),
                array("item3", "#section1"),
                array("Dropdown", array(
                   array("item1", "#section2"),
                ))
            )
        )
    );
  ?>
  ```
  
* **creating your first web page**

  ```php
  <?php
  require 'view.php';
  $page=new Page();
  $page->start("home");
  $page->end();
  ?>
  ```
