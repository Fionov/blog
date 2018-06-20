<?
    namespace Blog;


    class DBTools
    {

        /**
         * @var $pdo
         */
        private static $pdo;


        /**
         * @param $name
         * @param $args
         * @return mixed
         */
        public static function __callStatic($name, $args)
        {

            if (!self::$pdo)
            {
                self::getInstance();
            }

            return call_user_func_array([self::$pdo, $name], $args);
        }


        /**
         * @return PDO
         * создание экземпляра PDO
         */
        public static function getInstance()
        {

            self::$pdo = new \PDO(/*params*/);
            return self::$pdo;

        }


        /**
         * @param $data
         * генерация строки формата `field` = :value для отправки в PDO
         */
        static function generateSet(array $data) : ?string
        {

            /**/

        }





    }