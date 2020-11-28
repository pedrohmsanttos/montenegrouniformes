<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 *
 * @method \App\Model\Entity\Contact[] paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contact = $this->Contacts->newEntity();
        $this->autoRender = false;
        $returnData = array();
        
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {

                $content = "";
                $nome = $this->request->data['name'];
                $email = $this->request->data['email'];
                $phone = $this->request->data['phone'];
                $company = $this->request->data['company'];
                $subject = $this->request->data['subject'];
                $message = $this->request->data['message'];

                $content .= "<h3>Alguém interagiu no site</h3>";
                $content .= "<ul>";
                $content .= "<li><strong>NOME:</strong> ".$nome."</li>";
                $content .= "<li><strong>EMAIL:</strong> ". $email ."</li>";
                $content .= "<li><strong>TELEFONE:</strong> ". $phone ."</li>";
                $content .= "<li><strong>EMPRESA:</strong> ". $company ."</li>";
                $content .= "<li><strong>MENSAGEM:</strong> ". $message ."</li>";
                $content .= "</ul>";

                // echo $content;die;
                $email = new Email('montenegrouniformes');
                $email->to('montenegrotransfer@hotmail.com')
                    ->bcc('contato@montenegrouniformes.com')
                    ->emailFormat('html')
                    ->subject('Contato do Site: ' . $subject)
                    ->send($content);

                $returnData['type'] = 'success';
            }
            else {
              $errors = $this->return_message_errors($contact->errors());

              $returnData['type']   = 'error';
              $returnData['errors'] = $errors;
            }
        }
        $this->response->type('json');
        $this->response->body(json_encode($returnData));
        return $this->response;
    }

}
