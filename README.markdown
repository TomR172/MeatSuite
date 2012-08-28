# MeatSuite

## Code
### Organization
* lib - external libraries
* css - native css
* img - images used on the site
* js - native js
* sql - native sql
* php - native php
    * lib - classes and functions for interactive with the database, managing sessions, page routing, etc.
    * views - php scripts that generate and display html
        * pages - the main pages of the site
        * partials - snippets of code used from within pages
        * template.php - the main template used for each page
    * scripts - php scripts that should redirect to a page with content
* index.php - the site's front controller

### Front Controller
All requests should be routed through ``index.php`` - the site's front controller.

``index.php`` includes the necessary classes and libraries, and processes each request.  If a ``page`` is requested in the url, it is retrieved from the ``Routing::$pages`` array and included.  If a ``script`` is requested, it is included, with the assumption that the script will perform a redirect when complete.

## Installation
1. ``git clone https://github.com/TomR172/MeatSuite.git``
2. ``cd MeatSuite``
3. run ``sql/structure.sql``
4. ``cp php/config.php.dist php/config.php`` 
5. set database connection information and admin interface credentials in ``php/config.php``