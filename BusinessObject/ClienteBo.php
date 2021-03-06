<?php
    /*<sumary>
        Essa Pagina é responsável pela controle do objeto Cliente
    </sumary>*/

    #region "Inclusao de todas as paginas necessarias"

    require_once("../../Entities/Base/ResultInfo.php");
    require_once("../../DataObjectAccess/ClienteDao.php");

    #endregion

    class ClienteBo
    {
        public $Dao;
        public $ResultInfo;

        #region "Metodo Construtor"

        function __construct()
        {            
            $this->Dao        = new ClienteDao();
            $this->ResultInfo = new ResultInfo();
        }

        #endregion
        
        #region "Metodo Para Inserir Cliente"

        public function InserirCliente($modelo)
        {
            try
            {    
                $this->ResultInfo->setReturnInfo($this->Dao->InserirCliente($modelo));

                if(empty($this->ResultInfo->getReturnInfo()) || $this->ResultInfo->getReturnInfo() <= 0)
                {
                    $this->ResultInfo->setErro(true);   
                    $this->ResultInfo->setMensagem("Erro ao gravar Cliente!");                   
                }
            }
            catch (Exception $e)
            {
                $this->ResultInfo->setErro(true);
                $this->ResultInfo->setMensagem($e->getMessage());
            }

            return $this->ResultInfo;
        }

        #endregion

        #region "Metodo Para Alterar Cliente"

        public function AlterarCliente($modelo)
        {
            try
            {    
                $this->ResultInfo->setReturnInfo($this->Dao->AlterarCliente($modelo));

                if(empty($this->ResultInfo->getReturnInfo()) || $this->ResultInfo->getReturnInfo() <= 0)
                {
                    $this->ResultInfo->setErro(true);   
                    $this->ResultInfo->setMensagem("Erro ao Alterar Cliente!");                   
                }
            }
            catch (Exception $e)
            {
                $this->ResultInfo->setErro(true);
                $this->ResultInfo->setMensagem($e->getMessage());
            }

            return $this->ResultInfo;
        }

        #endregion

        #region "Metodo Para Excluir o Cliente"

        public function ExcluirCliente($codigo)
        {
            try
            {    
                $this->ResultInfo->setReturnInfo($this->Dao->ExcluirCliente($codigo));

                if(empty($this->ResultInfo->getReturnInfo()) || $this->ResultInfo->getReturnInfo() <= 0)
                {
                    $this->ResultInfo->setErro(true);   
                    $this->ResultInfo->setMensagem("Erro ao excluir Cliente!");                   
                }
            }
            catch (Exception $e)
            {
                $this->ResultInfo->setErro(true);
                $this->ResultInfo->setMensagem($e->getMessage());
            }

            return $this->ResultInfo;
        }

        #endregion

        #region "Metodo Para Listar os Clientes"

        public function ListarCliente($modelo)
        {
            try
            {    
                $this->ResultInfo->setItens($this->Dao->ListarCliente($modelo));

                if(empty($this->ResultInfo->getItens()))
                {
                    $this->ResultInfo->setErro(true);   
                    $this->ResultInfo->setMensagem("Nenhum Cliente Encontrado!");                   
                }
            }
            catch (Exception $e)
            {
                $this->ResultInfo->setErro(true);
                $this->ResultInfo->setMensagem($e->getMessage());
            }

            return $this->ResultInfo;
        }

        #endregion

        #region "Metodo Para Buscar Cliente Expecifico"

        public function GetCliente($modelo)
        {
            try
            {    
                $this->ResultInfo->setItem($this->Dao->GetCliente($modelo));

                if(empty($this->ResultInfo->getItem()))
                {
                    $this->ResultInfo->setErro(true);   
                    $this->ResultInfo->setMensagem("Cliente Não Encontrado!");                   
                }
            }
            catch (Exception $e)
            {
                $this->ResultInfo->setErro(true);
                $this->ResultInfo->setMensagem($e->getMessage());
            }

            return $this->ResultInfo;
        }

        #endregion
    }

?>