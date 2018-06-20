<?
    //ищем классы в папке ./classes
	spl_autoload_register
	(
		function ($class) 
		{
			$class = explode('\\', $class);
			$class = end($class);
			if (is_file('./classes/' . $class . '.php'))
			{
				require_once './classes/' . $class . '.php';
			}			
		}
	);

	
	$article = new Blog\Article;
	$author = new Blog\Author;
	
	//создаём новую статью и получаем её ID
	$newArticleId = $article->create(1, ['text' => 'text']);

	//получаем ID автора созданной статьи
	$authorId = $article->getAuthor($newArticleId);

	//получаем все статьи автора
	$authorArticlesList = $author->getAllArticles(1);

	//меняем автора новой статьи
    $article->editAuthor($newArticleId, 2);