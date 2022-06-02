<?php
namespace App\Repositories\Contacts;
use App\Models\contact;
use App\Repositories\ResourceRepository;
/**
 * 
 */
class ContactRepository extends ResourceRepository
{
    
    public function __construct(Contact $contacts) 
    {
        $this->model=$contacts;
    }
}