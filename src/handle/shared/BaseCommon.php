<?php

function get_path($type, $model)
{
    $url = array(
    "images"=> array(
      "closed_questions"=> "images/closed_questions",
      "messages"=> "images/messages",
      "choices"=> "images/choices",
      "photo_tag"=> "images/photo_tags",
      "find"=> "projects/images/",
      "consensus" => "jobs/ai/consensuses/"),
    "videos" => array(
      "closed_questions" => "videos/closed_questions") ,
    "texts"=> array(
        "categories" => "v1/text/text_categories",
        "closed_questions"=> "v1/text/text_closed_questions",
        "conversations"=> "v1/text/text_conversations"),
    "ai" => array(
        "predictors" => "prime/predictions",
        "find" => "projects/images/"
      )
    );

    return $url[$type][$model];
}

function base_url($model)
{
  $url = array(
    "images" => "http://localhost:3001/api/v1/",
    "videos" => "https://kiyo-image.datawow.io/",
    "texts"  => "https://kiyo-text.datawow.io/",
    "ai"     => "https://kiyo-image.datawow.io/"
  );

    return $url[$model];
}
