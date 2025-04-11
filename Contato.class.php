<?php

class Contato
{
    private $id;
    private $nome;
    private $snome;
    private $nascimento;
    private $email;
    private $senha;
    private $pdo;

    function __construct()
    {
        $dns = "mysql:dbname=contato;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    //o metodo get retorna o valor de uma propriedade
    public function getNome()
    {
        return $this->nome;
    }

    public function getSnome()
    {
        return $this->snome;
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getId()
    {
        return $this->id;
    }
    // o metodo set permite alterar o valor de uma propriedade
    public function setNome($nome)
    {
        return $this->nome;
    }

    public function setSnome($snome)
    {
        return $this->snome;
    }

    public function setNascimento($nascimento)
    {
        return $this->nascimento;
    }

    public function setEmail($email)
    {
        return $this->email;
    }
    
    public function deletar($id)
    {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('id', $id);
        $stmt->execute();

        /*if($stmt->rowCount() > 0){
            return true;
        }else{
            return flase;
        }
        */

        return $stmt->rowCount() > 0;
    }

    public function atualizar($id, $nome, $snome, $nascimento, $email, $senha)
    {
        $sql = "UPDATE usuarios SET nome = :n, snome = :b, nascimento = :a, email = :e, senha = :s WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':n', $nome);
        $stmt->bindValue(':b', $snome);
        $stmt->bindValue(':a', $nascimento);
        $stmt->bindValue(':e', $email);
        $stmt->bindValue(':s', $senha);
        $stmt->bindValue(':id', $id);

        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            //se verdadeiro retorna a linha do registro com todos os dados
            return $stmt->fetch();
        } else {
            //se não retorna vazio
            return array();
        }
    }

    function chkUser($email)
    {
        //primeiro passo crio uma query  (consulta sql) e armazeno na variavel
        $sql = "SELECT * FROM usuarios WHERE email = :e";

        //segundo passo, passo os dados para o metodo prepare da classe PDO
        $stmt = $this->pdo->prepare($sql);

        //terceiro passo, passo os dados para o metodo binValue do pdo
        $stmt->bindValue(':e', $email);

        //quarto passo, executo a query
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $info = $stmt->fetch();
            return $info;
        }else {
            $info = array();
            return $info;
        }

    }

    function chkUserPass($email, $senha)
    {

        //primeiro passo crio uma query  (consulta sql) e armazeno na variavel
        $sql = "SELECT * FROM usuarios WHERE email = :e AND senha = :s";

        //segundo passo, passo os dados para o metodo prepare da classe PDO
        //dentro da variavel pdo eu incluo o preare quebusca na minha variavel sql (comando de busca do meu banco de dados)
        $stmt = $this->pdo->prepare($sql);

        //terceiro passo, passo os dados para o metodo binValue do pdo
        $stmt->bindValue(':e', $email);
        $stmt->bindValue(':s', $senha);

        //quarto passo, executo a query
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            //se verdadeiro retorna a linha do registro
            return $stmt->fetch();
        } else {
            //se não retorna vazio
            return array();
        }

    }

    function insertUser($nome, $snome, $nascimento, $email, $senha)
    {

        //primeiro passo crio uma query  (consulta sql) e armazeno na variavel
        $sql = "INSERT INTO usuarios set nome = :n, snome = :b, nascimento = :a, email = :e, senha = :s";
        $cmd = "SELECT * FROM usuarios WHERE email = :e";

        //segundo passo, passo os dados para o metodo prepare da classe PDO
        $stmt = $this->pdo->prepare($sql);

        //terceiro passo, passo os dados para o metodo binValue do pdo

        $stmt->bindValue(':n', $nome);
        $stmt->bindValue(':b', $snome);
        $stmt->bindValue(':a', $nascimento);
        $stmt->bindValue(':e', $email);
        $stmt->bindValue(':s', $senha);
        



        //quarto passo, executo a query
        return $stmt->execute();
    }

    public function getAll(){
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

}


//-- NOVA TABELA ------------------------------------------------------------------------------


class fornecedor
{
    private $id;
    private $pj;
    private $cnpj;
    private $ende;
    private $tel2;
    private $categoria;
    private $email2;
    private $senha2;
    private $pdo;

