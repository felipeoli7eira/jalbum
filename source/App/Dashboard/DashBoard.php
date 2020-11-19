<?php

    namespace Source\App\Dashboard;

    use Source\Models\Auth;

    class DashBoard
    {
        /** @var Auth */
        protected $auth;

        public function __construct()
        {
            if (!Auth::user())
            {
                redirect("/login");
            }

            $this->user = Auth::user();
        }

        public function index(): void
        {
            echo "<h1>Dashboard</h1>";
        }
    }