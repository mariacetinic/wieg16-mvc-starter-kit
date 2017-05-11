<?php

namespace App;

use PDO;

class Database {
	/**
	 * @var PDO
	 */
	private $pdo;

	public function __construct(PDO $pdo) {
		$this->pdo = $pdo;
	}

	/**
	 * @param integer $id
	 * @return Model
	 */
	public function getById($table, $id) {
		$stm = $this->pdo->prepare('SELECT * FROM '.$table.' WHERE id = :id');
		$stm->bindParam(':id', $id);
		$success = $stm->execute();
		$row = $stm->fetch(PDO::FETCH_ASSOC);
		return ($success) ? $row : [];
	}

	public function getAll($table) {
		$stm = $this->pdo->prepare('SELECT * FROM '.$table);
		$success = $stm->execute();
		$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
		return ($success) ? $rows : [];
	}

	public function create($table, $data) {
		$columns = array_keys($data);

		$columnSql = implode(',', $columns);
		'name,quantity,recipe_difficulty';

		$bindingSql = ':'.implode(',:', $columns);
		':name,:quantity,:recipe_difficulty';

		$sql = "INSERT INTO $table ($columnSql) VALUES ($bindingSql)";
		$stm = $this->pdo->prepare($sql);

		foreach ($data as $key => $value) {
			$stm->bindValue(':'.$key, $value);
		}
		$status = $stm->execute();

		return ($status) ? $this->pdo->lastInsertId() : false;
	}

    /**
     * @param $table
     * @param $id
     * @return bool
     */
    public function delete($table, $id) {
        $stm = $this->pdo->prepare('DELETE FROM '.$table.' WHERE id = :id');
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        //$row = $stm->fetch(PDO::FETCH_ASSOC); - den ska bort eftersom den hämtar data
        return ($success) /*? $row : []*/;
    }

	/**
	 * ÖVERKURS
	 *
	 * Skriv den här själv!
	 * Titta på create för strukturidéer
	 * Du kan binda parametrar precis som i create
	 * Klura ut hur du skall sätt ihop rätt textsträng för x=y...
	 * Implode kommer inte ta dig hela vägen den här gången
	 * Kanske array_map eller foreach?
     */

	public function update($table, $id, $data) {
		//$columns = array_keys($data);

		/*$data = [
		    'name' => 'Marcus',
            'decription' => 'Description...'
        ];*/

        $keys = array_keys($data); //plockar ut nycklarna. Arraymap tar en array och tar element för element. Det som tas från array_map blir det nya värdet

        //columns före
        //['name', 'description'];
        $keys = array_map(function($item) { //för varje steg blir $item nästa steg. Första gången name, andra gången description
            return $item.'=:'.$item;
        }, $keys);

        //columns efter
        //['name=:name', 'description=:description'];

        //implode: 'name=:name', 'description=:description'
        $bindingSql = implode(',', $keys);

		$sql = "UPDATE $table SET $bindingSql WHERE id = :id";
        $stm = $this->pdo->prepare($sql);
        $data['data'] = $id;

        foreach ($data as  $key => $value) {
            $stm->bindValue(':'.$key, $value);
        }

        $status = $stm->execute();
            return $status;


	}

	/**
	 * Titta på getById för struktur

	public function delete($table, $id) {

	}*/

}