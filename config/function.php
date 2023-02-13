<?php

    class functions{
        
        public function points($pdo,$id){

            try{

                $dados = [];

                $sql = $pdo->prepare('SELECT * FROM points WHERE id = :id');
                $sql->bindValue(':id',$id);
                
                if($sql->execute()){                    
                    $dados = $sql->fetch(PDO::FETCH_ASSOC);

                    return $dados;
                }

            }catch(PDOException $error){
                // $error->getMessage()."<br>";
            }
        }

        public function add($pdo,$ad,$id){

            try{

                $sql = $pdo->prepare('UPDATE points SET points = :ad WHERE id = :iu');
                $sql->bindValue(':iu',$id);
                $sql->bindValue(':ad',$ad);
                $sql->execute();

            }catch(PDOException $error){
                echo "<p class\"bg-danger text-light\">Algo deu errado por favor espere um pouco</p>";
                // echo $error->getMessage();            
            }

        }

        public function clear($pdo,$user){
            try{

                $sql = $pdo->prepare('UPDATE points SET points = 0 WHERE id = :id');
                $sql->bindValue(':id',$user);
                $sql->execute();

            }catch(PDOException $error){
                echo "<p class\"bg-danger text-light\">Algo deu errado por favor espere um pouco</p>";
                //$error->getMessage();            
            }
        }

        public function record($pdo,$quant,$user){

            try {

                $sql = $pdo->prepare('UPDATE points SET record = :q WHERE id = :id');
                $sql->bindValue(':q',$quant);
                $sql->bindValue(':id',$user);
                $sql->execute();

            }catch(PDOException $error){
                echo "<p class\"bg-danger text-light\">Algo deu errado por favor espere um pouco</p>";
                //$error->getMessage();            
            }
        }

        public function questAdd($quest,$points,$user,$pdo){

            try{

                $sql = $pdo->prepare('INSERT INTO quest(id_user,quest_name,points) VALUE(:iu,:q,:p)');
                $sql->bindValue(':iu',$user);
                $sql->bindValue(':q',$quest);
                $sql->bindValue(':p',$points);
                $sql->execute();

            }catch(PDOException $error){
                echo "<p class=\"bg-danger text-light text-center py-2\">Não foi possivel adicionar a quest por favor tente mais tarde</p>";
               echo $error->getMessage();
            }
        }

        public function quest($pdo,$id){

            try{

                $dado = [];

                $sql = $pdo->prepare('SELECT * FROM quest WHERE id_user = :id AND checagem = :n');
                $sql->bindValue(':id',$id);
                $sql->bindValue(':n','and');
                $sql->execute();

                $dado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $dado;
            }catch(PDOException $error){
                // echo $error->getMessage();
            }
        }

        public function failQuest($pdo,$id){

            try{

                $dado = [];

                $sql = $pdo->prepare('SELECT * FROM quest WHERE id_user = :id AND checagem = :n');
                $sql->bindValue(':id',$id);
                $sql->bindValue(':n','fail');
                $sql->execute();

                $dado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $dado;
            }catch(PDOException $error){
                // echo $error->getMessage();
            }
        }

        public function successQuest($pdo,$id){

            try{

                $dado = [];

                $sql = $pdo->prepare('SELECT * FROM quest WHERE id_user = :id AND checagem = :n');
                $sql->bindValue(':id',$id);
                $sql->bindValue(':n','success');
                $sql->execute();

                $dado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $dado;
            }catch(PDOException $error){
                // echo $error->getMessage();
            }
        }

        public function questCheck($pdo,$id_user,$quest_id){

            try{
                $sql = $pdo->prepare("UPDATE quest SET checagem = :s WHERE id_user = :user AND id = :id ");
                $sql->bindValue(':s','success');
                $sql->bindValue(':user',$id_user);
                $sql->bindValue(':id',$quest_id);
                $sql->execute();
            }catch(PDOException $error){
                echo '<p class="text-center py-2 bg-danger text-light">Algo deu errado por favor espere um momento</p>';
                //echo $error->getMessage();
            }
        }

        public function questFail($pdo,$id_user,$quest_id){

            try{
                $sql = $pdo->prepare("UPDATE quest SET checagem = :s WHERE id_user = :user AND id = :id");
                $sql->bindValue(':s','fail');
                $sql->bindValue(':user',$id_user);
                $sql->bindValue(':id',$quest_id);
                $sql->execute();
            }catch(PDOException $error){
                echo '<p class="text-center py-2 bg-danger text-light">Algo deu errado por favor espere um momento</p>';
                echo $error->getMessage();
            }
        }

        public function login($pdo,$name){

            try{
                $sql = $pdo->prepare("SELECT * FROM points WHERE user = :us");
                $sql->bindValue(':us',$name);
                $sql->execute();

                $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $dados;

            }catch(PDOException $error){
                echo '<p class="bg-dange text-light text-center py-2">Algo deu errado, por favor tente mais tarde</p>';
                echo $error->getMessage();
            }
        }

        public function register($pdo,$name,$email,$pass){
    
            try {

                $sql = $pdo->prepare('INSERT INTO `points`(`user`, `email`, `senha`) VALUES(:n,:e,:p)');
                $sql->bindValue(':n',$name);
                $sql->bindValue(':e',$email);
                $sql->bindValue(':p',$pass);
                $sql->execute();

            } catch (PDOException $error) {
                echo '<p class="bg-dange text-light text-center py-2">Algo deu errado, por favor tente mais tarde</p>';
                echo $error->getMessage();
            }
    
        }

        public function questsDelete($id,$pdo){

            $sql = $pdo->prepare('DELETE FROM quest WHERE id = :id');
            $sql->bindValue(':id',$id);
            $sql->execute();
        }
    }
