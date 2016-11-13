<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $person = new \Proto\Person();
        $person->setId(123);
        $person->setName("Some Name");
        $person->setEmail("foo@bar.com");
        $friend = new \Proto\Friend();
        $friend->setName("tim");
        $person->setFriend($friend);

        return new Response($person->encode(), 200, ['content-type' => 'application/protobuf']);
    }
}
