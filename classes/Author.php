<?

    namespace Blog;


    /**
     * Class Author
     * @package Blog
     */
	class Author
    {

        /**
         * @var
         */
        protected $pdo;

        function __construct()
        {
            $this->pdo = DBTools::getConnection();
        }


        /**
         * @param int $authorId - ID автора статей
         * @return mixed - PDO stmt или NULL (в случае отсутствия статей)
         * Получение списка
         */
        public function getAllArticles(int $authorId)
        {
            /* получение статей по ID */

            if ($stmt->rowCount())
            {
                return $stmt;
            }
            else
            {
                return null;
            }

        }

    }


