<?php

$routePrefix = '/art';
$controller  = 'Rtoya\Art\ArtController@';

Route::get($routePrefix, array(
    'uses' => $controller.'getIndex',
    'as'   => 'art'));

Route::get($routePrefix.'/{id}/{empty?}', array(
    'uses' => $controller.'getArtById',
    'as'   => 'art.artById'))
    ->where('id', ArtService::REGEXP_ART_ID);

Route::get($routePrefix.'/gallery/{user_id}/{user_name?}', array(
    'uses' => $controller.'getGalleriesByUserId',
    'as'   => 'art.galleriesUser'))
    ->where('user_id', UserService::REGEXP_USER_ID)
    ->where('user_name', UserService::REGEXP_USER_SLUG);

Route::get($routePrefix.'/gallery/{user_id}/{user_name}/{gallery_id}/{gallery_name?}', array(
    'uses' => $controller.'getGallery',
    'as'   => 'art.gallery'))
    ->where('user_id', UserService::REGEXP_USER_ID)
    ->where('user_name', UserService::REGEXP_USER_SLUG)
    ->where('gallery_id', ArtService::REGEXP_GALLERY_ID)
    ->where('gallery_name', ArtService::REGEXP_GALLERY_SLUG);

Route::get($routePrefix.'/gallery/featured', array(
    'uses' => $controller.'getFeaturedGallery',
    'as'   => 'art.featuredGallery'));

Route::get($routePrefix.'/featured', array(
    'uses' => $controller.'getFeaturedArt',
    'as'   => 'art.featuredArt'));

Route::get('/artist/{user_id}/{user_name?}', array(
    'uses' => $controller.'getArtistByUserId',
    'as'   => 'art.artistByUserId'))
    ->where('user_id', UserService::REGEXP_USER_ID)
    ->where('user_name', UserService::REGEXP_USER_SLUG);

Route::get('/artist/featured', array(
    'uses' => $controller.'getFeaturedArtist',
    'as'   => 'art.featuredArtist'));
