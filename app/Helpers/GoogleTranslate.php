<?php

use Stichoza\GoogleTranslate\GoogleTranslate;

if (!function_exists('translate')) {
    /**
     * Translate text using Google Translate.
     *
     * @param  string  $text
     * @return string
     */
    function translate($text)
    {

        $locale = app()->getLocale();

        // Initialize GoogleTranslate instance
        $googleTranslate = new GoogleTranslate();

        // Set the target language (locale)
        $googleTranslate->setTarget($locale);

        // Translate the text and return the result
        return $googleTranslate->translate($text);
    }
}
