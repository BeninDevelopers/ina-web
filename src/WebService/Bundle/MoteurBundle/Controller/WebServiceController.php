<?php

namespace WebService\Bundle\MoteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use WebService\Bundle\MoteurBundle\Entity\MobileUser;


/*
 *
 *
 */

class WebServiceController extends Controller
{


    /*
     *
     */
    public function registerAction()
    {

        try{

            $request = $this->getRequest();
            $email = $request->get("email");
            $phoneid = $request->get("phoneid");
            $gcmId = $request->get("gcmId");

            $mobileUser = new MobileUser();
            $mobileUser->setDateEnregistrement(new \DateTime());
            $mobileUser->setEmail($email);
            $mobileUser->setPhoneid($phoneid);
            $mobileUser->setGcmid($gcmId);

            $jsonResponse = new JsonResponse();
            $this->getDoctrine()->getManager()->persist($mobileUser);
            $this->getDoctrine()->getManager()->persist();

            $response = array("content" => "OK");

        }
        catch (Exception $ex)
        {
            $jsonResponse->setStatusCode("100");
            $response = array("content" => "Error");
        }
        $jsonResponse->setContent($response);

        return  $jsonResponse;

    }




}
