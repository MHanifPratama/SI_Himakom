<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
 
class PimpinanAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        
        if(!session()->get('login_pimpinan')){
            return redirect()->to('loginPimpinan'); 
        }
    }
 
    //--------------------------------------------------------------------
 
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
?>