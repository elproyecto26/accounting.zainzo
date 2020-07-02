<?php

function api_url($url = '')
{
  switch (ENVIRONMENT)
  {
    case 'development' :
      $base = 'http://api.zainzo.test/';
      break;
    case 'testing' :
    case 'production' :
      $base = 'http://api.zainzo.com/';
    default :
      break;
  }

  return $base . $url;
}

function master_url($url = '')
{
  switch (ENVIRONMENT)
  {
    case 'development' :
      $base = 'http://zainzo.test/';
      break;
    case 'testing' :
    case 'production' :
      $base = 'http://zainzo.com/';
    default :
      break;
  }

  return $base . $url;
}

function platform_url($url = '')
{
  switch (ENVIRONMENT)
  {
    case 'development' :
      $base = 'http://platform.zainzo.test/';
      break;
    case 'testing' :
    case 'production' :
      $base = 'http://platform.zainzo.com/';
    default :
      break;
  }

  return $base . $url;
}

function accounting_master_url($url = '')
{
  switch (ENVIRONMENT)
  {
    case 'development' :
      $base = 'http://accounting.zainzo.test/';
      break;
    case 'testing' :
    case 'production' :
      $base = 'http://accounting.zainzo.com/';
    default :
      break;
  }

  return $base . $url;
}