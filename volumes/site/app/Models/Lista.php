<?

namespace App\Models;

use CodeIgniter\Model;

class Lista extends Model
{
    protected $DBGroup = 'default';

    protected $table      = 'list';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'status'];

 
    function Lista()
    {
        parent::Model();
    }

    function getListas()
    {
        $listas = $this->findAll();

        foreach ($listas as $key => $lista)
        {
            $tasks = $this->getTasks($lista['id']);
            $listas[$key]['tasks'] = $tasks;
        }

        return $listas;
    }

    function getTasks($id)
    {
        $sql = "
            SELECT * FROM task
            WHERE fk_list = $id
            ORDER BY datetime ASC, id ASC
        ";

        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    function deleteLista($id)
    {
        $sql = "
            DELETE FROM task
            WHERE fk_list = $id
        ";

        $query = $this->db->query($sql);
        $return = $this->delete($id);

        return $return;
    }
}

?>