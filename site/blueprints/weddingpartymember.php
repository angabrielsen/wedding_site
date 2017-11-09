<?php if(!defined('KIRBY')) exit ?>

title: Wedding Party Member
pages: false
files: true
icon: user
fields:
  title:
    label: Title
    type:  text
    width: 1/3
  role:
    label: Role
    type: select
    options:
      bestman: Best Man
      maidofhonor: Maid of Honor
      bridalparty: Bridal Party
      groomsparty: Groom's Party
    width: 1/3
  portrait:
    label: Portrait Image
    type:  selector
    mode:  single
    types:
        - image
    width: 1/3
  text:
    label: Text
    type:  textarea