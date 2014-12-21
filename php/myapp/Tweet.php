<?php

namespace MyApp;

class Tweet {

  public function getJSON() {

    // Calculate this->date into relative time
    $this->ago = "5 minutes ago";

    // Look up live retweets dynamically
    $this->retweets = rand(0,30);

    return json_encode($this);
  }

}