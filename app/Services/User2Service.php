<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;

class User2Service{
    
    use ConsumesExternalService;
    /**
    * The base uri to consume the User1 Service
    * @var string
    */
    public $baseUri;
    
    //CONSTRUCT
    public function __construct()
    {
    $this->baseUri = config('services.users2.base_uri');
    }
    //OBTAIN USERS
    public function obtainUsers2()
    {
    return $this->performRequest('GET','/users');
    }
    //OBTAIN USER 1
    public function obtainUser2($id)
    {
    return $this->performRequest('GET', "/users/{$id}");
    }
    //CREATE USER
    public function createUser2($data)
    {
    return $this->performRequest('POST', '/users',$data);
    }

    //EDIT USER 1
    public function editUser2($data, $id)
    {
    return $this->performRequest('PUT',"/users/{$id}", $data);
    }

    //DELETE USER 1
    public function delete($id)
    {
    return $this->performRequest('DELETE', "/users/{$id}");
    }
    
}


    
   
   