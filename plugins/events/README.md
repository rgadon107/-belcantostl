# Events Plugin 

The 'Events' plugin registers a custom post type, custom metabox, and shortcode with WordPress via the 
must-use 'center-hub' plugin.  

### Events Plugin Configuration

The 'Events' plugin uses a custom configuration which it registers with the must-use 'central-hub' plugin 
( `/wp-content/mu-plugins/central-hub` ). 'Events' registers an 'events' custom post type, metabox, and 
shortcode ( tag = [events] ).  The plugin also accepts the cofiguration of a custom taxonomy, although none is 
registered with the 'central-hub' plugin at present.

### Add a New Event to the Plugin Admin

To add a new event to the plugin admin page, open the WordPress admin and go to: 'Events' >> 
'All Events' >> 'Add New'. Enter the event title, content, and event information (located 
below the content editor), then select 'Publish' to save the post. 

### Shortcode Tag and Attributes

The [events] shortcode allows users to display an event on a page or post via the content editor.  The shortcode 
is registered to WordPress with the 'events' tag ( [events] ). By default, the shortcode attribute 'event_id' 
is set to 0. Users can override this attribute by adding the integer value of the event_id assigned by WordPress 
when a new event is added by the plugin. 

For example, if the event 'Christ Church Cathedral' is assigned an event_id of '1301', 
then the shortcode [events event_id="1301"] added to the post or page editor would display that 
event on the front end.  

The events shortcode also includes a 'class' attribute. The default value of this attribute is '' (an empty string). 
The attribute allows one to add one or more custom HTML classes to the shortcode for front-end styling. 