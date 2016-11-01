<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller;
{
	/**
	 * @Route("/")
	 */
	public function indexAction()
	{
		return new Response(
			'<html><body>Hello world!</html></body>'
		);
	}
}
