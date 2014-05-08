# How to set up a composer project

## Download composer.phar from official site getcomposer.org

	If you are a mac or linux user

	$ curl -sS https://getcomposer.org/installer | php

	If you are a windows user 

	php -r "readfile('https://getcomposer.org/installer');" | php

	Then you will get a composer.phar file

## Init composer project

	$ php composer.phar init

	Then terminal or console will prompt you how to create a composer.json file.
	This file tells composer how to manage dependencies and your project.
	
	$ ls
	
	Then you will a basic composer structure.

## Require a third-party php library
	
	Open composer.json, add a require 
	
	{
	  "require": { 
		"symfony/http-foundation": "*"
	  }
	}
	
	$ php composer.phar update

	Then you let composer to download this dependency, It's a symfony component :
	HttpFoundation which we will learn in next tutorial.

