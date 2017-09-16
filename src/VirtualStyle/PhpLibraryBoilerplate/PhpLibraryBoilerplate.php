<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 7.1
 *
 * LICENSE: MIT
 *
 * @author      Rob Wood <rob@virtualstyle.us>
 * @version     0.1.0
 * @copyright   2017 Rob Wood
 * @license     https://choosealicense.com/licenses/mit/
 * @link        https://github.com/virtualstyle/@virtualstyle/php-library-boilerplate
 */
namespace VirtualStyle\PhpLibraryBoilerplate;

use Exception;

/**
 * VirtualStyle\PhpLibraryBoilerplate\PhpLibraryBoilerplate is a stub class for scaffolding a PHP library project
 *
 * VirtualStyle\PhpLibraryBoilerplate\PhpLibraryBoilerplate is a class that provides a stub file to
 * begin development.
 *
 */
class PhpLibraryBoilerplate implements PhpLibraryBoilerplateInterface
{
    /**
     * This constructor accepts an optional array of options to add to/
     * override a base set of options.
     *
     * @method __construct
     * @param array      $options optional array of options to add to/
     *                            override a base set of options
     */
    public function __construct(array $options = [])
    {
        $options = array_merge(['someOption' => 'someValue'], $options);
    }

    /**
     * Short description for function
     *
     * @inherit
     * {@inherit}
     * {@inheritdoc}
     *
     * @method sayHello
     * @param  string   $name A string passed in to use as a name
     * @return string
     */
    public function sayHello(string $name)
    {
        return "Hello $name" . PHP_EOL;
    }
}
