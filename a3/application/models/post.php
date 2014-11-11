<?php
class Post extends Model{
	
	function getPost($pID){
		
		$sql =  'SELECT pID, title, content FROM posts WHERE pID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		public function getUserPosts($uID)
		{

        $sql = 'select * from posts where uID = ?';

        $results = $this->db->execute($sql, $uID);

        while ($row=$results->fetchrow()) 
		{
        	$posts[] = $row;
        }
        return $posts;
    }

    public function getCategoryPosts($cID)
	{
        $sql = 'select * from posts where categoryID = ?';

        $results = $this->db->execute($sql, $cID);

        while ($row=$results->fetchrow())
		{
        	$posts[] = $row;
        }

        return $posts;
    }

	public function getAllPosts($limit = 0){
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT pID, title, content FROM posts'.$numposts;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}
	
	public function addPost($data)
	{
		
		$sql='INSERT INTO posts (title,content) VALUES (?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'Post Added.';
		return $message;
		
	}
	public function updatePost($data) 	
	{

        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Post Updated.";
        return $message;
    }

	
}