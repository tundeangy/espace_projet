<?php

namespace UserBundle\Controller;

use UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

/**
 * User controller.
 *
 * @Route("utilisateur")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="utilisateur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('UserBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="utilisateur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
       /* $user = new User();
        $form = $this->createForm('UserBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('utilisateur_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));*/


        $auth = $this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY');
        if (!$auth) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        
        $username = $request->get('username');
        $email = $request->get('email');
        $telephone = $request->get('telephone');
        $role = $request->get('role');
        $pass = $request->get('pass');
        $confpass = $request->get('confpass');
        $em = $this->getDoctrine()->getManager();
        $session = new Session();
        if ($pass != $confpass) {
            $message = "<b>Le mot de pase n'est pas identique!</b>";
            $session->getFlashBag()->add('error', $message);
            return $this->redirectToRoute('create_admin');
        }
        $userManager = $this->get('fos_user.user_manager');

        // check if email doesn't exist
        $check = $userManager->findUserByEmail($email);
        if (empty($check)) {
            // save into admins table
            $admins = new User();
            /*$admins->setNom($nom);
            $admins->setPrenom($prenom);
            $admins->setTelephone($telephone);
            $admins->setCreated(new \DateTime());
            $em->persist($admins);*/
            // dump($particulier);die();
           // $em->flush();
            //$newAdmin = $em->getRepository('WestecUserBundle:Admins')->find($admins->getId());
            // save to fosusertable
            $user = $userManager->createUser();
            $user->setUsername($username);
            $user->setUsernameCanonical($username);
            $user->setEmail($email);
            $user->setEmailCanonical($email);
            $user->setEnabled(true);
            $user->addRole($role);   
            // this method will encrypt the password with the default settings :)
            $user->setPlainPassword($pass);
            $userManager->updateUser($user);
            $message = "<b>Bien enregistre l'administrateur est cree</b> ";
            //$session->getFlashBag()->add('success', $message);
        } else {
            $message = "<b>Cette personne exist deja!</b>";
            $session->getFlashBag()->add('error', $message);
            return $this->redirectToRoute('create_admin');
        }
        return new Response('ok');
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="utilisateur_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="utilisateur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('UserBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('utilisateur_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="utilisateur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('utilisateur_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('utilisateur_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
