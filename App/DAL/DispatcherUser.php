<?php
/* #region  Constantes */
define("NEWUSER", 'SP_NEWUSER');
define('SELECTUSER', 'SP_SELECTUSERS');
/* #endregion */
class DispatcherUser
{
    public function novoUsuario($user){
        try{
            $email = $user->getEmail();
            $nome = $user->getNome();
            $password = $user->getPassword();
            $tipo = $user->getTipo();
            $aluno = $user->getAluno();
            $ra = $user->getRa();
            $stmt = $user->instance->prepare("CALL " . NEWUSER . "(?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $password);
            $stmt->bindParam(4, $tipo);
            $stmt->bindParam(5, $aluno);
            $stmt->bindParam(6, $ra);
            return $stmt->execute();   

        }catch(Excecption $ex){
            outputHeader(false, null, $ex, 404);
        }
    }
}
