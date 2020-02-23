<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repository
 * @package App\Repositories
 */
class Repository implements RepositoryInterface
{
    /** @var Model */
    protected $model;

    /**
     * Repository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritDoc
     */
    public function all()
    {
        return $this->model
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    /**
     * @inheritDoc
     */
    public function create(array $data): void
    {
        $this->model->create($data);
    }

    /**
     * @inheritDoc
     */
    public function update(array $data, Model $model)
    {
        if (!isset($data['done'])) {
            $data['done'] = 0;
        }

        $model->update($data);
    }
}
