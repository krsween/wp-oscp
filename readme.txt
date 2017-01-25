=== Bullhorn Career Portal Wordpress Plugin ===
Tags: Bullhorn, Career Portal, OSCP
Contributors: krsween
Requires at least: 4.0
Tested up to: 4.7.1
Stable tag: 0.0.5
License: MIT

A simple, lightweight Wordpress plugin that adds Career Portal to any page in your Wordpress install by adding a snippet into the content of any page.

== Description ==

This plugin works on 4.7.1 and ships with Career Portal 2.0.0

A simple, lightweight Wordpress plugin that adds Career Portal to any page in your Wordpress install by adding a snippet into the content of any page.

== Installation ==

Simply download the latest [release](https://github.com/krsween/wp-oscp/archive/0.0.5.zip) and extract it into your plugins directory or search for it via WordPress plugins.

== Implementation ==

Getting your Career Portal to show up in WordPress is easy. Simply add and customize the following script to any page:


~~~~
[oscp]
~~~~


*Then, use the new plugin configuration to set your Career Portal settings.*

## Required Parameters
* `Corp Token` - Your Bullhorn corporation token. We give you this when you're Bullhorn CRM has Career Portal enabled.
* `Swim Lane` - Your Bullhorn swimlane (also provided by Bullhorn).
* `Accepted Resume Types` - The resume types you want to support.
* `Locale` - Language of your Career Portal.
* `Default View` - The default layout of your Career Portal.

*Don't have these?* Reach out to Bullhorn's support staff. They can get these
to you in a heartbeat.

## Optional Parameters

* `Company Name` - The name you want to appear in the header of your Career Portal.
* `Height` - iFrame height attribute.
* `Width` - iFrame width attribute.
* `Scrollable` - iFrame scrollable attribute.
* `Linked In Client ID` - Your LinkedIn Client ID (to enable apply with LinkedIn)


== Contributing ==

Please feel free to fork this and hack on it. It's a free contribution to the Bullhorn and Wordpress communities. If you have suggestions or requests, please create a Github issue.
