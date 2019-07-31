<?php
namespace App\controllers;
use League\Plates\Engine;

class HomeController{

    public $view;

    public function __construct(Engine $view)
    {
        $this->view = $view;
    }

    public function index($id){
////        ($id);
//        var_dump($this->bilder->all() . "Метод QueryBilder->all()  вызван");
//        var_dump($this->bilder->manager->upload() . "Через метод QueryBilder вызван метод ImageManager->upload()");
//        var_dump($this->bilder->manager->auth->registration() . "Через методы QueryBilder->ImageManager вызван метод  Auth->registration()");
////        echo "start index action ". $id;

//        $templates = new Engine('../app/views');
        echo "asdasd";
        $myTasks = [
            "first task", "clean house", "do homework"
        ];
        // Render a template
//        echo $templates->render('show', ['tasksInView' => $myTasks]);
        echo $this->view->render("show", ['tasksInView' => $myTasks]);

    }


    public function about(){
        echo "start about action";
    }


}