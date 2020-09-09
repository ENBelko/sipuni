<?php

namespace classes;

class Sorter
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getString(): string
    {
        return $this->string;
    }

    public function getSorted(): string
    {
        $string = $this->string;
        $stringParts = preg_split('/ /', $string);

        $sorted = '';
        foreach ($stringParts as $part) {

            $letters = preg_split('//u', $part);
            sort($letters);

            $sorted =  $sorted . ' ' . implode($letters);

        }
        return $sorted;

    }
}