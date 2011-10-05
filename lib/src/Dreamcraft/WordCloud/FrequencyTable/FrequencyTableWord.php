<?php

namespace Dreamcraft\WordCloud\FrequencyTable;

class FrequencyTableWord
{
    public $word;

    public $title;

    public $count;

    public function __construct($word, $title = null, $use_word_as_title = false)
    {
        $this->word = $word;
        if ($use_word_as_title) {
            $title = $word;
        }
        $this->title = $title;
        $this->count = 0;
    }
}