@php
Theme::layout('full-width');
SeoHelper::setTitle('About Us - All Catholic Media');
SeoHelper::setDescription('Welcome to All Catholic Media - your home for Daily Saints, inspiring stories, and timeless
Catholic teachings, all in one place.');

// Set this to your founder image URL when ready.
// Example: $founderImageOverride = asset('storage/founder/father-morson.jpg');
// Example: $founderImageOverride = \RvMedia::url('founder/father-morson.jpg');
///$founderImageOverride = null;
$founderImageOverride = asset('storage/founder/father-morson.jpeg');
//$founderImageOverride = asset('storage/founder/father-morson.jpeg');

@endphp

{!! Theme::partial('page-about-us', compact('founderImageOverride')) !!}