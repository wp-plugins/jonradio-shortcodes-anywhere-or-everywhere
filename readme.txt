=== jonradio Shortcodes Anywhere or Everywhere ===
Contributors: jonradio
Donate link: http://zatzlabs.com/plugins/
Tags: shortcode
Requires at least: 2.5
Tested up to: 3.9
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows Shortcodes to be used nearly Everywhere, not just in Posts and Pages.

== Description ==

Shortcodes can be added to Page Titles, Post Titles, Widgets, Widget Titles, Site Title and Description, not just Pages and Posts as is already provided by WordPress itself.  This allows Shortcodes to be used in Sidebars, Menus, Headers, Footers and even the HTML `<title>` element that appears in the Title Bar of most browsers.

A Settings page includes checkboxes to select where Shortcodes might appear:

* In Page and Post Titles
* In Browser Title Bar via `<title>`
* In Widgets used in Sidebars, Menus, Headers, Footers, etc.
* In Widget Titles
* In Site Title, Description and other bloginfo options

A default Warning feature, which can be disabled on the Settings page, displays a message at the top of every Admin panel if the plugin is Activated but doing nothing because no Where? checkboxes are selected (other than the mandatory In Pages and In Posts settings).

All Shortcodes are supported by this plugin, no matter whether you are using Shortcodes defined by:

* WordPress itself, such as `[gallery]`, `[audio]`, `[caption]`, `[embed]` or `[video]`
* Your Active Theme
* Another Plugin, for example, jonradio Current Year and Copyright Shortcodes
* Writing your own Plugin and using the `add_shortcode()` function
* Using a Shortcode creation Plugin, for example, Shortcode Exec PHP

Future versions will include more areas of the WordPress web site where Shortcodes may be used, based on the needs of users of this Plugin.

No attempt has been made to allow Shortcodes to be used to display values in Admin panels.  This is the default WordPress behaviour, and changing it may have unintended consequences.

Plugin Developers may find the Table-Driven Design of interest.  This was a popular concept in the 1980s and was used in this plugin to simplify the use of WordPress Filters.  The two-dimensional global array $jr_saoe_filters is the Table involved.

This plugin was created to satisfy a request from a user of the [jonradio Current Year and Copyright Shortcodes plugin](http://wordpress.org/plugins/jonradio-current-year-and-copyright-shortcodes/ "jonradio Current Year and Copyright Shortcodes") to use these Shortcodes in a Page Title.

== Installation ==

This section describes how to install the *jonradio Shortcodes Anywhere or Everywhere* plugin and get it working.

1. Use **Add Plugin** within the WordPress Admin panel to download and install this *jonradio Shortcodes Anywhere or Everywhere* plugin from the WordPress.org plugin repository (preferred method).  Or download and unzip this plugin, then upload the `/jonradio-shortcodes-anywhere-or-everywhere/` directory to your WordPress web site's `/wp-content/plugins/` directory.
1. Activate the *jonradio Shortcodes Anywhere or Everywhere* plugin through the **Installed Plugins** Admin panel in WordPress.  If you have a WordPress Network ("Multisite"), you can either **Network Activate** this plugin through the **Installed Plugins** Network Admin panel, or Activate it individually on the sites where you wish to use it.  Activating on individual sites within a Network avoids some of the confusion created by WordPress' hiding of Network Activated plugins on the Plugin menu of individual sites.  Alternatively, to avoid this confusion, you can install the [jonradio Reveal Network Activated Plugins](http://wordpress.org/plugins/jonradio-reveal-network-activated-plugins/ "jonradio Reveal Network Activated Plugins") plugin.
1. View the Settings page, either by clicking on the **Settings** link in the entry for this plugin shown in the Installed Plugins Admin panel in WordPress, or from the Admin menu, **Settings-Shortcodes Anywhere or Everywhere**.
1. Select where Shortcodes will be used, and click the Save Changes button.

== Frequently Asked Questions ==

= Where should Feature Requests be sent? =

Please fill out this [Contact Form (click here)](http://zatzlabs.com/contact-us/ "Contact Form").

== Changelog ==

= 1.0 =
* Support Shortcodes in Titles, Widgets, Widget Titles, Site Title/Description, including `<title>`
* Settings Page to turn each Filter used on and off, and to show Pages and Posts as always on
* Warning when nothing selected

== Upgrade Notice ==

= 1.0 =
* First Production Version