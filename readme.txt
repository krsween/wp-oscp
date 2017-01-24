=== Bullhorn Career Portal Wordpress Plugin ===
Tags: Bullhorn, Career Portal, OSCP
Contributors: krsween
Requires at least: 4.0
Tested up to: 3.4
Stable tag: 0.0.3
License: MIT

A simple, lightweight Wordpress plugin that adds Career Portal to any page in
your Wordpress install by adding the following snippet into the content of your
page:


== Description ==

This plugin works on 4.7.1 and ships with Career Portal 2.0.0

A simple, lightweight Wordpress plugin that adds Career Portal to any page in
your Wordpress install by adding the following snippet into the content of your
page:

== Installation ==

Simply download the latest [release](https://github.com/krsween/wp-oscp/archive/0.0.1.zip)
and extract it into your plugins directory.

== Implementation ==

Getting your Career Portal to show up in WordPress is easy. Simply add and
customize the following script:


```
[oscp height="500px" width="100%" scrolling="yes" corptoken="[YOUR CORP TOKEN]" sl= "[YOUR SWIMLANE]" li="[YOUR LINKEDIN CLIENT ID]"]
```

## Required Parameters
* `corptoken` - Your Bullhorn corporation token. We give you this when you're
Bullhorn CRM has Career Portal enabled.
* `sl` - Your Bullhorn swimlane (also provided by Bullhorn).

**Don't have these?** Reach out to Bullhorn's support staff. They can get these
to you in a heartbeat.

== Optional Parameters ==

* `height` - iFrame height attribute.
* `width` - iFrame width attribute.
* `scrolling` - iFrame scrollable attribute.
* `li` - Your LinkedIn Client ID (to enable apply with LinkedIn)


== Contributing ==

Please feel free to form this and hack on it. It's a free contribution to the
Bullhorn and Wordpress communities. If you have suggestions or requests, please
create a Github issue.

