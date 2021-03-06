## Breakdown on "How to use" of redCORE Webservices API step by step

This document will help you get started with redCORE webservices in just a few steps.

### Set up redCORE plugin

In redCORE plugin you have a option group `Webservice options` where you can enable this API on your site.
You can also change several other options which are best for your project.

`Default output format` option will set default format for all your webservices to JSON or XML. (Note. _you can always get another format by using URI `&format=xml`_)

`Default api page needs authorization` option will restrict clients from accessing your default page if they are not authorized.

`Check user permission against` option can be set to: `Scope` which is granted per OAuth2 Client, or `Joomla` which is granted by using standard Joomla ACL

### Install Webservice

When you access `Administration -> redCORE -> Webservices` you can see list of available webservices. 
You can install one of the existing webservices that come with redCORE or you can create your own webservice.

You can read more about how to install existing webservices [here](chapters/webservices/installation.md) 
or you can read on how to create your own webservice [here](chapters/webservices/xml_file.md).

### Access the webservice

There is a difference between `administrator` and `site` webservices. 

When you access site with `/administrator/` path then you are accessing `administrator` webservices. There is another way to access `administrator` webservices without providing a path in the URL and that is by passing URI `&webserviceClient=administrator` in your link.

When you access your site without `/administrator/` path then you are using `site` webservices.

You can access your webservices directly by typing their name in the URI `option`. Below example is a URL accessing `contact` administrator webservice.

```
http://YOUR-SITE/administrator/index.php?option=contact&api=Hal
```

Please notice that `option` parameter is defined without `com_` in front of the option name. 
You can use it either way, it will work both with `com_` and without it. 
If `com_` it exists it will be stripped down and only rest of the option string will be used to identify webservice name. 
By using this logic you are free to set your webservice name to any name you want, it does not have to be related to the component in the Joomla.

You can access `Default page` of the redCORE webservice API with link:

```
http://YOUR-SITE/index.php?api=Hal
```

Note. _Default page is the page without `option` parameter._

### Different Versions of the same webservice

You can have multiple webservices installed and working on the same time. 
This is good when you have a client who works on an older version of the webservice and cannot upgrade immediately, 
you can have older for old clients, and newer with new features. Versions are formatted using `Semantic Versioning`, you can read more about it [here](http://semver.org/).

To access a specific version of the webservice you have to use parameter `version`. Example 

```
http://YOUR-SITE/administrator/index.php?option=contact&api=Hal&version=1.0.1
```

If `version` is not defined then the redCORE webservice API will use newest installed version on your site. 
