<?php

namespace League\Fractal\Resource;

/**
 * An interface that enables a resource to have additional metadata
 */
interface MetaDataInterface
{
    /**
     * Get the meta data.
     *
     * @return array
     */
    public function getMeta();

    /**
     * Get the meta data.
     *
     * @param string $metaKey
     *
     * @return array
     */
    public function getMetaValue($metaKey);
}
