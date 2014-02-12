=== Plugin Name ===
Contributors: Andrew Spear, BenjaminSommer
Donate link: http://ssr.benjaminsommer.com/
Tags: search, replace, find, undo, shortcodes, post, content, safe, preview
Requires at least: 2.8
Tested up to: 3.4.2
Stable tag: 3.0.0
License: CC GNU GPL 2.0 license

Safely search and replace with advanced options and undo operations.

== Description ==

**Shortcodes**
Quite a lot of plugins use shortcodes - deactivating them leaves your shortcodes 
unused and plain to your visitors. With this feature, you can remove existing 
shortcodes, rename them (in case of an update or plugin switch), and even 
remove, rename and add their attributes.


**Search and replace made easy**
Easily search in your post titles, contents, excerpts and comments for 
words and replace them with something else. A visual preview is almost instant, 
using modern AJAX technologies.


**Undo recent tasks**
All operations, or tasks which you can do with this plugin can be undone 
safely anytime later.

== Installation ==

= Software Requirements =
1. PHP 5.2
1. Mysqli 5.5 (plugin uses prepared statements to substantially speed up execution)

= Install =
1. Download and install from within WordPress
1. Choose: Activate or Network Activate

= Notice =
Use of this plugin assumes acceptance of this plugin's license and its Terms of Use, to be found in license.txt.

== Frequently Asked Questions ==

= Not all tasks can be undone. Why? =

The reason is quite simple: to ensure database integrity. For example, when changing post contents in two separate tasks, you firstly have to undo the most recent tasks, then the tasks before that and so on. Simply in temporal reverse order.

== Screenshots ==

1. **Overview**: Main Workspace, with information about recent changes, updates, tips and tricks.
2. **Undo Recent Tasks**: A list of recent tasks which you can undo, anytime.
3. **Change Shortcodes**: Remove, rename or edit shortcodes and their attributes/values.
4. **Screen When Changing Shortcodes**: To be on the safe side, tasks are generate and stored on disk. Only of this step, they are actually executed. Then, visit the subpage "Undo", or proceed to other tasks.

== Changelog ==

= 3.0.0 =
Initial release

== Upgrade Notice ==
