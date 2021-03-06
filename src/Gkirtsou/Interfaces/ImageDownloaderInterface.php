<?php

namespace Gkirtsou\Interfaces;

/**
 * Interface ImageDownloaderInterface
 * @package Gkirtsou\Interfaces
 */
interface ImageDownloaderInterface
{
    /**
     * Downloads a remote image and saves it to file system.
     *
     * @param string $url Url to retrieve image from.
     * @return bool
     */
    public function download(string $url);
}
