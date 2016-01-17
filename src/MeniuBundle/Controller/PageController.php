<?php
// src/MeniuBundle/Controller/PageController.php

namespace MeniuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Import new namespaces
use MeniuBundle\Entity\Enquiry;
use MeniuBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('MeniuBundle:Page:index.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('MeniuBundle:Page:about.html.twig');
    }

    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                // Perform some action, such as sending an email
                $message = \Swift_Message::newInstance()
                ->setSubject('Test synfony2')
                ->setFrom('oleg021358@gmail.com')
                ->setTo($this->container->getParameter('meniu.emails.contact_email'))
                ->setBody($this->renderView('MeniuBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('meniu-notice', 'Your contact enquiry was successfully sent. Thank you!');
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('MeniuBundle_contact'));
            }
        }
        return $this->render('MeniuBundle:Page:contact.html.twig', array(
            'form' => $form->createView()));

    }
}
