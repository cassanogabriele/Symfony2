<?php
namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Import new namespaces
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

         $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                    ->getLatestBlogs();

        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
	
	public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
	
	public function contactAction()
	{
		$enquiry = new Enquiry();
		$form = $this->createForm(new EnquiryType(), $enquiry);

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);

			if ($form->isValid()) {
				// Perform some action, such as sending an email

				// Redirect - This is important to prevent users re-posting
				// the form if they refresh the page
				return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
			}
		}

		return $this->render('BloggerBlogBundle:Page:contact.html.twig', array(
			'form' => $form->createView()
		));
	}
	
	public function sidebarAction()
	{
		$em = $this->getDoctrine()
				   ->getEntityManager();

		$tags = $em->getRepository('BloggerBlogBundle:Blog')
				   ->getTags();

		$tagWeights = $em->getRepository('BloggerBlogBundle:Blog')
						 ->getTagWeights($tags);
		$commentLimit   = $this->container
                           ->getParameter('blogger_blog.comments.latest_comment_limit');
		$latestComments = $em->getRepository('BloggerBlogBundle:Comment')
                         ->getLatestComments($commentLimit);

		return $this->render('BloggerBlogBundle:Page:sidebar.html.twig', array(
			'latestComments'    => $latestComments,
			'tags' => $tagWeights
		));
	}
}