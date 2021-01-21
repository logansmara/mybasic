<?php

namespace app\controllers;
use Yii;
use app\models\Authors;
use app\models\Category;
use app\models\Groups;
use app\models\Blogs;
use app\models\News;
use yii\web\NotFoundHttpException;

class VkontakteController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        return $this->render('index');
    }
    public function actionAuthors()
    {
        $authors = Authors::find()->all();
        return $this->render('authors',compact('authors'));
    }
    public function actionVideos()
    {
        return $this->render('videos');
    }
    public function actionArticles()
    {
        return $this->render('articles');
    }
/* страница с группами ВКонтакте */
    public function actionCategories()
    {
        $categories = Category::find()->all();
        return $this->render('categories',compact('categories'));
    }

    public function actionCategory($id)
    {
    	$category = Category::find()->where('id = :id', [':id' => $id])->one();
        $query = Groups::find()->where(['category_id' => $id]);
        $pagination = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 40]);
        $groups = $query->offset($pagination->offset)->limit($pagination->limit)->all();
/*
        $addgroups = AddGroup::find()->where(['category_id' => $id])->orderBy('rand()')->all();
*/
if (!$category = Category::find()->where('id = :id', [':id' => $id])->one()) {
throw new NotFoundHttpException('Категория не найдена!', 404);
}
        return $this->render('category', compact('groups','category','pagination'));
    }
/* не применяется
    public function actionGroup($id)
    {
    	$addgroup = Groups::find()->where('id = :id', [':id' => $id])->one();
        return $this->render('group', compact('addgroup','id'));
    }
*/
    public function actionBlog($id)
    {
$blog = Blogs::find()->where('id = :id', [':id' => $id])->one();
if (!$blog = Blogs::find()->where('id = :id', [':id' => $id])->one()) {
throw new NotFoundHttpException('Статья не найдена!', 404);
}
/* для получения названия группы и адреса */
$url = 'https://vk.com/' . $blog->login_author;
$group = Groups::find()->asArray()->where(['url' => $url])->one();
        return $this->render('blog',compact('blog', 'group'));
    }

    public function actionAll()
    {
        $groups = Groups::find()->all();
        return $this->render('all',compact('groups'));
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }
    
    public function actionSearch()
    {
        return $this->render('search');
    }

}
