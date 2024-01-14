<?php


const DB_HOST = 'database';
const DB_USER = 'root';
const DB_PASSWORD = 'secret';
const DATABASE = 'shopDB';

const DSN = 'mysql:host=' . DB_HOST . ';dbname=' . DATABASE;

const APP_DIR = BASE_DIR . '/app/';

define('DOMAIN', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN . '/assets';
const ASSETS_DIR = BASE_DIR . '/assets';

const IMAGES_URI = DOMAIN . '/img';
const IMAGES_DIR = BASE_DIR . '/img';