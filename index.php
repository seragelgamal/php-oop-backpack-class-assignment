<?php

class Backpack {
  function __construct(string $color, string $size) {
    $this->color = $color;
    $this->size = $size;
    $this->items = [];
    $this->open = false;
  }

  function openBag() {
    if (!$this->open) {
      $this->open = true;
      echo("The $this->size $this->color backpack is now open");
    } else {
      echo("The $this->size $this->color backpack is already open");
    }
  }

  function closeBag() {
    if ($this->open) {
      $this->open = false;
      echo("The $this->size $this->color backpack is now closed");
    } else {
      echo("The $this->size $this->color backpack is already closed");
    }
  }

  function putin($item) {
    if ($this->open) {
      array_push($this->items, $item);
      echo("The $item has been put in to the $this->size $this->color backpack");
    } else {
      echo("The $this->size $this->color backpack is closed, so the $item couldn't be put in");
    }
  }

  function takeout($item) {
    if ($this->open) {
      if (!($itemKey = array_search($item, $this->items))) {
        echo("There is no $item in the $this->size $this->color backpack, so nothing was taken out");
      } else {
        unset($this->items[$itemKey]);
        $this->items = array_keys($this->items);
        echo("The $item has been taken out of the $this->size $this->color backpack");
      }
    } else {
      echo("The $this->size $this->color backpack is closed, so nothing was taken out");
    }
  }
}

$smallBlueBackpack = new Backpack('blue', 'small');
var_dump($smallBlueBackpack);
echo('<br>');

$smallBlueBackpack->openBag();
echo('<br>');

// $smallBlueBackpack->closeBag();
// echo('<br>');

$smallBlueBackpack->putin('lunch');
echo('<br>');

$smallBlueBackpack->takeout('lunch');
echo("<br>");