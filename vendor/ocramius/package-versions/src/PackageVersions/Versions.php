<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => '1.10.2@b9d758e831c70751155c698c2f7df4665314a1cb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.0.8@b0e0deb6e700438401ede433a15a6372d2285202',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.0.3@bfbbdb6c998d50dbf69d2187cb78a5f1fa36e1e9',
  'ocramius/package-versions' => '1.8.0@421679846270a5772534828013a93be709fb13df',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.5.4@d0585d4825a87a5030ca8cd34adb4a17e1066c17',
  'symfony/cache' => 'v5.0.8@0c5f5b1882dc82b255a4bdead4ed3c7738cddc04',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v5.0.8@db1674e1a261148429f123871f30d211992294e7',
  'symfony/console' => 'v5.0.8@5fa1caadc8cdaa17bcfb25219f3b53fe294a9935',
  'symfony/dependency-injection' => 'v5.0.8@92d8b3bd896a87cdd8aba0a3dd041bc072e8cfba',
  'symfony/doctrine-bridge' => 'v5.0.8@013f4ce1a10c6aad81c4ad14466e49d802417f4f',
  'symfony/dotenv' => 'v5.0.8@28658ee990ea643c8111bac242d6ee5f3a15ef72',
  'symfony/error-handler' => 'v5.0.8@949ffc17c3ac3a9f8e6232220e2da33913c04ea4',
  'symfony/event-dispatcher' => 'v5.0.8@24f40d95385774ed5c71dbf014edd047e2f2f3dc',
  'symfony/event-dispatcher-contracts' => 'v2.0.1@af23c2584d4577d54661c434446fb8fbed6025dd',
  'symfony/filesystem' => 'v5.0.8@7cd0dafc4353a0f62e307df90b48466379c8cc91',
  'symfony/finder' => 'v5.0.8@600a52c29afc0d1caa74acbec8d3095ca7e9910d',
  'symfony/flex' => 'v1.6.2@e4f5a2653ca503782a31486198bd1dd1c9a47f83',
  'symfony/form' => 'v5.0.8@a3ec37026c13851565599522f7c1d26cdcdbf7dd',
  'symfony/framework-bundle' => 'v5.0.8@3fd5aec4bc84750752ba1f039829362fa071e037',
  'symfony/http-foundation' => 'v5.0.8@e47fdf8b24edc12022ba52923150ec6484d7f57d',
  'symfony/http-kernel' => 'v5.0.8@3565e51eecd06106304baba5ccb7ba89db2d7d2b',
  'symfony/inflector' => 'v5.0.8@70c25c66427e2bb6ba0827d668366d60b0a90cbf',
  'symfony/intl' => 'v5.0.8@dc50ad5039ac685ca87306a346dc119cacdfea25',
  'symfony/mime' => 'v5.0.8@5d6c81c39225a750f3f43bee15f03093fb9aaa0b',
  'symfony/options-resolver' => 'v5.0.8@3707e3caeff2b797c0bfaadd5eba723dd44e6bf1',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-icu' => 'v1.15.0@9c281272735eb66476e0fa7381e03fb0d4b60197',
  'symfony/polyfill-intl-idn' => 'v1.15.0@47bd6aa45beb1cd7c6a16b7d1810133b728bdfcf',
  'symfony/polyfill-mbstring' => 'v1.15.0@81ffd3a9c6d707be22e3012b827de1c9775fc5ac',
  'symfony/polyfill-php73' => 'v1.15.0@0f27e9f464ea3da33cbe7ca3bdf4eb66def9d0f7',
  'symfony/property-access' => 'v5.0.8@259f26529231ab653fc96fb358e5e41dbb438aed',
  'symfony/routing' => 'v5.0.8@9b18480a6e101f8d9ab7c483ace7c19441be5111',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v5.0.8@a1d86d30d4522423afc998f32404efa34fcf5a73',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v5.0.8@5962eb3be6591cc985f32be1632e7b096d0979e3',
  'symfony/twig-bundle' => 'v5.0.8@6167dbac6f32961b7d19112a7531602f511bf500',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.0.8@909c45839d32f9e4c09d4f155a7d761201e7e47e',
  'symfony/var-dumper' => 'v5.0.8@09de28632f16f81058a85fcf318397218272a07b',
  'symfony/var-exporter' => 'v5.0.8@5d18811da9e1ae2bb86b0a97fb2d784e27ffd59f',
  'symfony/yaml' => 'v5.0.8@482fb4e710e5af3e0e78015f19aa716ad953392f',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'bluemmb/faker-picsum-photos-provider' => 'v1.0@3c21793ba349f0b74567ebfa6ce325dc3bcefafe',
  'doctrine/data-fixtures' => '1.4.2@39e9777c9089351a468f780b01cffa3cb0a42907',
  'doctrine/doctrine-fixtures-bundle' => '3.3.1@39defca57ee0949e1475c46177b30b6d1b732e8f',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'symfony/maker-bundle' => 'v1.15.1@ae95a2b7fa8272e75630c273396097074f23e03f',
  'paragonie/random_compat' => '2.*@8d65168fa45c0a02cb719e65db3777823ff9b8bb',
  'symfony/polyfill-ctype' => '*@8d65168fa45c0a02cb719e65db3777823ff9b8bb',
  'symfony/polyfill-iconv' => '*@8d65168fa45c0a02cb719e65db3777823ff9b8bb',
  'symfony/polyfill-php72' => '*@8d65168fa45c0a02cb719e65db3777823ff9b8bb',
  'symfony/polyfill-php71' => '*@8d65168fa45c0a02cb719e65db3777823ff9b8bb',
  'symfony/polyfill-php70' => '*@8d65168fa45c0a02cb719e65db3777823ff9b8bb',
  'symfony/polyfill-php56' => '*@8d65168fa45c0a02cb719e65db3777823ff9b8bb',
  '__root__' => 'dev-master@8d65168fa45c0a02cb719e65db3777823ff9b8bb',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
