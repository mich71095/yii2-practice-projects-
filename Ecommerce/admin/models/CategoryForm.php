<?php
namespace admin\models;

use yii\base\Model;
use admin\models\Category;

/**
 * Signup form
 */
class CategoryForm extends Model
{
    public $categoryname;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['categoryname', 'trim'],
            ['categoryname', 'required'],
            ['categoryname', 'string', 'min' => 2, 'max' => 255]
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function category()
    {

        echo "CATEGORY";
        print "CATEGORY";
        printf("ASASASASAS");
        


        if (!$this->validate()) {
            return null;
        }

        
        $category = new Category();
        $category->categoryname = $this->categoryname;

        
        return $category->save() ? $category : null;
    }
}
