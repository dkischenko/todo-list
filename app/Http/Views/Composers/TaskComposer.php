<?php

namespace App\Http\Views\Composers;

use App\Http\Traits\TaskTrait;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

/**
 * Class MovieComposer
 * @package App\Http\Views\Composers
 */
class TaskComposer
{
    use TaskTrait;

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('tasks', $this->model->all());
        $view->with('task', Route::current()->task);
        $view->with('title', Route::current()->getActionMethod());
    }

}
