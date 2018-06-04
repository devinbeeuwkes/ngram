<?php

namespace Devin;

use Devin\Exceptions\InvalidArgumentException;

class NGram
{
    /**
     * The length of the n-gram.
     *
     * @var int
     */
    protected $n;

    protected $string;

    /**
     * NGram constructor.
     *
     * @param int    $n
     * @param string $string
     *
     * @throws \Devin\Exceptions\InvalidArgumentException
     */
    public function __construct(int $n, string $string)
    {
        $this->setN($n);
        $this->setString($string);
    }

    /**
     * Static wrapper for n-gram generator.
     *
     * @param string $text
     * @param int    $n
     *
     * @throws \Devin\Exceptions\InvalidArgumentException
     *
     * @return array
     */
    public static function for(string $text, int $n = 3)
    {
        return (new static($n, $text))->get();
    }

    /**
     * Static wrapper to generate a bigram.
     *
     * @param string $text
     *
     * @throws \Devin\Exceptions\InvalidArgumentException
     *
     * @return array
     */
    public static function bigram(string $text) : array
    {
        return self::for($text, 2);
    }

    /**
     * Static wrapper to generate a trigram.
     *
     * @param string $text
     *
     * @throws \Devin\Exceptions\InvalidArgumentException
     *
     * @return array
     */
    public static function trigram(string $text) : array
    {
        return self::for($text, 3);
    }

    /**
     * Generate the N-gram for the provided string.
     *
     * @return array
     */
    public function get() : array
    {
        $nGrams = [];

        $text = $this->getString();
        $max = \mb_strlen($text);
        $n = $this->getN();
        for ($i = 0; $i + $n <= $max; $i++) {
            $partial = '';
            for ($j = 0; $j < $n; $j++) {
                $partial .= $text[$j + $i];
            }
            $nGrams[] = $partial;
        }

        return $nGrams;
    }

    /**
     * @return int
     */
    public function getN() : int
    {
        return $this->n;
    }

    /**
     * Set the length of the n-gram.
     *
     * @param int $n
     *
     * @throws \Devin\Exceptions\InvalidArgumentException
     *
     * @return \Devin\NGram
     */
    public function setN(int $n) : NGram
    {
        if ($n < 1) {
            throw new InvalidArgumentException('Provided number cannot be smaller than 1');
        }

        $this->n = $n;

        return $this;
    }

    /**
     * Set the string to create the n-gram for.
     *
     * @param string $string
     *
     * @return \Devin\NGram
     */
    public function setString(string $string) : NGram
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Get the string used for the n-gram.
     *
     * @return string
     */
    public function getString() : string
    {
        return $this->string;
    }
}
