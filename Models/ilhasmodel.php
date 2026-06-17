<?php
namespace App\Models;
use CodeIgniter\Model;

class ilhasmodel extends Model{
	//Atributos de configuração
	protected $table = 'ilhas';
	protected $primaryKey = 'ID_Conteudo';

	//Campos editáveis
	protected $allowedFields = ['Titulo','Texto_Curto','Texto_Completo','Imagem'];

	//Método para apresentar o conteúdo
	public function getilhas(){
		return $this->findAll();
	}
}
?>