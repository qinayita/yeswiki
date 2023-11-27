<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fbe6863e51645503eccfbe34a424373
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimplePie\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimplePie\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplepie/simplepie/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SimplePie' => 
            array (
                0 => __DIR__ . '/..' . '/simplepie/simplepie/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SimplePie' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie.php',
        'SimplePie\\Author' => __DIR__ . '/..' . '/simplepie/simplepie/src/Author.php',
        'SimplePie\\Cache' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache.php',
        'SimplePie\\Cache\\Base' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/Base.php',
        'SimplePie\\Cache\\BaseDataCache' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/BaseDataCache.php',
        'SimplePie\\Cache\\CallableNameFilter' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/CallableNameFilter.php',
        'SimplePie\\Cache\\DB' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/DB.php',
        'SimplePie\\Cache\\DataCache' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/DataCache.php',
        'SimplePie\\Cache\\File' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/File.php',
        'SimplePie\\Cache\\Memcache' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/Memcache.php',
        'SimplePie\\Cache\\Memcached' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/Memcached.php',
        'SimplePie\\Cache\\MySQL' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/MySQL.php',
        'SimplePie\\Cache\\NameFilter' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/NameFilter.php',
        'SimplePie\\Cache\\Psr16' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/Psr16.php',
        'SimplePie\\Cache\\Redis' => __DIR__ . '/..' . '/simplepie/simplepie/src/Cache/Redis.php',
        'SimplePie\\Caption' => __DIR__ . '/..' . '/simplepie/simplepie/src/Caption.php',
        'SimplePie\\Category' => __DIR__ . '/..' . '/simplepie/simplepie/src/Category.php',
        'SimplePie\\Content\\Type\\Sniffer' => __DIR__ . '/..' . '/simplepie/simplepie/src/Content/Type/Sniffer.php',
        'SimplePie\\Copyright' => __DIR__ . '/..' . '/simplepie/simplepie/src/Copyright.php',
        'SimplePie\\Credit' => __DIR__ . '/..' . '/simplepie/simplepie/src/Credit.php',
        'SimplePie\\Enclosure' => __DIR__ . '/..' . '/simplepie/simplepie/src/Enclosure.php',
        'SimplePie\\Exception' => __DIR__ . '/..' . '/simplepie/simplepie/src/Exception.php',
        'SimplePie\\File' => __DIR__ . '/..' . '/simplepie/simplepie/src/File.php',
        'SimplePie\\Gzdecode' => __DIR__ . '/..' . '/simplepie/simplepie/src/Gzdecode.php',
        'SimplePie\\HTTP\\Parser' => __DIR__ . '/..' . '/simplepie/simplepie/src/HTTP/Parser.php',
        'SimplePie\\IRI' => __DIR__ . '/..' . '/simplepie/simplepie/src/IRI.php',
        'SimplePie\\Item' => __DIR__ . '/..' . '/simplepie/simplepie/src/Item.php',
        'SimplePie\\Locator' => __DIR__ . '/..' . '/simplepie/simplepie/src/Locator.php',
        'SimplePie\\Misc' => __DIR__ . '/..' . '/simplepie/simplepie/src/Misc.php',
        'SimplePie\\Net\\IPv6' => __DIR__ . '/..' . '/simplepie/simplepie/src/Net/IPv6.php',
        'SimplePie\\Parse\\Date' => __DIR__ . '/..' . '/simplepie/simplepie/src/Parse/Date.php',
        'SimplePie\\Parser' => __DIR__ . '/..' . '/simplepie/simplepie/src/Parser.php',
        'SimplePie\\Rating' => __DIR__ . '/..' . '/simplepie/simplepie/src/Rating.php',
        'SimplePie\\Registry' => __DIR__ . '/..' . '/simplepie/simplepie/src/Registry.php',
        'SimplePie\\RegistryAware' => __DIR__ . '/..' . '/simplepie/simplepie/src/RegistryAware.php',
        'SimplePie\\Restriction' => __DIR__ . '/..' . '/simplepie/simplepie/src/Restriction.php',
        'SimplePie\\Sanitize' => __DIR__ . '/..' . '/simplepie/simplepie/src/Sanitize.php',
        'SimplePie\\SimplePie' => __DIR__ . '/..' . '/simplepie/simplepie/src/SimplePie.php',
        'SimplePie\\Source' => __DIR__ . '/..' . '/simplepie/simplepie/src/Source.php',
        'SimplePie\\XML\\Declaration\\Parser' => __DIR__ . '/..' . '/simplepie/simplepie/src/XML/Declaration/Parser.php',
        'SimplePie_Author' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Author.php',
        'SimplePie_Cache' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Cache.php',
        'SimplePie_Cache_Base' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Cache/Base.php',
        'SimplePie_Cache_DB' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Cache/DB.php',
        'SimplePie_Cache_File' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Cache/File.php',
        'SimplePie_Cache_Memcache' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Cache/Memcache.php',
        'SimplePie_Cache_Memcached' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Cache/Memcached.php',
        'SimplePie_Cache_MySQL' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Cache/MySQL.php',
        'SimplePie_Cache_Redis' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Cache/Redis.php',
        'SimplePie_Caption' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Caption.php',
        'SimplePie_Category' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Category.php',
        'SimplePie_Content_Type_Sniffer' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Content/Type/Sniffer.php',
        'SimplePie_Copyright' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Copyright.php',
        'SimplePie_Core' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Core.php',
        'SimplePie_Credit' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Credit.php',
        'SimplePie_Decode_HTML_Entities' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Decode/HTML/Entities.php',
        'SimplePie_Enclosure' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Enclosure.php',
        'SimplePie_Exception' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Exception.php',
        'SimplePie_File' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/File.php',
        'SimplePie_HTTP_Parser' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/HTTP/Parser.php',
        'SimplePie_IRI' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/IRI.php',
        'SimplePie_Item' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Item.php',
        'SimplePie_Locator' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Locator.php',
        'SimplePie_Misc' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Misc.php',
        'SimplePie_Net_IPv6' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Net/IPv6.php',
        'SimplePie_Parse_Date' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Parse/Date.php',
        'SimplePie_Parser' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Parser.php',
        'SimplePie_Rating' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Rating.php',
        'SimplePie_Registry' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Registry.php',
        'SimplePie_Restriction' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Restriction.php',
        'SimplePie_Sanitize' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Sanitize.php',
        'SimplePie_Source' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/Source.php',
        'SimplePie_XML_Declaration_Parser' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/XML/Declaration/Parser.php',
        'SimplePie_gzdecode' => __DIR__ . '/..' . '/simplepie/simplepie/library/SimplePie/gzdecode.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fbe6863e51645503eccfbe34a424373::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fbe6863e51645503eccfbe34a424373::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6fbe6863e51645503eccfbe34a424373::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6fbe6863e51645503eccfbe34a424373::$classMap;

        }, null, ClassLoader::class);
    }
}