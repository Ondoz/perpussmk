z<?php

    namespace App\Helpers;

    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;


    class MediaCustomDirHelper implements PathGenerator
    {
        /*
     * Get the path for the given media, relative to the root storage path.
     */
        public function getPath(Media $media): string
        {
            $model = $media->model;
            if (isset($model)) {
                return  '/' . $media->id . '/';
            } else {
                return 'no-model/' . $media->id . '/';
            }
        }
        /*
     * Get the path for conversions of the given media, relative to the root storage path.
     * @return string
     */
        public function getPathForConversions(Media $media): string
        {
            return $this->getPath($media) . 'c/';
        }

        /*
     * Get the path for responsive images of the given media, relative to the root storage path.
     */
        public function getPathForResponsiveImages(Media $media): string
        {
            return $this->getBasePath($media) . '/responsive-images/';
        }

        /*
     * Get a unique base path for the given media.
     */
        protected function getBasePath(Media $media): string
        {
            return $media->getKey();
        }
    }
