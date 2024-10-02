<?php
/*
Le lien entre le Modèle et la Vue, c'est le Contrôleur, c'est donc là qu'on va commencer à créer la page d'affichage, cette page ne se contente d'afficher que les entités blog, on 
va donc mettre un Contrôleur à part. On crée un nouveau Contrôleur pour l'entité Blog et on définit une action "show", comme on a spécifié un paramètre "id" pour la route BloggerBlogBundle_blog_show, 
il sera passé en argument  la méthode showAction. Si on a passé plusieurs paramètres dans la règle de routage, ils auraient également été fournis sous la forme d'arguments séparés.
*/
namespace Blogger\BlogBundle\Controller;
// Il faut récupérer les entités Blog dans la base de données, on va donc utiliser cette seconde méthode de la classe pour obtenir le gestionnaire d'entités de Doctrine 2.
// Son but est de récupérer les objets venant de la base de données et de les y faire persister.
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id, $slug)
    {
		// On utlise l'objet EntityManager() pour obtenir le Repository de Doctrine 2 pour l'entité BloggerBlogBundle:Blog.
		$em = $this->getDoctrine()->getEntityManager();
		// Avec le dépôt d'objets (le Repository), on appelle la méthode find() avec pour argument la variable "$id", cette méthode se charge de retrouver tous les objets à partir 
		// de leur clé primaire.
        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);
		
		// On vérifie qu'une entité a été trouvée et on fournit cette entité à la vue. Si aucune entité n'a été trouvée, une exception est lancée qui va se charger de générer 
		// une "erreur 404".
        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }
		
		$comments = $em->getRepository('BloggerBlogBundle:Comment')
                   ->getCommentsForBlog($blog->getId());

        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
         'blog'      => $blog,
         'comments'  => $comments
		));
    }
}