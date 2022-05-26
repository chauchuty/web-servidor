<?php
function nextPage($page, $notify='', $code='')
{
    // $params = !$notify == '' || !$code == '' ? "?notify=$notify&code=$code" : '';
    header("Location: $page");
}
