<?php if(!defined('KIRBY')) exit ?>

title: Location
pages: default
files: true
icon: map-marker
fields:
  title:
    label: Title
    type:  text
  bannerText:
    label: Banner Text
    type:  text
    width: 1/2
  banner:
    label: Banner Image
    type:  selector
    mode:  single
    types:
        - image
    width: 1/2
  text:
    label: Text
    type:  textarea
  map:
    label: Map Embed Link
    type:  text