<?

    namespace Blog;

    /**
     * Class Article
     * @package Blog
     */
    class Article
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
         * @param int $authorId - ID автора статьи
         * @param array $params - параметры статьи
         * @return int|null - возвращает ID созданной статьи при успешном создании
         * Добавление новой статьи для указанного автора.
         */
        public function create(int $authorId, array $params) : ?int
        {

            /* добавление статьи в таблицу `articles` */

            return $this->pdo->lastInsertId();

        }


        /**
         * @param int $articleId - ID изменяемой статьи
         * @param int $authorId - ID нового автора статьи
         * @return bool
         * Смена автора статьи
         */
        public function editAuthor(int $articleId, int $authorId) : bool
        {

            /* смена автора authorId в таблице `articles` */

            return true;

        }

        /**
         * @param int $articleId
         * @return int|null - ID или NULL (в случае отсутствия автора)
         */
        public function getAuthor(int $articleId) : ?int
        {

            /* получаем authorId из таблицы `articles` */

            if ($stmt->rowCount())
            {
                return $stmt->fetch()->authorId;
            }
            else
            {
                return null;
            }

        }







    }