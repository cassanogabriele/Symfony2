<?php

namespace Sdz\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

class BlogController extends Controller
{
	public function menuAction($nombre) 
	// Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
	{
		// On fixe en dur une liste ici, bien entendu par la suite on la r�cup�rera depuis la BDD !
		// On pourra r�cup�rer $nombre articles depuis la BDD,
		// avec $nombre un param�tre qu'on peut changer lorsqu'on appelle cette action
		$liste = array(
		array('id' => 2, 'titre' => 'Mon dernier weekend !'),
		array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
		array('id' => 9, 'titre' => 'Petit test')
		);
		return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
		'liste_articles' => $liste
		// C'est ici tout l'int�r�t : le
		//contr�leur passe les variables n�cessaires au template !
		));
	}
		
	public function indexAction($page)
	{
		// On ne sait pas combien de pages il y a
		// Mais on sait qu'une page doit �tre sup�rieure ou �gale � 1
		if( $page < 1 )
		{
			// On d�clenche une exception NotFoundHttpException
		   // Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
			throw $this->createNotFoundException('Page inexistante (page =
			'.$page.')');
		}
		
		// Les articles :
		$articles = array(
		array(
		'titre' => 'Mon weekend a Phi Phi Island !',
		'id' => 1,
		'auteur' => 'winzou',
		'contenu' => 'Ce weekend �tait trop bien. Blabla�',
		'date' => new \Datetime()),
		array(
		'titre' => 'Repetition du National Day de Singapour',
		'id' => 2,
		'auteur' => 'winzou',
		'contenu' => 'Bient�t pr�t pour le jour J. Blabla�',
		'date' => new \Datetime()),
		array(
		'titre' => 'Chiffre d\'affaire en hausse',
		'id' => 3,
		'auteur' => 'M@teo21',
		'contenu' => '+500% sur 1 an, fabuleux. Blabla�',
		'date' => new \Datetime())
		);
		
		// Ici, on r�cup�rera la liste des articles, puis on la passera au template
		// Mais pour l'instant, on ne fait qu'appeler le template
		//return $this->render('SdzBlogBundle:Blog:index.html.twig', array('articles' => array()
		//));
		
		// Puis modifiez la ligne du render comme ceci, pour prendre en
		//compte nos articles :
		return $this->render('SdzBlogBundle:Blog:index.html.twig', array(
		'articles' => $articles
		));
		
	}
	
	public function voirAction($id)
	{
		// Ici, on r�cup�rera l'article correspondant � l'id $id
		$article = array(
		'id' => 1,
		'titre' => 'Mon weekend a Phi Phi Island !',
		'auteur' => 'winzou',
		'contenu' => 'Ce weekend �tait trop bien. Blabla�',
		'date' => new \Datetime()
	);
		// Puis modifiez la ligne du render comme ceci, pour prendre encompte l'article :
		return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
		'article' => $article
	));
	}
	
	public function ajouterAction()
	{
		// La gestion d'un formulaire est particuli�re, mais l'id�e est 	la suivante :
		if( $this->get('request')->getMethod() == 'POST' )
		{
			// Ici, on s'occupera de la cr�ation et de la gestion du formulaire
			$this->get('session')->getFlashBag()->add('notice', 'Article
			bien enregistr�');
			// Puis on redirige vers la page de visualisation de cet article
			return $this->redirect( $this->generateUrl('sdzblog_voir',
			array('id' => 5)) );
		}
		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
	}
	
	public function modifierAction($id)
	{
		// Ici, on r�cup�rera l'article correspondant � $id
		// Ici, on s'occupera de la cr�ation et de la gestion du formulaire 
		$article = array(
		'id' => 1,
		'titre' => 'Mon weekend a Phi Phi Island !',
		'auteur' => 'winzou',
		'contenu' => 'Ce weekend �tait trop bien. Blabla�',
		'date' => new \Datetime()
		);
		// Puis modifiez la ligne du render comme ceci, pour prendre en	compte l'article :
		return $this->render('SdzBlogBundle:Blog:modifier.html.twig',
		array(
		'article' => $article
		));
	}
	
	public function supprimerAction($id)
	{
		// Ici, on r�cup�rera l'article correspondant � $id
		// Ici, on g�rera la suppression de l'article en question
		return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
	}
}