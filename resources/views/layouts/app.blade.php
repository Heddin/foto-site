<?php
/**
 * Created by Alexander Pshenisnuk aka Heddin.
 * @mail: temm.twilightwizard@gmsail.com
 * @github: https://github.com/Heddin
 *
 * Created with: PhpStorm
 *
 * Date: 18.11.2017 * Time: 15:10
 */
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="description" content="Description">
    <meta property="keywords" content="Keywords">
    <title>Laravel/Photography</title>
    @include('layouts.styles')
</head>
<body class="grey darken-4">
    @include('site.header')
    @yield('main')
    @include('layouts.scripts')
    @include('site.footer')
    @include('site.aside')
</body>


