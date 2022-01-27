<?php
namespace App\Models;

use Exception;
use Illuminate\Support\Facades\Storage;

/**
 * This model stores and handles all the data related to our pages
 * Like element names, table headers, form ids, etc..
 */
class Page
{
    private $keyValues = 
    [
        'colorBtnName' => 'Change Color',
        'dynBtnName' => 'Add button',
        'colorBtnNameBig' => 'Change button color'
    ];

    private $formData = 
    [
        'dashboard' => 
        [
            'id' => 'dashForm', 
            'formFields' => 
            [
                [
                    'label' => 'First Name',
                    'id' => 'firstName'
                ],
                [
                    'label' => 'Last Name',
                    'id' => 'lastName'
                ]
            ]
        ],
        'product' => 
        [
            'id' => 'productForm', 
            'formFields' => 
            [
                [
                    'label' => 'Product name',
                    'id' => 'productName'
                ],
                [
                    'label' => 'Serial Number',
                    'id' => 'productSerial'
                ]
            ]
        ],
        'settings' => 
        [
            'id' => 'userForm', 
            'formFields' => 
            [
                [
                    'label' => 'My Name',
                    'id' => 'userFormName'
                ],
                [
                    'label' => 'My Age',
                    'id' => 'userFormAge'
                ]
            ]
        ]
    ];

    public function __construct() { }

    public function get($key)
    {
        try
        {
            return $this->keyValues[$key];
        }
        catch(Exception)
        {
            throw new Exception('This key is not present in the keyValues dictionary.');
        }
    }

    public function getFormData($key)
    {
        foreach($this->formData as $fk => $fv)
        {
            if($fk == $key)
            {
                return json_decode(json_encode($fv)); // Convert to object
            }
        }

        throw new Exception('This key ('.$key.') was not present in formData table.');
    }
}