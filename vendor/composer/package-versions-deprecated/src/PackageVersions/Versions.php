<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'shopware/shopware';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.195.2@7e0cdfe30ee3cfa2a1494f8e3b4fa5277f118102',
  'bcremer/line-reader' => '1.1.0@3ec3e200577630f1e58d30b4c1c468b877d8d0a7',
  'beberlei/assert' => 'v3.3.1@5e721d7e937ca3ba2cdec1e1adf195f9e5188372',
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.4@2411a55a2a628e6d8dd598388ab13474802c7b6e',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/orm' => '2.9.5@77cc86ed880e3f1f6c9c5819e131a8aaeeeee0da',
  'doctrine/persistence' => '2.2.2@4ce4712e6dc84a156176a0fbbb11954a25c93103',
  'elasticsearch/elasticsearch' => 'v7.15.0@77a4ade87aef8e8e6b84bafb6704cd35ac15742a',
  'ezimuel/guzzlestreams' => '3.0.1@abe3791d231167f14eb80d413420d1eab91163a8',
  'ezimuel/ringphp' => '1.1.2@0b78f89d8e0bb9e380046c31adfa40347e9f663b',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'firebase/php-jwt' => 'v5.4.0@d2113d9b2e0e349796e72d2a63cf9319100382d2',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'google/auth' => 'v1.18.0@21dd478e77b0634ed9e3a68613f74ed250ca9347',
  'google/cloud-core' => 'v1.43.0@2cbd6d2d975611cd420df428344049fe3a20dbde',
  'google/cloud-storage' => 'v1.25.0@22dd587e5136248e31c8ce047c331acbe74ffbb7',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'guzzlehttp/guzzle' => '7.3.0@7008573787b430c1c1f650e3722d9bba59967628',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'laminas/laminas-code' => '4.4.3@bb324850d09dd437b6acb142c13e64fdc725b0e1',
  'laminas/laminas-escaper' => '2.9.0@891ad70986729e20ed2e86355fcf93c9dc238a5f',
  'league/flysystem' => '1.1.5@18634df356bfd4119fe3d6156bdb990c414c14ea',
  'league/flysystem-aws-s3-v3' => '1.0.28@af7384a12f7cd7d08183390d930c9d0ec629c990',
  'league/mime-type-detection' => '1.8.0@b38b25d7b372e9fddb00335400467b223349fd7e',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'mpdf/mpdf' => 'v8.0.13@42f145615cfe830fd432474da1d2e1f927efe402',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'ongr/elasticsearch-dsl' => 'v7.2.2@c0789c35e8738c2b1138c8d33ec9fbcd740c909d',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.1@eaca1dc1054ddd10cbd83c1461907bee6fb528fa',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'rize/uri-template' => '0.3.3@6e0b97e00e0f36c652dd3c37b194ef07de669b82',
  'setasign/fpdf' => '1.8.4@b0ddd9c5b98ced8230ef38534f6f3c17308a7974',
  'setasign/fpdi' => 'v2.3.6@6231e315f73e4f62d72b73f3d6d78ff0eed93c31',
  'stecman/symfony-console-completion' => '0.11.0@a9502dab59405e275a9f264536c4e1cb61fc3518',
  'superbalist/flysystem-google-storage' => '7.2.2@87e2f450c0e4b5200fef9ffe6863068cc873d734',
  'symfony/cache' => 'v5.3.8@945bcebfef0aeef105de61843dd14105633ae38f',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/class-loader' => 'v3.4.45@5e119b7df5e4db6fcd0570ea20f28e2bc57c3da2',
  'symfony/config' => 'v4.4.30@d9ea72de055cd822e5228ff898e2aad2f52f76b0',
  'symfony/console' => 'v4.4.30@a3f7189a0665ee33b50e9e228c46f50f5acbed22',
  'symfony/debug' => 'v4.4.31@43ede438d4cb52cd589ae5dc070e9323866ba8e0',
  'symfony/dependency-injection' => 'v4.4.31@75dd7094870feaa5be9ed2b6b1efcfc2b7d3b9b4',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v4.4.30@51f98f7aa99f00f3b1da6bafe934e67ae6ba6dc5',
  'symfony/event-dispatcher' => 'v4.4.30@2fe81680070043c4c80e7cedceb797e34f377bac',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.30@78a014771042079cca30716c8471e7a0b985bd22',
  'symfony/filesystem' => 'v4.4.27@517fb795794faf29086a77d99eb8f35e457837a7',
  'symfony/finder' => 'v4.4.30@70362f1e112280d75b30087c7598b837c1b468b6',
  'symfony/form' => 'v4.4.31@e5aca09fd609cffa1c3470acca2c6f49ae53a5b9',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v4.4.30@09b3202651ab23ac8dcf455284a48a3500e56731',
  'symfony/http-kernel' => 'v4.4.32@f7bda3ea8f05ae90627400e58af5179b25ce0f38',
  'symfony/intl' => 'v5.3.8@dc9e9cdefb52ff436ee27af6d9631e455d201a3d',
  'symfony/mime' => 'v5.3.8@a756033d0a7e53db389618653ae991eba5a19a11',
  'symfony/options-resolver' => 'v4.4.30@fa0b12a3a47ed25749d47d6b4f61412fd5ca1554',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v4.4.30@13d3161ef63a8ec21eeccaaf9a4d7f784a87a97d',
  'symfony/property-access' => 'v5.3.8@2fbab5f95ddb6b8e85f38a6a8a04a17c0acc4d66',
  'symfony/property-info' => 'v5.3.8@39de5bed8c036f76ec0457ec52908e45d5497947',
  'symfony/serializer' => 'v5.3.8@a877799b1e94f792208bea68295f6675027c92be',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.3.7@8d224396e28d30f81969f083a58763b8b9ceb0a5',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/validator' => 'v4.4.31@9420a2e8874263a684588283e40252209d80e1a5',
  'symfony/var-dumper' => 'v5.3.8@eaaea4098be1c90c8285543e1356a09c8aa5c8da',
  'symfony/var-exporter' => 'v5.3.8@a7604de14bcf472fe8e33f758e9e5b7bf07d3b91',
  'symfony/web-link' => 'v4.4.27@a55c3a0a5da44965f39cf5f770a2e5a4a95c2c68',
  'wikimedia/less.php' => 'v3.1.0@a486d78b9bd16b72f237fc6093aa56d69ce8bd13',
  'paragonie/random_compat' => '2.*@25d14e7334b7da60d00c24c0cc1250311f6e8511',
  'symfony/polyfill-ctype' => '*@25d14e7334b7da60d00c24c0cc1250311f6e8511',
  'symfony/polyfill-iconv' => '*@25d14e7334b7da60d00c24c0cc1250311f6e8511',
  'symfony/polyfill-php72' => '*@25d14e7334b7da60d00c24c0cc1250311f6e8511',
  'symfony/polyfill-php71' => '*@25d14e7334b7da60d00c24c0cc1250311f6e8511',
  'symfony/polyfill-php70' => '*@25d14e7334b7da60d00c24c0cc1250311f6e8511',
  'symfony/polyfill-php56' => '*@25d14e7334b7da60d00c24c0cc1250311f6e8511',
  'shopware/shopware' => 'dev-version/5.6.0@25d14e7334b7da60d00c24c0cc1250311f6e8511',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
