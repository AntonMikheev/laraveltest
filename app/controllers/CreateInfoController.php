<?php
class Todo_Controller extends Base_Controller
{
    public function action_list() {
        $todos = Todo::all();
        return View::make("list")
                ->with("todos", $todos);
    }

    public function action_view($id) {
        $todo = Todo::where_id($id)->first();
        return View::make("view")
                ->with("todo", $todo);
    }

    public function action_delete($id) {
        $todo = Todo::where_id($id)->first();
        $todo->delete();
        return View::make("deleted");
    }

    public function action_new() {
        return View::make("add");
    }

    public function action_add() {
        $todo = new Todo();
        $todo->title = Input::get("title");
        $todo->description = Input::get("description");
        $todo->save();
        return View::make("success");
    }
}
