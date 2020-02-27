# PROLO
prolo is a php web framework used to easly render user interface and reduce html codding by enabling code reusing and implementing opensorce framework like bootstrap classes.
## Introduction
* **creating your first web page**

  ```php
  require 'view.php';
  $page=new Page();
  $page->start("home");
  $page->end();

  ```
