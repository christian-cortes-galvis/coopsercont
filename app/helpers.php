<?php

if (!function_exists('highlight')) {
    function highlight(string $text, string $term): string
    {
        if ($term === '') return e($text);

        return preg_replace(
            '/(' . preg_quote($term, '/') . ')/i',
            '<mark>$1</mark>',
            e($text)
        );
    }
}
if (!function_exists('search_snippet')) {
    function search_snippet(string $text, string $term, int $radius = 80): string
    {
        if ($term === '') {
            return \Illuminate\Support\Str::limit($text, 160);
        }

        $textLower = mb_strtolower($text);
        $termLower = mb_strtolower($term);

        $pos = mb_stripos($textLower, $termLower);

        if ($pos === false) {
            return \Illuminate\Support\Str::limit($text, 160);
        }

        $start = max($pos - $radius, 0);
        $length = $radius * 2 + mb_strlen($term);

        $snippet = mb_substr($text, $start, $length);

        if ($start > 0) {
            $snippet = '… ' . $snippet;
        }

        if ($start + $length < mb_strlen($text)) {
            $snippet .= ' …';
        }

        return highlight($snippet, $term);
    }
}
