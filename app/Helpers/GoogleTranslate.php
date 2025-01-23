<?php

use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Cache;

if (!function_exists('translate')) {
    /**
     * Translate text using Google Translate with caching.
     *
     * @param  string  $text
     * @return string
     */
    function translate($text)
    {
        $locale = app()->getLocale();

        if($locale == 'id') {
            return $text;
        }

        // Generate a unique cache key for the text and target language
        $cacheKey = 'translation_' . $locale . '_' . md5($text);

        // Check if the translation exists in cache
        return Cache::remember($cacheKey, 604800, function () use ($text, $locale) {
            // Initialize GoogleTranslate instance
            $googleTranslate = new GoogleTranslate();

            // Set the target language (locale)
            $googleTranslate->setTarget($locale);

            // Translate the text and return the result
            return $googleTranslate->translate($text);
        });
    }
}