    //o metodo get retorna o valor de uma propriedade
    public function getPj()
    {
        return $this->pj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getEnde()
    {
        return $this->ende;
    }

    public function getTel2()
    {
        return $this->tel2;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getEmail2()
    {
        return $this->email2;
    }

    public function getSenha2()
    {
        return $this->senha2;
    }

    public function getId()
    {
        return $this->id;
    }
    
    // o metodo set permite alterar o valor de uma propriedade
    public function setPj($pj)
    {
        return $this->pj;
    }

    public function setCnpj($cnpj)
    {
        return $this->cnpj;
    }

    public function setTel2($Tel2)
    {
        return $this->tel2;
    }

    public function setEnde($ende)
    {
        return $this->ende;
    }

    public function setCategoria($categoria)
    {
        return $this->categoria;
    }

    public function setEmail2($email2)
    {
        return $this->email2;
    }

    public function setSenha2($senha2)
    {
        return $this->senha2;
    }

    function __construct()
    {
        $dns = "mysql:dbname=contato;host=localhost";
        $dbUser = "root";
        $dbPass = "";


        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM prestadores WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('id', $id);
        $stmt->execute();

        /*if($stmt->rowCount() > 0){
            return true;
        }else{
            return flase;
        }
        */

        return $stmt->rowCount() > 0;
    }

    public function prestadores($id, $pj, $cnpj, $tel, $ende, $categoria, $email2, $senha2)
    {
        $sql = "UPDATE prestadores SET pj = :f, cnpj = :g, tel = :h, ende = :i, categoria = :l, email2 = :j, senha2 = :m WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':f', $pj);
        $stmt->bindValue(':g', $cnpj);
        $stmt->bindValue(':h', $tel);
        $stmt->bindValue(':i', $ende);
        $stmt->bindValue(':l', $categoria);
        $stmt->bindValue(':j', $email2);
        $stmt->bindValue(':m', $senha2);
        $stmt->bindValue(':id', $id);

        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            //se verdadeiro retorna a linha do registro com todos os dados
            return $stmt->fetch();
        } else {
            //se não retorna vazio
            return array();
        }
    }

    function chkUser($email2)
    {
        //primeiro passo crio uma query  (consulta sql) e armazeno na variavel
        $sql = "SELECT * FROM prestadores WHERE email2 = :j";

        //segundo passo, passo os dados para o metodo prepare da classe PDO
        $stmt = $this->pdo->prepare($sql);

        //terceiro passo, passo os dados para o metodo binValue do pdo
        $stmt->bindValue(':j', $email2);

        //quarto passo, executo a query
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $info = $stmt->fetch();
            return $info;
        }else {
            $info = array();
            return $info;
        }

    }

    function chkUserPass($email2, $senha2)
    {

        //primeiro passo crio uma query  (consulta sql) e armazeno na variavel
        $sql = "SELECT * FROM prestadores WHERE email2 = :j AND senha2 = :m";

        //segundo passo, passo os dados para o metodo prepare da classe PDO
        //dentro da variavel pdo eu incluo o preare quebusca na minha variavel sql (comando de busca do meu banco de dados)
        $stmt = $this->pdo->prepare($sql);

        //terceiro passo, passo os dados para o metodo binValue do pdo
        $stmt->bindValue(':j', $email2);
        $stmt->bindValue(':m', $senha2);

        //quarto passo, executo a query
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            //se verdadeiro retorna a linha do registro
            return $stmt->fetch();
        } else {
            //se não retorna vazio
            return array();
        }

    }

    function insertUser($pj, $cnpj, $tel, $ende, $categoria, $email2, $senha2)
    {

        //primeiro passo crio uma query  (consulta sql) e armazeno na variavel
        $sql = "INSERT INTO prestadores set pj = :f, cnpj = :g, tel = :h, ende = :i, categoria = :l, email2 = :j, senha2 = :m";
        $cmd = "SELECT * FROM prestadores WHERE email = :e";

        //segundo passo, passo os dados para o metodo prepare da classe PDO
        $stmt = $this->pdo->prepare($sql);

        //terceiro passo, passo os dados para o metodo binValue do pdo

        $stmt->bindValue(':f', $pj);
        $stmt->bindValue(':g', $cnpj);
        $stmt->bindValue(':h', $tel);
        $stmt->bindValue(':i', $ende);
        $stmt->bindValue(':l', $categoria);
        $stmt->bindValue(':j', $email2);
        $stmt->bindValue(':m', $senha2);
        



        //quarto passo, executo a query
        return $stmt->execute();
    }

    public function getAll(){
        $sql = "SELECT * FROM prestadores";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

}