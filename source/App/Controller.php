<?php

    namespace Source\App;

    use League\Plates\Engine;

    class Controller
    {
        /** @var Engine */
        protected $view;

        /** @var string $vType */
        protected $vType;

        /**
         * @param string $vType
        */
        protected function __construct(string $vType)
        {
            $this->view = Engine::create(CONF_VIEWS_DIR, CONF_VIEWS_EXT);
            $this->vType = $vType;
        }

        /**
         * @param string $vName
         * @param array $vData
         * @return string
        */
        public function view(string $vName, array $vData = []): string
        {
            return $this->view->render("{$this->vType}/{$vName}", $vData);
        }
    }