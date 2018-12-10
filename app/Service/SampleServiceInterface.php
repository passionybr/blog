<?php
namespace App\Service;
interface SampleServiceInterface
{
    public function getData();
}

class SampleService implements SampleServiceInterface
{
    public function getData()
    {
        echo "Working with Service Providers...!!!";
    }
}