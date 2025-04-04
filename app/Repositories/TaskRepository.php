<?php

namespace App\Repositories;

use App\Models\Task;

class TaskRepository
{
    public function all()
    {
        return Task::all();
    }

    public function find(int $id)
    {
        return Task::findOrFail($id);
    }

    public function create(array $data)
    {
        return Task::create($data);
    }

    public function update(int $id, array $data)
    {
        $task = $this->find($id);
        $task->update($data);

        return $task;
    }

    public function delete(int $id)
    {
        $task = $this->find($id);

        return $task->delete();
    }
}
