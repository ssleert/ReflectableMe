<?php

declare(strict_types = 1);

require_once __DIR__ . '/../../vendor/autoload.php';

use League\CommonMark\GithubFlavoredMarkdownConverter;

class Lib {
    public static string $ProjectName = 'ReflectableMe';
    public static string $SiteTitle = 'sfome own space';
    public static string $MyNickname = 'sfome';

    public static array $MySocialNetWorks = [
        'discord: slugonme'  => '4am and i am dont sleep',
        'telegram' => 'https://t.me/ssleert',
        'github'   => 'https://github.com/ssleert',
        'email'    => 'mailto:ssleert@gmail.com',
    ];

    public static function ListDir(string $dir): array {
        $files = scandir($dir);
        return array_slice($files, 2, count($files) - 2);
    }

    public static function IsUrl(string $url): bool {
        return filter_var($url, FILTER_VALIDATE_URL)
            ? true : false;
    }

    public static function MarkdownToHtml(string $md): string {
        $converter = new GithubFlavoredMarkdownConverter([]);

        return $converter->convert($md)->getContent();
    }

    public static function GetMetaInfoFromPostFile(string $filename): array {
        $fileContent = file_get_contents($filename);

        $posOfStartComment = strpos($fileContent, '<!--');
        $posOfEndComment = strpos($fileContent, '-->', $posOfStartComment);

        $metaInfoStr = substr($fileContent, $posOfStartComment + 4, $posOfEndComment); 

        $metaInfo = parse_ini_string($metaInfoStr);
        $metaInfo['tags'] = str_getcsv($metaInfo['tags']);

        return $metaInfo;
    }
}
