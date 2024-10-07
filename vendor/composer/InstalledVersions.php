<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => 'c5410c1bcc99c980414dc250de2d2f6242026a3e',
    'name' => 'educooper/ecommerce',
  ),
  'versions' => 
  array (
    'almasaeed2010/adminlte' => 
    array (
      'pretty_version' => 'v3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd4d9c72931f1dd28601b6bfb387554a381ad540',
    ),
    'educooper/ecommerce' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => 'c5410c1bcc99c980414dc250de2d2f6242026a3e',
    ),
    'fig/http-message-util' => 
    array (
      'pretty_version' => '1.1.5',
      'version' => '1.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d94dc0154230ac39e5bf89398b324a86f63f765',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f4393b648b78a5408747de94fca38beb5f7e9ef8',
    ),
    'nikic/fast-route' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '181d480e08d9476e61381e04a71b34dc0432e812',
    ),
    'nyholm/psr7' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a71f2b11690f4b24d099d6b16690a90ae14fc6f3',
    ),
    'php-http/message-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v6.9.1',
      'version' => '6.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '039de174cd9c17a8389754d3b877a2ed22743e18',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
        1 => '^1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '2.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
        1 => '^1.0 || ^2.0',
      ),
    ),
    'psr/http-server-handler' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '84c4fb66179be4caaf8e97bd239203245302e7d4',
    ),
    'psr/http-server-middleware' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1481f747daaa6a0782775cd6a8c26a1bf4a3829',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '3.0.0',
        1 => '1.0|2.0|3.0',
      ),
    ),
    'rain/raintpl' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'edee683bf242f40cc75bee46a78759f6c1589dca',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'slim/psr7' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '753e9646def5ff4db1a06e5cf4ef539bfd30f467',
    ),
    'slim/slim' => 
    array (
      'pretty_version' => '4.14.0',
      'version' => '4.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5943393b88716eb9e82c4161caa956af63423913',
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v7.1.1',
      'version' => '7.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2210fc99fa42a259eb6c89d1f724ce0c4d62d5d2',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v6.4.12',
      'version' => '6.4.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '72d080eb9edf80e36c19be61f72c98ed8273b765',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v7.1.5',
      'version' => '7.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '38465f925ec4e0707b090e9147c65869837d639d',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.5.0',
      'version' => '3.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0e0d29ce1f20deffb4ab1b016a7257c4f1e789a1',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v7.1.3',
      'version' => '7.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '432bb369952795c61ca1def65e078c4a80dad13c',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v7.1.1',
      'version' => '7.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9fa7f7a21beb22a39a8f3f28618b29e50d7a55a7',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.5.0',
      'version' => '3.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8f93aec25d41b72493c6ddff14e916177c9efc50',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v7.1.5',
      'version' => '7.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '61fe0566189bf32e8cfee78335d8776f64a66f5a',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v6.4.12',
      'version' => '6.4.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '133ac043875f59c26c55e79cf074562127cce4d2',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v7.1.5',
      'version' => '7.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '44204d96150a9df1fc57601ec933d23fefc2d65b',
    ),
    'symfony/monolog-bridge' => 
    array (
      'pretty_version' => 'v7.1.1',
      'version' => '7.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '727be11ae17bb1c5a7f600753b9a1bf0cc0ec3b8',
    ),
    'symfony/monolog-bundle' => 
    array (
      'pretty_version' => 'v3.10.0',
      'version' => '3.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '414f951743f4aa1fd0f5bf6a0e9c16af3fe7f181',
    ),
    'symfony/phpunit-bridge' => 
    array (
      'pretty_version' => 'v7.1.4',
      'version' => '7.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e876eb90e32a8fc4c4911d458e09f88d65877d1c',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.31.0',
      'version' => '1.31.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.31.0',
      'version' => '1.31.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.31.0',
      'version' => '1.31.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.31.0',
      'version' => '1.31.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.31.0',
      'version' => '1.31.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '60328e362d4c2c802a54fcbf04f9d3fb892b4cf8',
    ),
    'symfony/polyfill-php83' => 
    array (
      'pretty_version' => 'v1.31.0',
      'version' => '1.31.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2fb86d65e2d424369ad2905e83b236a8805ba491',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.5.0',
      'version' => '3.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd1d9e59a81d8fa4acdcea3f617c581f7475a80f',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0|3.0',
      ),
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v7.1.5',
      'version' => '7.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd66f9c343fa894ec2037cc928381df90a7ad4306',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v7.1.5',
      'version' => '7.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e20e03889539fd4e4211e14d2179226c513c010d',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v7.1.2',
      'version' => '7.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b80a669a2264609f07f1667f891dbfca25eba44c',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
