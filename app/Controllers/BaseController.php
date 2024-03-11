<?php

namespace App\Controllers;

use App\Models\Front\M_login;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $session;
    protected $db;
    protected $encrypt;
    protected $email;
    protected $image;
    protected $uri;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form', 'file', 'url', 'html', 'download', 'm_helper'];
    protected $m_login;
    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $this->session = \Config\Services::session();
        //preload library
        $config = new \Config\Encryption();
        $config->key = 'M1pT3zx500uYVodaysN68IiNYhV0KdCb';
        $config->driver = 'OpenSSL';
        $this->session =  \Config\Services::session();
        $this->db = \Config\Database::connect();
        $this->encrypt = \Config\Services::encrypter($config);
        $this->email = \Config\Services::email();
        $this->image = \Config\Services::image();
        $this->uri = service('uri');

        //custome
        $this->m_login       = new M_login();
    }
}
