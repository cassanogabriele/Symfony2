<?php
/*
Le modèle d'article 
*******************
Il sera implémenté en utilisant l'ORM Doctrine 2 qui permet de faire persister les objets PHP, il propose également une dialecte SQL, "DQL". On va également utiliser le concept de 
données factices (data fixtures), mécanisme permettant de peupler la base de données de l'environnement de développement et de test avec des données de test adéquates. Pour que le 
blog fonctionne, il faut donc un moyen de persister les données, Doctrine 2 est conçu au dessus d'une couche d'abstraction de base de données très puissante qui la rend indépendante 
de la base de donnée utilisée, cela permet d'utiliser différents moteurs de stockage (MySQL, PostgreSQL, SQLite). 

L'entité d'article 
******************
On commence par créer une classe Blog, c'est le nom choisit par l'auteur original de l'article pour la classe qui sert à modéliser un artice. Comme le but de l'entité est de stocker 
des données, il est logique d'en utiliser une pour représenter le contenu d'un article. En créant une entité, on va automatiquement lier ces données avec la base de données. C'est une 
simple calsse en PHP, elle n'a ni classe parent, ni accesseurs. Les membres sont tous déclarés en "protected", il est donc impossible d'accéder à eux lorsque l'on traite avec une instance 
de cette classe, on pourrait écrire les accesseurs mais Doctrine 2 propose une commande capable de s'en charger, pour lancer cette commande, il faut expliquer à Doctrine 2 comment l'entité 
Blog doit être associée à la base de données, cela se fait via des métadonnées qui peut être définies dans plusieurs formats : YAML, PHP, XML et Annotations. Tous les membres de l'entité 
n'ont pas besoin d'être persistés, ce qui donne la flexibilité de choisir les informations à envoyer à la base de données.
*/
namespace Blogger\BlogBundle\Entity;

// On importe et on crée un alias pour l'espace de nom de Doctrine 2, cela permet d'utiliser les annotations pour décrire les métadonnées des entités, qui fournissent des informations 
// sur la manière dont les membres sont représentés dans la base de données.
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

// On utilise ici les annotations pour expliquer à Doctrine 2 comment l'entité Blog doit être associée à la base de données.

/**
 * @ORM\Entity(repositoryClass="Blogger\BlogBundle\Repository\BlogRepository")
 * @ORM\Table(name="blog")
 * @ORM\HasLifecycleCallbacks()
 */
class Blog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @ORM\Column(type="string")
     */
    protected $slug;
	
	
	// L'attribut $comments n'a pas de métadonnées associées, on ne souhaite pas le faire persister dans la base de données, il fournit seulement une liste de commentaires 
	// relatifs à un article.
	
	/**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="blog")
     */
    protected $comments;


    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $author;

    /**
     * @ORM\Column(type="text")
     */
    protected $blog;

	/**
     * @ORM\Column(type="string", length=100)
     */
    protected $image;

    /**
     * @ORM\Column(type="text")
     */
    protected $tags;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;
	
	/*
	Création d'un objet blog 
	************************
	
	$blog = new Blog();
	$blog->setTitle("symblog - A Symfony2 Tutorial");
	$blog->setAuthor("dsyph3r");
	$blog->setBlog("symblog is a fully featured blogging website ...");*/

	// Create a comment and add it to our blog
	/*$comment = new Comment();
	$comment->setComment("Symfony2 rocks!");
	$blog->addComment($comment);
	
	public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }
	
	public function getComments()
    {
        return $this->comments;
    }*/
	
	
	// Les accesseurs sont générés avec la commande : php app/console doctrine:generate:entities Blogger.
	
	// On crée la base de données avec la commande : php app/console doctrine:database:create
	
	// Création de la table d'article avec la commande :  php app/console doctrine:schema:create

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Blog
     */
	public function setTitle($title)
	{
		$this->title = $title;

		$this->setSlug($this->title);
	}

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Blog
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set blog
     *
     * @param string $blog
     * @return Blog
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;
    
        return $this;
    }

    /**
     * Get blog
     *
     * @return string 
     */
    public function getBlog($length = null)
	{
		if(false === is_null($length) && $length > 0)
			return substr($this->blog, 0, $length);
		else
			return $this->blog;
	}

    /**
     * Set image
     *
     * @param string $image
     * @return Blog
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Blog
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Blog
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Blog
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
	
	public function __construct()
    {
        $this->comments = new ArrayCollection();
		
		$this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }

	/*
	La méthode AddComment se contente d'ajouter un objet Comment à la variable membre $comments de l'article : on récupère simplement les commentaires. Le membre $comments 
	est simplement une liste do'bjet Comment, Doctrine 2 ne change pas cette manière de fonctionner mais va être capable de remplir automatiquement ce champ à partir de 
	l'objet blog.
	*/
	
	/**
     * Add comments
     *
     * @param \Blogger\BlogBundle\Entity\Comment $comments
     * @return Blog
     */
    public function addComment(\Blogger\BlogBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Blogger\BlogBundle\Entity\Comment $comments
     */
    public function removeComment(\Blogger\BlogBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
	
	public function __toString()
	{
		return $this->getTitle();
	}

    /**
     * Set slug
     *
     * @param string $slug
     * @return Blog
     */
    public function setSlug($slug)
	{
		$this->slug = $this->slugify($slug);
	}

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
	
	public function slugify($text)
{
    // replace non letter or digits by -
    $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

    // trim
    $text = trim($text, '-');

    // transliterate
    if (function_exists('iconv'))
    {
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    }

    // lowercase
    $text = strtolower($text);

    // remove unwanted characters
    $text = preg_replace('#[^-\w]+#', '', $text);

    if (empty($text))
    {
        return 'n-a';
    }

    return $text;
}
}