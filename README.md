# HelloSlim3 - A Slim Framework boilerplate for your apps

[![Build Status](https://travis-ci.org/napolux/helloslim3.svg?branch=master)](https://travis-ci.org/napolux/helloslim3)

A boilerplate for small PHP Projects containing the [Slim](http://www.slimframework.com/) microframework, [Twig](http://twig.sensiolabs.org/) as Template Engine and [Doctrine](http://www.doctrine-project.org/) as ORM.
If you use PHPUnit for tests, the ```/tests``` folder is there, just for you to use :P

## Features

Here are some of the HelloSlim3 features...

* Admin panel (ready to be customized, with basic auth)
* Bootstrap integration
* Basic controller example (both web `/` and API `/api`)
* Basic tests examples

## Requirements

To run HelloSlim3 you need:

* PHP 5.5.x
* A MySQL database (if you really need it)
* [Composer](https://getcomposer.org/download/) & [PHPUnit](http://phpunit.de)
* [SASS](http://sass-lang.com)
* [Install PHPUnit](http://phpunit.de/manual/current/en/installation.html) if you didn't before.

## Setup

* Launch SASS watcher `sass --watch assets/sass/:public/css --style compressed`
* Create a `.env` file in the root of your project. Take a look at `.env.example`
* Change database connection credentials in `.env`
* Change admin username and password in `.env`
* Launch local PHP Server from HelloSlim3 folder `php -S 0.0.0.0:8080 -t public public/index.php`
* Go and visit `http://localhost:8080`
* Enjoy

## How to launch tests locally

* Copy `.env.example` into `.env`
* Change credentials in `.env` according to your setup
* Run `phpunit tests/`

## TODO

* Add some test cases for controller
* Complete the to-do list ;)

Legal stuff
-----------
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
