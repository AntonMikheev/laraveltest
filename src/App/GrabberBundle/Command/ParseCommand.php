<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 09.07.14
 * Time: 11:58
 */

namespace App\GrabberBundle\Command;

use App\GrabberBundle\Entity\Contents;
use App\GrabberBundle\Libs\Nokogiri;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ParseCommand extends ContainerAwareCommand
{


    protected function configure()
    {
        $this
            ->setName('grabber:parse')
            ->setDescription('Greet someone')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

//        $url = 'http://www.examiner.com/article/new-year-s-day-tips-for-maintaining-your-pet-s-sanity';
        $url = 'http://www.examiner.com/html_sitemap/content/2009/01/02';
//        $url = 'http://www.examiner.com/article/organic-wine-match-of-the-day-casa-barranca-merlot-cabernet-sauvignon';
        $this->parse($url);
    }


    private function parse($url)
    {
        if (!$this->isVisited($url)) {
            $this->addVisit($url);
        } else {
            return;
        }
        $article = $this->getArticle($url);

        if ($article) {
            $a = $this->saveArticle($article);
            var_dump($a);
            die;
        } else {
            $links = $this->getLinks($url);
            if ($links !== false) {
                foreach ($links as $link) {
                    $link = $this->normalizeLink($link);
                    var_dump($link);
                    if ($link) {
                        $this->parse($link);
                    }
                }
            }
        }
    }

    private function getArticle($url)
    {
//        var_dump($url);
        $html = file_get_contents($url);
//        var_dump($html);
        if($html){
//        var_dump($html);
        $document = new Nokogiri($html);
//        var_dump($document);
        $article = $document->get('.article')->toArray();


        if (!empty($article)) {
            $article = [
                'title' => $document->get('.article-header h1')->toArray(),
                'subtopic'=>'',
                'text' => $document->get('.article__body p')->toXml(),
                'pic' => '',

            ];
            return $article;
        } else {
            return false;
        }
        }
        else{
            return false;
        }
    }

    private function saveArticle($article)
    {
        $title = $article['title']['0']['#text'];
        $text = strip_tags($article['text']);
//        return $a;
//        foreach($article['text'] as $onep){
//            $text = $text . $onep['#text'];
//        }

//        return $text;
//        $text = 'test';

        $content = new Contents();
        $content->setText($text);
        $content->setTitle($title);
        $content->setThumbnail('1');


        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $em->persist($content);
        $em->flush();
    }

    private function addVisit($url)
    {

    }

    private function getLinks($url)
    {
        try {
//            var_dump('123');
            $html = file_get_contents($url);
//            var_dump('456');
            $document = new Nokogiri($html);
            $links = $document->get('.content-wrapper .item-list a')->toArray();
//            var_dump($links);
            foreach ($links as $link) {
                $links_array[] = $link['href'];
            }
            return $links_array;
        } catch (Exception $e) {
            return false;
        }


    }

    private function isVisited()
    {

    }

    private function normalizeLink($link)
    {
        $pattern = '/http:\/\/www.examiner.com\//';
       $checklink =  preg_match($pattern, $link);
        if($checklink){
        return $link;
        }
        else {
            $link = "http://www.examiner.com" . $link;
            return $link;
        }
    }

    private function setLinks($links)
    {
//        foreach ($links as $link) {
//            $links_array[] = $link['href'];
//        }
    }

}