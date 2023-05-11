<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Pages extends BaseController
{
    // ...

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    public function login($login = 'login')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $login . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($login);
        }

        $data['title'] = ucfirst($login); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $login)
            . view('templates/footer');
    }
    public function nosotros($nosotros = 'nosotros')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $nosotros . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($nosotros);
        }

        $data['title'] = ucfirst($nosotros); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $nosotros)
            . view('templates/footer');
    }
}