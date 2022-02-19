<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

        /**
     * @Route("/404", name="404")
     */
    public function quatre()
    {
        return $this->render('404.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
        /**
     * @Route("/500", name="500")
     */
    public function cinq()
    {
        return $this->render('500.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
     /**
     * @Route("/add-depenses", name="adddepenses")
     */
    public function add_depenses()
    {
        return $this->render('add-depenses.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/add-division", name="adddivision")
     */
    public function add_division()
    {
        return $this->render('add-division.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/add-employee", name="addemployee")
     */
    public function add_employee()
    {
        return $this->render('add-employee.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/add-projet", name="addprojet")
     */
    public function add_projet()
    {
        return $this->render('add-projet.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/add-service", name="addservice")
     */
    public function add_service()
    {
        return $this->render('add-service.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/all-employees", name="allemployees")
     */
    public function all_employees()
    {
        return $this->render('all-employees.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/all-projets", name="allprojets")
     */
    public function all_projets()
    {
        return $this->render('all-projets.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/all-services", name="allservices")
     */
    public function all_services()
    {
        return $this->render('all-services.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/depenses", name="depenses")
     */
    public function depenses()
    {
        return $this->render('depenses.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/divisions", name="divisions")
     */
    public function divisions()
    {
        return $this->render('divisions.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/edit-depenses", name="editdepenses")
     */
    public function edit_depenses()
    {
        return $this->render('edit-depenses.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/edit-division", name="editdivision")
     */
    public function edit_division()
    {
        return $this->render('edit-division.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/edit-employee", name="editemployee")
     */
    public function edit_employee()
    {
        return $this->render('edit-employee.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/edit-projet", name="editprojet")
     */
    public function edit_projet()
    {
        return $this->render('edit-projet.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/edit-service", name="editservice")
     */
    public function edit_service()
    {
        return $this->render('edit-service.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/lock", name="lock")
     */
    public function lock()
    {
        return $this->render('lock.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('login.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/mailbox", name="mailbox")
     */
    public function mailbox()
    {
        return $this->render('mailbox.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/mailbox-compose", name="mailboxcompose")
     */
    public function mailbox_compose()
    {
        return $this->render('mailbox-compose.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/mailbox-view", name="mailboxview")
     */
    public function mailbox_view()
    {
        return $this->render('mailbox-view.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/password-recovery", name="passwordrecovery")
     */
    public function password_recovery()
    {
        return $this->render('password-recovery.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/register", name="register")
     */
    public function register()
    {
        return $this->render('register.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
     /**
     * @Route("/service-payment", name="servicepayment")
     */
    public function service_payment()
    {
        return $this->render('service-payment.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
