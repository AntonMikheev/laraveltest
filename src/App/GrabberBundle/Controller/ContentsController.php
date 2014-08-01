<?php

namespace App\GrabberBundle\Controller;

use App\GrabberBundle\Entity\Contents;
use App\GrabberBundle\Entity\Subtopics;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Console\Input\InputArgument;
use App\GrabberBundle\Libs\Nokogiri;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ContentsController
 * @package App\BlogBundle\Controller
 *
 * @Route("/contents", name="contents_controller")
 *
 */
class ContentsController extends Controller
{

//    /**
//     * @Route("/getarticles/{topic}", name="articles_on_main_page")
//     * @Method("GET")
//     * @Template()
//     */
//    public function allArticlesOnMainPageAction($topic)
//    {
//        $url = 'http://www.examiner.com/' . $topic;
//
//        $links = $this->getLinks($url);
//        $response_articles = [];
//        foreach ($links as $link) {
//            $link = $this->normalizeLink($link);
//            $article = $this->getArticle($link);
//            if($article){
//            $response_articles[] = $article;
//            }
//        }
//        $response = new Response(json_encode($response_articles));
//        $response->headers->set('Content-Type', 'application/json');
//
//        return $response;
//    }

    /**
     * @Route("/getarticles", name="all_articles_on_page")
     * @Method("GET")
     * @Template()
     */
    public function allArticlesOnPageAction(Request $request)
    {
        $topic = $request->query->get('topic');

        $pattern = '/^[A-z0-9\/\-_!,.:+=?)(]*$/';
        $checklink = preg_match($pattern, $topic);
        if ($checklink) {

            if ($topic !== 'home') {
                $url = 'http://www.examiner.com/' . $topic;

            } else {
                $url = 'http://www.examiner.com/';
            }
            $links = $this->getLinks($url);
            if ($links) {
                $response_articles = [];
                foreach ($links as $link) {
                    $link = $this->normalizeLink($link);
                    $article = $this->getArticle($link);
                    if ($article) {
                        $response_articles[] = $article;
                    }
                }
            }
            $response = new Response(json_encode($response_articles));
            $response->headers->set('Content-Type', 'application/json');

        } else {
            $response = new Response(json_encode('Wrong parameter'));
            $response->headers->set('Content-Type', 'application/json');
        }
        return $response;

    }

    public function getSubtopicsAction($topic)
    {
        $url = 'http://www.examiner.com/';
        $html = $this->getData($url);
        $document = new Nokogiri($html);
        $subtopics = $document->get('.navigation-wrapper' . ' ' . '.' . $topic . ' ' . '.navigation-submenu . li a')->toArray();
        $sub_response = [];
        $id = 1;
        foreach ($subtopics as $subtopic) {

            $sub_response[] = [
                'id' => $id,
                'name' => $subtopic['#text'],
                'url' => preg_replace('/http:\/\/www.examiner.com\//', '', $subtopic['href']),
            ];
            $id++;
        }
        return $sub_response;
    }

