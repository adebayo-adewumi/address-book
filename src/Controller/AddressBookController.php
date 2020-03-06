<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ContactRepository;

class AddressBookController extends AbstractController
{
    /**
     * @Route("/address/book", name="address_book")
     */
    public function index()
    {
        return $this->render('address_book/index.html.twig', [
            'controller_name' => 'AddressBookController',
        ]);
    }

    public function create(Request $request, ContactRepository $contactRepository, EntityManagerInterface $em){
        $birthday = (string)$request->get('day').' '.$request->get('month').' '.(string)$request->get('year');

        $contact = new Contact;
        $contact->setFirstname($request->get('firstname'));
        $contact->setLastname($request->get('lastname'));
        $contact->setStreet($request->get('street'));
        $contact->setZip((int)$request->get('zip'));
        $contact->setCity($request->get('city'));
        $contact->setCountry($request->get('country'));
        $contact->setPhone((int)$request->get('phone'));
        $contact->setEmail($request->get('email'));
        $contact->setBirthday($birthday);
        $contact->setDay((int)$request->get('day'));
        $contact->setMonth($request->get('month'));
        $contact->setYear((int)$request->get('year'));
        $em->persist($contact);
        $em->flush();

        return $this->json(['contact' => $contact,'status'=>'success']);
    }
}
