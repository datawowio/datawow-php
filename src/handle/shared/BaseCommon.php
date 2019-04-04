<?php

function get_path($type, $model)
{
    $url = array(
    "images"=> array(
      "closed_questions" => "images/closed_questions",
      "messages"         => "images/messages",
      "choices"          => "images/choices",
      "photo_tag"        => "images/photo_tags",
      "find"             => "projects/images/",
      "consensus"        => "jobs/ai/consensuses/"),
    "videos" => array(
      "closed_questions" => "videos/closed_questions") ,
    "texts"=> array(
        "categories"       => "text/text_categories",
        "closed_questions" => "text/text_closed_questions",
        "conversations"    => "text/text_conversations"),
    "ai" => array(
        "predictors" => "prime/predictions",
        "find"       => "projects/images/"
      ),
    "docs" => array(
        "verification" => "images/document_verifications/"
      )
    );

    return $url[$type][$model];
}

function base_url($model)
{
  $url = array(
    "images" => "https://image.datawow.io/api/v1/",
    "videos" => "https://image.datawow.io/api/v1/",
    "texts"  => "https://text.datawow.io/api/v1/",
    "ai"     => "https://image.datawow.io/api/v1/",
    "docs"   => "https://image.datawow.io/api/v1/"
  );

    return $url[$model];
}
