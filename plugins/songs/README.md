# Songs Plugin 

The 'Songs' plugin registers a custom post type, custom taxonomy, and shortcode with WordPress via the 
must-use 'center-hub' plugin. The [songs] shortcode allows users to display a song title, vocal part, and 
audio file on a page or post. The audio file can be played in the browser using WordPress' built in 
audio player. 

### Songs Plugin Configuration

The 'Songs' plugin uses a custom configuration which it registers with the must-use 'central-hub' plugin 
( /wp-content/mu-plugins/central-hub ). 'Songs' registers a 'songs' custom post type, a 'vocal_part' custom 
taxonomy, and a 'songs' shortcode ( tag = [songs] ).

## How to Add a Unique Song Using the Plugin
### Give Each Song Title a Unique Name Before Uploading to the Media Library

Audio files displayed with the Songs plugin must be uploaded to the site Media library before 
they can be displayed with the shortcode. If the intended files reside on an external source 
(e.g. your computer, or a file-sharing application), use the Media library file uploader to add 
the audio files to the site. 

_**Important!**_ SATB (soprano, alto, tenor, and bass) vocal parts must be assigned to each song 
title _before_ they are added to the Media Library. If duplicate song titles are stored in 
external file folders named for different vocal parts, rename the song files to indicate the 
vocal part to which they belong. Otherwise, duplicate song titles will be added to the site. 
The site administrator will not be able to distinguish which song title should be matched to 
a particular vocal part.  

### Upload Song Files to the Media Library

From the WordPress admin area, select 'Media' >> 'Add New' to upload new media to the site. 
On the 'Upload New Media' page, select the button labeled 'Select Files'. 

A box pointing toward a set of files on your computer will be displayed. Navigate to the 
location in your file directory where the source files are located, and highlight the files 
intended for upload. Then select the button labeled 'Open' to initiate the upload process. 
WordPress will automatically complete the file upload to the Media Library. 

### Add a New Song Title to the 'Songs' Plugin

To add a new song title to the plugin admin page, open the WordPress admin and go to: 'Songs' >> 
'All Songs' >> 'Add New'. Enter the title of the song. Then select the 'Add Media' button below 
the title to add an audio file to the content editor. 

### Shortcode Tag and Attributes

The shortcode is registered with the 'songs' tag ( [songs] ) By default, the shortcode attribute 
'song_id' is set to 0. Users can override this attribute by adding the integer value of the song_id 
assigned by WordPress when a new song is added by the plugin. 

For example, if the song 'Once in Royal David's City -- Soprano I' is assigned a song_id of '45', 
then the shortcode [songs song_id="45"] added to the editor would return that song and vocal part
in the audio player on the front end.  

## Dependencies

- 'Central Hub' must-use plugin (required); used to register custom post type, taxonomy, templates, shortcodes, 
    and metaboxes. 
