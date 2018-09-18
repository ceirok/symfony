<?php 

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController {

	/**
	* @Route("/", name="app_homepage")
	*/
	public function homepage() {
		return $this->render('article/homepage.html.twig');
	}


	/**
	* @Route("/news/{slug}", name="article_show")
	*/
	public function show($slug) {
		$comments = [
			'First line',
			'Second line',
			'Thrid line',
		];

		return $this->render('article/show.html.twig', [
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments,
		]);
	}
}