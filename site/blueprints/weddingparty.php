<?php if(!defined('KIRBY')) exit ?>

title: Wedding Party
pages: weddingpartymember
files: true
icon: group
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