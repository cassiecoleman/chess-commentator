<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController
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
