# Running the application

Note: Since the file structure is now modularized a little bit, I have introduced a package manager specific to PHP which is called **composer**. Here's what's new.

* The server does not need to interact with the web in order to require the bootstrap files and jquery.

* You don't have to download most of the 3rd party libraries we use in the application because composer takes care of it.

* All of these 3rd party files (except xel theme file which I could not find in [Packagist](https://packagist.org/) which is the package library for composer, I had to manually put that inside the public folder) are stored in **vendor** directory.

* ``composer.json`` file is a manifest which records the 3rd party libraries used in the application (This is similar to ``package.json`` for NodeJs)

Pull/clone the project and run ``composer install`` and you can run the application through a local Apache server as usual.


