silverstripe-maintenance
========================

Silverstripe module to enable mantenance mode

installation
============

Upload the maintenance folder to you Silverstripe root folder and run http://[yourdomain]/dev/build

configuration
=============

After installation you create a new page of the MaintenancePage type. You can handle this page type like a normal page with title, content and metatags.

When you want to change something on your site and you don't want your visitors see the changes before everyting is tested, you just have to set the "maintance mode enabled" checkbox on the Main-tab of the Silverstripe Settings.

All requests will redirect to the maintenance page exept the following url's or situations:

You are logged in with administrator rights ;
You call the /admin url ;
You call the /Security url ;
You're site is in Dev mode ;
You're running /dev/build ;

In other words, you can do all the maintenance things while you're visitors see the maintenance page.
