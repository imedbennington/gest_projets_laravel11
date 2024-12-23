<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TaskAssigned;
use App\Notifications\TaskUpdated;
use App\Notifications\TaskDeleted;
use Illuminate\Support\Facades\Notification;
use App\Models\Project;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required|in:low,medium,high',
        ]);

        $task = $project->tasks()->create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'status' => 'to_do',
        ]);

        // Send notification to user
        //Notification::send($task->user, new TaskAssigned($task));

        return redirect()->route('projects.show', $project);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        // Send notification for task update
        //Notification::send($task->user, new TaskUpdated($task));

        return redirect()->route('projects.show', $task->project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        // Send notification for task deletion if needed
        //Notification::send($task->user, new TaskDeleted($task));

        return redirect()->route('projects.show', $task->project);
    }
}
