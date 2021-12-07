<?php
    /*<sumary>
        Essa Pagina é responsável pela conexao com o banco para o Cliente
    </sumary>*/

    #region "Inclusao de todas as paginas necessarias"

    require_once("Base/BaseDao.php");

    #endregion

    class ClienteDao extends BaseDao
    {
        #region "Metodo Construtor"

        public function __construct()
        {
            parent::__construct();
        }

        #endregion

        #region "Metodo Para Inserir Cliente"

        public function InserirCliente($modelo)
        {
            $sql = "CALL PROCEDO_CLIENTE_0001(?,?,?,?,?,?)";

            try
            {
                $this->AbrirConexao();
                $this->Qry = $this->Base->prepare($sql);
                $this->Qry->bindValue(1, $modelo->getNome());
                $this->Qry->bindValue(2, $modelo->getEmail());
                $this->Qry->bindValue(3, $modelo->getDocumento());
                $this->Qry->bindValue(4, $modelo->getTelefone());
                $this->Qry->bindValue(5, $modelo->getCidade());
                $this->Qry->bindValue(6, $modelo->getObservacao());
                $this->Qry->execute();

                $ret = $this->ReturnValue();
                $this->QryClose();
                $this->FecharConexao();
            }
            catch(PDOException $e)
            {
                throw new Exception($e);
            }

            return $ret;
        }

        #endregion

        #region "Metodo Para Excluir Cliente"

        public function ExcluirCliente($codigo)
        {
            $sql = "CALL PROCEDO_CLIENTE_0003(?)";

            try
            {
                $this->AbrirConexao();
                $this->Qry = $this->Base->prepare($sql);
                $this->Qry->bindValue(1, $codigo);
                $this->Qry->execute();

                $ret = $this->ReturnValue();
                $this->QryClose();
                $this->FecharConexao();
            }
            catch(PDOException $e)
            {
                throw new Exception($e);
            }

            return $ret;
        }

        #endregion
    }

?>