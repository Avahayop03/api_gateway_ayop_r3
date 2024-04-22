<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;

class User1Service{
    
    use ConsumesExternalService;
    /**
    * The base uri to consume the User1 Service
    * @var string
    */
    public $baseUri;
    
    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
    }
    //OBTAIN USERS
    public function obtainUsers1()
    {
    return $this->performRequest('GET','/users');
    }
    //OBTAIN USER 1
    public function obtainUser1($id)
    {
    return $this->performRequest('GET', "/users/{$id}");
    }
    //CREATE USER
    public function createUser1($data)
    {
    return $this->performRequest('POST', '/users',$data);
    }

    //EDIT USER 1
    public function editUser1($data, $id)
    {
    return $this->performRequest('PUT',"/users/{$id}", $data);
    }

    //DELETE USER 1
    public function delete($id)
    {
    return $this->performRequest('DELETE', "/users/{$id}");
    }
    
}
