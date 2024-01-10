<?php
// Template Name: Главная

$posts = Timber::get_posts();
$context['products'] = $posts;

Timber::render('main-page.twig', $context);
