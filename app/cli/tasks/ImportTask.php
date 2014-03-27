<?php

class importTask extends \Phalcon\CLI\Task
{
    public function articles($source)
    {
        $rss = Feed::loadRss($source->getFeedUrl());

        foreach ($rss->item as $item) {

            try {

                $article = new \Article();

                $article->setSourceId($source->getId());
                $article->setTitle("$item->title");
                $article->setDescription("$item->description");
                $article->setLink("$item->link");
                $article->setStatus(1);

                if($article->save() === false) {
                    echo "    a-e";
                    return false;
                }

            } catch(\Exception $e) {
// LOG
            }

            echo "a-i";
            echo "\n";
        }
    }

    public function sourcesAction() {

        $source = \Source::find(array(
            "status = :status:",
            "bind"     => array('status' => 1),
        ));

        if(!$source) {
            echo "    s-e";
            return false;
        }

        try {

            foreach($source as $singleSource) {
                $this->articles($singleSource);
                echo "  s-i";
                echo "\n";
            }

        } catch(\Exception $e) {
// LOG
        }
    }
}