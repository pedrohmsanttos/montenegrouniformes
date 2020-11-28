<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[] paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('blog');

        $this->loadModel('Categories');
        $this->loadModel('Tags');

        $this->paginate = ['limit' => 5, 'contain' => ['Categories', 'Users', 'Tags']];

        if(isset($this->request->query['categoria'])){
            $query = $this->Posts->find('all')->where(['category_id' => $this->request->query['categoria']]);
            // pr($query);die;
            $posts = $this->paginate($query);
           
        }else if(isset($this->request->query['tag'])){
            $query = $this->Posts->find('all');
            $query->innerJoinWith('Tags', function ($q) {
                return $q->where(['Tags.id' => $this->request->query['tag']]);
            });
            $posts = $this->paginate($query);
           
        } else{
            $posts = $this->paginate($this->Posts);
        }
        

        $categories = $this->Categories->find('list')->toArray();
        $tags = $this->Tags->find('list')->toArray();
        
        $title = "Posts";

        $this->set('title', $title);
        $this->set('categories', $categories);
        $this->set('tags', $tags);
        
        
        
       

        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Posts');
        pr($this->Posts);die;
        $post = $this->Posts->get($id, [
            'contain' => ['Categories', 'Tags']
        ]);
        pr($post);die;
        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }

    /**
     * Display method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function display($url = null)
    {
        $this->viewBuilder()->setLayout('blog');

        $this->loadModel('Categories');
        $this->loadModel('Tags');
        $post  = $this->Posts->find('all')
            ->where(['url' => $url])
            ->contain(['Categories', 'Tags', 'Users'])
            ->toArray()['0'];

        $categories = $this->Categories->find('list')->toArray();
        $tags = $this->Tags->find('list')->toArray();
    
        $title = $post['title'];
        $this->set('title', $title);
        $this->set('categories', $categories);
        $this->set('tags', $tags);
        
        $post['photo'] = $post['photo_dir'] . $post['photo']; 

        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }

}
