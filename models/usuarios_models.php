<?php
    class usuario_informacion{
        private $correo;
        private $password;
        private $salt;
        private $nombre;

        public function __construct($correo, $password,$salt,$nombre){
            $this->correo = $correo;
            $this->password = $password;
            $this->salt = $salt;
            $this->nombre = $nombre;
        }

        public function valida_usuario(){
            #password = hash(password . salt)
            #salt = md5(random_bytes(20))
            $tabla[] = ["correo"=>"usuario1@hotmail.com", "password"=>"31d3418aa4a81fbe7aa597c3e38d2c7d2d47e099", "salt"=>"wu9b#2TdI3W*", "nombre"=>"Usuario1"];
            $tabla[] = ["correo"=>"usuario2@hotmail.com", "password"=>"f7390c4586d0417d32278ba473d1ef7c513b6386", "salt"=>"38E0D0e3j*Wt", "nombre"=>"Usuario2"];
            $tabla[] = ["correo"=>"usuario3@hotmail.com", "password"=>"1f36c3d500be6d2bd4945cbe2e5ee66e3d214c24", "salt"=>"*Z9kC44Xp8%c", "nombre"=>"Usuario3"];
            foreach($tabla as $t)
            {
                $pass = sha1($this->password.$t["salt"]);
                if($this->correo == $t["correo"] && $pass == $t["password"])
                    return $t;
            }
            return [];
        }
        
    }
?>