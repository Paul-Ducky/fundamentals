<?php
declare(strict_types=1);

class ArticleLoader
{
    private PDO $conn;
    private array $articles = [];

    public function __construct()
    {
        $DB = new Db();
        $this->conn = $DB->connect();
    }
    public function getAll(): ?array
    {
        {
            $stmt = $this->conn->prepare("SELECT id, title, slug, content from article");
            $stmt->execute();
            $results = $stmt->fetchAll();
            foreach($results as $result) {
                $article = new Article((int)$result['id'],$result['title'],$result['slug'], $result['content']);
                $this->articles[] = $article;
            }
            return $this->articles;
        }
    }
    public function getDetailed($slug): Article
    {
        $stmt = $this->conn->prepare("SELECT id,title, content from article where slug = :slug");
        $stmt->bindValue(":slug", $slug);
        $stmt->execute();
        $results = $stmt->fetch();
        if($results === false){
            throw new error("404 Not Found");
        }
        return new Article((int)$results['id'],$results['title'],$slug,$results['content']);
    }
}