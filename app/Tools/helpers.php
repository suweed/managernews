<?php

use Illuminate\Support\Str;

function limitHtml($html, $limit = 200, $end = '...') {
    $text = strip_tags($html);
    if (strlen($text) <= $limit) {
        return $html;
    }

    $truncated = Str::limit($text, $limit, $end);
    $dom = new DOMDocument();
    @$dom->loadHTML('<div>' . $truncated . '</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    return $dom->saveHTML();
}
