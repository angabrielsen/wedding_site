<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
icon: home
fields:
  title:
    label: Title
    type:  text
  bannerh1:
    label: Top Banner Text
    type:  text
    width: 1/2
  bannerh2:
    label: Bottom Banner Text
    type:  text
    width: 1/2
  banner:
    label: Banner Image
    type:  selector
    mode:  single
    types:
        - image
  text:
    label: Text
    type:  textarea
    size:  large