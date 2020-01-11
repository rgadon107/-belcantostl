## Summary

The remote repository for the web site of the Bel Canto Chorus of the St. Louis, MO [https://belcantostl.org]. 

This repository root is set on the WordPress `wp-content` directory, and selectively targets plugins and themes in the `mu-plugins`, `plugins`, and `themes` directories. 

The `mu-plugin` plugin directory includes the `central-hub` plugin, which manages the registration of custom post types, 
meta-boxes, custom taxonomies, and shortcodes for the site. The plugin also includes a template handler module that serves up page templates called by custom plugins registered to 'central-hub'. 

The `Developers` child theme includes a style sheet broken up into SCSS partial files. A `gulp` task runner automates
and manages a series of tasks, that include watch, convert SCSS -> CSS, lint, build, autoprefix, and minify the stylesheet.  
