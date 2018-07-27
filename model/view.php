<?php

class view 
{
	private $file; // nom du fichier associé a la vue 
	private $title;// titre de la vue

	public function __construct($action)
	{
		$this->file = "view/view_" . $action . ".php";
	}// Determination du nom du fichier vue a partir de l'action

	public function generate($data)
	{// Génération de la partie spécifique de la vue 
		$content = $this->generateFile($this->file, $data);
		$view = $this->generaFile('view/temp.php', array('title' => $this->title, 'content' => $content));
		echo $view;
	}

	// Génère un fichier vue et renvoie le resulat produit
	private function generateFile($file, $data)
	{
		if (file_exists($file))
		{// Rend les éléments du tableau $donnees accessibles dans la vue
			extract($data);
		// Démarrage de la temporisation de sortie
			ob_start();
		// Inclut le fichier vue
      	// Son résultat est placé dans le tampon de sortie
			require ('$file');
		// Arrêt de la temporisation et renvoi du tampon de sortie
			return ob_get_clean();
		}
		else 
		{
			throw new Exception("Fichier '$fichier' introuvable");
			
		}
	}
}