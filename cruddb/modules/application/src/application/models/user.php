<?php
    class user {
        public $id;
        public $name;
        public $email;
        private $password;
        public $description;
        public $photo;
         public $bdate;
        public $cities_idcity;
        public $genders_idgender;
        public $privacy;
        public $hobbies;

        
        
        
        /**
     * @return the $password
     */
    public function getPassword()
    {
        return $this->password;
    }

  /**
     * @param field_type $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

 /**function updateUser($id, $data, $filename)
{   
    $data['privacy']=implode(",", $data['privacy']);
    $data['hobbies']=implode(",", $data['hobbies']);
    
    // Juntar por pipes los campos
    $usuario = implode("|", $data);
    $usuarios = getUsers($filename);
    // Sustituir la fila id por el usuario
    $usuarios[$id]=$usuario;
    // Juntar por saltos de linea los usuarios
    $usuarios = implode("\n", $usuarios);
    // Sobreescribir el fichero usuarios.txt
    file_put_contents($filename,$usuarios);
    
    return $usuario;
}
    */    
    function updateUser($id,$data,$filename){
        $data['privacy']=implode(",", $data['privacy']);
        $data['hobbies']=implode(",", $data['hobbies']);
        
        // Juntar por pipes los campos
        $usuario = implode("|", $data);
        $usuarios = getUsers($filename);
        // Sustituir la fila id por el usuario
        $usuarios[$id]=$usuario;
        // Juntar por saltos de linea los usuarios
        $usuarios = implode("\n", $usuarios);
        // Sobreescribir el fichero usuarios.txt
        file_put_contents($filename,$usuarios);
        
    return $usuario;
    }
    
 /** function getUser($id, $filename)
{
    // Leer el archivo de usuarios.txt
    $usuarios = file_get_contents($filename);
    // Separar por saltos de linea en usuarios
    $usuarios = explode("\n", $usuarios);
    // Tomar el usuario ID
    
    
    // Separar por usuario por pipes
    $usuario = explode("|", $usuarios[$id]);
    // Separar campos multiples por comas
    $usuario[6]=explode(",", $usuario[6]);
    $usuario[9]=explode(",", $usuario[9]);
    $usuario[0]=$id;
    
    return $usuario;
}   

 */   
    function getUser($id, $filename){
        
    }
    
    
    function deleteUser($id,$filename){
    }
    
    
    function insertUser($data,$filename){
        
    }
    
    
    
    
    
    function conectionDB(){
    }
    
    function closeConectionDB(){
        
    }

    
    
    
    
    
    
    
    
    
    
    }
    
