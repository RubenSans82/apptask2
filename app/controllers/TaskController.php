<?php
namespace Ruben\controllers;
use Ruben\core\Controller;
use Ruben\models\Task;
use function Symfony\Component\Clock\now;
class TaskController extends Controller
{
    public function index(...$params)
    {
        $task = Task::all();
        $this->view('task_list', $task);
    }
    public function new(...$params)
    {
        if (isset($_POST["title"])) {
            $task = new Task();
            $task->title = $_POST["title"];
            $task->description = $_POST["description"];
            $task->create_date = now();
            $task->save();
            header('Location: ' . BASE_URL . 'task');

        }
        $this->view('new_task');
    }

    public function edit(...$params)
    {
        if (isset($_POST["title"])) {
            $task = Task::find($params[0]);
            $task->title = $_POST["title"];
            $task->description = $_POST["description"];
            $task->save();
            header('Location: ' . BASE_URL . 'task');
        }
        $task = Task::find($params[0]);
        $this->view('edit_task', $task);
    }

    public function delete(...$params)
    {
        $task = Task::find($params[0]);
        $task->delete();
        header('Location: ' . BASE_URL . 'task');
    }
}