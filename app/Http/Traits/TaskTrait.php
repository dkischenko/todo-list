<?php

namespace App\Http\Traits;

use App\Models\Task;
use App\Repositories\Repository;

/**
 * Trait TaskTrait
 * @package App\Http\Traits
 */
trait TaskTrait
{
    /** @var Repository */
    protected $model;

    /**
     * TaskTrait constructor.
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->model = new Repository($task);
    }
}
