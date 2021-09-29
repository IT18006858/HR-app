<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dependents Controller
 *
 * @property \App\Model\Table\DependentsTable $Dependents
 * @method \App\Model\Entity\Dependent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DependentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees'],
        ];
        $dependents = $this->paginate($this->Dependents);

        $this->set(compact('dependents'));
    }

    /**
     * View method
     *
     * @param string|null $id Dependent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dependent = $this->Dependents->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('dependent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dependent = $this->Dependents->newEmptyEntity();
        if ($this->request->is('post')) {
            $dependent = $this->Dependents->patchEntity($dependent, $this->request->getData());
            if ($this->Dependents->save($dependent)) {
                $this->Flash->success(__('The dependent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dependent could not be saved. Please, try again.'));
        }
        $employees = $this->Dependents->Employees->find('list', ['limit' => 200]);
        $this->set(compact('dependent', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dependent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dependent = $this->Dependents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dependent = $this->Dependents->patchEntity($dependent, $this->request->getData());
            if ($this->Dependents->save($dependent)) {
                $this->Flash->success(__('The dependent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dependent could not be saved. Please, try again.'));
        }
        $employees = $this->Dependents->Employees->find('list', ['limit' => 200]);
        $this->set(compact('dependent', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dependent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dependent = $this->Dependents->get($id);
        if ($this->Dependents->delete($dependent)) {
            $this->Flash->success(__('The dependent has been deleted.'));
        } else {
            $this->Flash->error(__('The dependent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
