<?php

use Devin\NGram;

if (! function_exists('bigram')) {
    /**
     * Generate a bi-gram for the provided string.
     *
     * @param string $text
     *
     * @throws \Devin\Exceptions\InvalidArgumentException
     *
     * @return array
     */
    function bigram(string $text)
    {
        return NGram::bigram($text);
    }
}

if (! function_exists('trigram')) {
    /**
     * Generate a tri-gram for the provided string.
     *
     * @param string $text
     *
     * @throws \Devin\Exceptions\InvalidArgumentException
     *
     * @return array
     */
    function trigram(string $text)
    {
        return NGram::trigram($text);
    }
}

if (! function_exists('ngram')) {
    /**
     * Generate a tri-gram for the provided string.
     *
     * @param string $text
     * @param int    $length
     *
     * @throws \Devin\Exceptions\InvalidArgumentException
     *
     * @return array
     */
    function ngram(string $text, int $length = 3)
    {
        return NGram::for($text, $length);
    }
}
