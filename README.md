jsforphp
========

Tutorial code Jason Rhodes's ["JavaScript for PHP Developers"](https://code.tutsplus.com/courses/javascript-for-php-developers) tutsplus.com course.

* PHP example application found in the /php directory
* JS starter files are found in the /js directory

**A note about dependencies**

Typically I would .gitignore the vendor and node_modules folders in these apps so that we wouldn't be committing our dependency packages to the repo, but for this example app I thought it was best if you had access to the dependencies without having to worry about running composer or npm.

If you prefer to install your own, remove php/vendor and js/node_modules and then run `composer install` and `npm install` in the respective folders to install dependencies yourself. (At that point you should probably add those folders to your .gitignore in your fork, too.)
