### TODOs (Pull Requests are more than welcome!)

- [ ] The dropdown for functions is not labelled. Either a placeholder text or a label horizontally aligned with `parameter` and `argument` would be helpful.
- [ ] It's been pointed out that it's difficult to figure out what the functions do exactly. I think a neat solution for this would be to scroll to the function within the `orlyscript` box and one can read the comment on the function to get the brief description of what it does.
- [ ] The incremental graph visualization currently only supports going forward one edge at a time by pressing the right-arrow key. A few things here:
  - [ ] Support going backwards, taking off one edge at a time.
  - [ ] A progress bar to show how much of the graph has been displayed.
  - [ ] A simple instruction box indicating that you can use arrow keys to manuever through the graph.
  - [ ] Would be cool to animate through the growth of the graph.
- [ ] Currently the results are returned as an object with a `type` field indicating how the data should be displayed. I think perhaps a better method would be to simply return the data and try to visualize it in various ways.
- [ ] It would nice to provide a button to get out of full-screen mode. `CodeMirror`'s full-screen mode is set up so that `Esc` or `F11` brings you back to normal state. However, `F11` seem to adjust volume on Macs and `Esc` doesn't work if some plugins (e.g. Vimium) is turned on.
- [ ] We should be able to add a simple timer to measure (at least roughly) the duration of the query.
- [ ] Syntax highlight as OrlyScript rather than as C++.

## Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework) [![License](https://poser.pugx.org/laravel/framework/license.png)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
