<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Repositories\TaskRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected taskRepository $taskRepository;
    /**
     * Display a listing of the resource.
     */
    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }
    public function index(): JsonResponse
    {
        return response()->json($this->taskRepository->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request): JsonResponse
    {
        $task = $this->taskRepository->create($request->validated());

        return response()->json($task, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse
    {
        return response()->json($this->taskRepository->find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, $id): JsonResponse
    {
        $task = $this->taskRepository->update($id, $request->validated());

        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
        $this->taskRepository->delete($id);

        return response()->json(null, 204);
    }
}
