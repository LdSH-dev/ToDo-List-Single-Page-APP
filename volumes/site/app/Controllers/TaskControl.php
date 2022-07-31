<?php

namespace App\Controllers;

use App\Models\Task;


class TaskControl extends BaseController
{   
    public function insertTask()
    {   
        if ($this->request->isAJAX())
        {   
            $data['name']     = $this->request->getPost('name');
            $data['desc']     = $this->request->getPost('desc');
            $data['datetime'] = $this->request->getPost('datetime');
            $data['fk_list']  = $this->request->getPost('fk_list');

            $taskModel   = new Task();
            $result = $taskModel->insert($data);

            return json_encode($result);
        }
    }

    public function deleteTask()
    {
        if ($this->request->isAJAX())
        {
            $id = $this->request->getPost('id');

            $taskModel = new Task();
            $result = $taskModel->delete($id);

            return json_encode($result);
        }
    }

    public function updateTask()
    {
        if ($this->request->isAJAX())
        {
            $id     = $this->request->getPost('id');
            $status = $this->request->getPost('status');

            $data['status'] = $status;

            $taskModel = new Task();
            $result = $taskModel->update($id, $data);

            return json_encode($result);
        }
    }

    public function getTask()
    {
        if ($this->request->isAJAX())
        {
            $id     = $this->request->getPost('id');

            $taskModel = new Task();
            $result = $taskModel->find($id);

            return json_encode($result);
        }
    }

    public function editTask()
    {
        if ($this->request->isAJAX())
        {
            $id       = $this->request->getPost('id');
            $name     = $this->request->getPost('name');
            $desc     = $this->request->getPost('desc');
            $datetime = $this->request->getPost('datetime') ;
            
            $data['name']     = $name;
            $data['desc']     = $desc;
            $data['datetime'] = $datetime;

            $taskModel = new Task();
            $result = $taskModel->update($id, $data);

            return json_encode($result);
        }
    }
}