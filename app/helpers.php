<?php

if (!function_exists('page_to_title')) {
    /**
     * Covert page title to correct title.
     *
     * @param  string $title
     * @param  bool $removeRule
     * @return string
     */
    function page_to_title(string $title, bool $removeRule = false)
    {
        $title = str_replace('-', ' ', $title);

        if ($removeRule) {
            $title = str_replace('rule', '', $title);
        }

        return ucwords($title);
    }
}
