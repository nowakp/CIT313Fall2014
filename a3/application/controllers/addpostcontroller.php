<?php
class AddPostController extends Controller{
	
	public $postObject;
	public function defaultTask()
	{
		$this->postObject = new Post();
		$this->set('task', 'add');
		
		$this->getCategory();
	}
	
	public function add()
	{
			$this->postObject = new Post();
			
			$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content']);
			
			$result = $this->postObject->addPost($data);
			
			$this->set('message', $result);

	}
	
	public function edit($pID)
	{
			$this->postObject = new Post();
			
			$post = $this->postObject->getPost($pID);
			
			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
			$this->set('date', $post['date']);
			$this->set('category', $post['categoryID']);
			$this->set('task', 'update');
			
			$this->getCategory();
	}
	
	public function getCategory()
	{
		$this->postObject = new Categorys();
		$categories = $this->postObject->getCategorys();
		$this->set('categorys',$categorys);
	}
	public function update()
	{
		$data = array('title'=>$_POST['title'],'content'=>$_POST['content'],'category'=>$_POST['category'],'pID'=>$_POST['pID'],'date'=>$_POST['date']);

		$this->postObject = new Post();
		
		$result = $this->postObject->updatePost($data);
		
		$outcome = $this->postObject->getAllPosts();
		
		$this->set('task', 'update');
		$this->set('posts',$outcome);
		$this->set('message', $result);
		
		$this->getCategory();
	}
	
}
?>