    /**
     * @Route("/getsubtopics", name="get_subtopics")
     * @Method("GET")
     * @Template()
     */
    public function getSubtopicsOnTopicAction(Request $request)
    {
        $topic = $request->query->get('topic');
        $sub_response = $this->getSubtopicsAction($topic);

        $response = new Response(json_encode($sub_response));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/getallsubtopics", name="get_all_subtopics")
     * @Method("GET")
     * @Template()
     */
    public function getAllSubtopicsAction()
    {
        $topics = [
            'arts--entertainment',
            'axs-entertainment',
            'news',
            'topic/life',
            'topic/leisure',
            'sports',
            'tech',
        ];
        foreach ($topics as $topic) {
            $sub_response[] = [
                $topic => $this->getSubtopicsAction($topic)
            ];
        }
        $response = new Response(json_encode($sub_response));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    private function getLinks($url)
    {
        $links_array = [];
        $html = $this->getData($url);
        $document = new Nokogiri($html);
        //top links

        $links = $document->get('.carousel__item .media__img')->toArray();

        foreach ($links as $link) {
            $img = '';
            if ($link['img']) {
                $img = $link['img']['src'];
            }
            $links_array[] = [
                'link' => $link['href'],
                'img' => $img
            ];
        }

        $links = $document->get('.curated-topic .media__img')->toArray();
        foreach ($links as $link) {
            $img = '';
            if ($link['img']) {
                $img = $link['img']['src'];
            }
            $links_array[] = [
                'link' => $link['href'],
                'img' => $img
            ];
        }

        $links = $document->get('.topic-featured .box li .media__img')->toArray();
        foreach ($links as $link) {
            $img = '';
            if ($link['img']) {
                $img = $link['img']['src'];
            }
            $links_array[] = [
                'link' => $link['href'],
                'img' => $img
            ];
        }

        $links = $document->get('.block__content .media__img a')->toArray();
        foreach ($links as $link) {
            $img = '';
            if ($link['img']) {
                $img = $link['img']['src'];
            }
            $links_array[] = [
                'link' => $link['href'],
                'img' => $img
            ];
        }

        $links = $document->get('.region .related-content-list .media__title')->toArray();
        foreach ($links as $link) {
            $img = '';
            if (isset($link['img'])) {
                $img = $link['img']['src'];
            }
            $links_array[] = [
                'link' => $link['href'],
                'img' => $img
            ];
        }

        //Featured stories


        return $links_array;
    }

    private function normalizeLink($link)
    {
        $pattern = '/http:\/\/www.examiner.com\//';
        $checklink = preg_match($pattern, $link['link']);
        if ($checklink) {
            return $link;
        } else {
            $link['link'] = "http://www.examiner.com" . $link['link'];
            return $link;
        }
    }

    private function getArticle($url)
    {
        $pattern = '/http:\/\/www.examiner.com\//';
        $checklink = preg_match($pattern, $url['link']);
        if ($checklink) {
            $contents = $this->getDoctrine()
                ->getRepository('App\GrabberBundle\Entity\Contents')
                ->find($url['link']);
            if ($contents) {

                $article = [
                    'id' => $contents->getId(),
                    'subtopic' => $contents->getSubtopic(),
                    'thumbimg' => $contents->getThumbimg(),
                    'title' => $contents->getTitle(),
                    'date' => $contents->getDate(),
                    'post' => $contents->getPost(),
                    'video' => $contents->getVideo(),
                    'postimg' => $contents->getImgUrl(),
                    'author_name' => $contents->getAuthorName(),
                    'author_avatar_url' => $contents->getAuthorAvatarUrl(),
                    'author_category' => $contents->getAuthorCategory(),
                ];

            } else {
                $html = $this->getData($url['link']);
                if ($html) {
                    $document = new Nokogiri($html);
                    $article = $document->get('.article')->toArray();
                    $img_avatar = $document->get('.author img')->toArray();
                    $img_article = $document->get('aside .media .sticker-container img')->toArray();
                    if (is_array($img_article) && isset($img_article['0'])) {
                        $img_article_resp = $img_article['0']['src'];
                    } else {
                        $img_article_resp = $url['img'];
                    }

                    $video = strip_tags($document->get('.video-player .date')->toXml());
                    if($video) {
                        
                    }
                    if (!empty($article)) {
                        $article = [
                            'id' => $url['link'],
                            'subtopic' => strip_tags($document->get('.article .breadcrumb .last a')->toXml()),
                            'thumbimg' => $url['img'],
                            'title' => strip_tags($document->get('.article-header h1')->toXml()),
                            'date' => strip_tags($document->get('.article-dateline .date')->toXml()),
                            'post' => strip_tags($document->get('.article__body p')->toXml(), '<b><big><blockquote><br><cite><dfn><div><em><font><h1><h2><h3><h4><h5><h6><i><p><small><strike><strong><sub><sup><tt><u>'),
                            'video' => strip_tags($document->get('.video-player .date')->toXml()),
                            'postimg' => $img_article_resp,
                            'author_name' => strip_tags($document->get('.author .author-name')->toXml()),
                            'author_avatar_url' => $img_avatar['0']['src'],
                            'author_category' => strip_tags($document->get('.author .author-title')->toXml()),

                        ];

                        $contents = new Contents();
                        $contents->setId($article['id']);
                        $contents->setSubtopic($article['subtopic']);
                        $contents->setTitle($article['title']);
                        $contents->setDate($article['date']);
                        $contents->setPost($article['post']);
                        $contents->setImgUrl($article['postimg']);
                        $contents->setAuthorName($article['author_name']);
                        $contents->setAuthorAvatarUrl($article['author_avatar_url']);
                        $contents->setAuthorCategory($article['author_category']);
                        $contents->setThumbimg($article['thumbimg']);

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($contents);
                        $em->flush();
                    }
                } else {
                    return false;
                }
            }
            return $article;
        } else {
            return false;
        }
    }

    /* gets the data from a URL */
    function getData($url)
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}
