<?php
declare(strict_types=1);

namespace CarouselVideos\Controller\Admin;

use App\Controller\AppController;

/**
 * CarouselVideos Controller
 *
 * @property \App\Model\Table\CarouselVideosTable $CarouselVideos
 * @method \App\Model\Entity\CarouselVideo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarouselVideosController extends AppController
{
    /**
     * Initialize controller
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $carouselVideos = $this->paginate($this->CarouselVideos);

        $this->set(compact('carouselVideos'));
    }

    /**
     * View method
     *
     * @param string|null $id Carousel Video id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carouselVideo = $this->CarouselVideos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('carouselVideo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carouselVideo = $this->CarouselVideos->newEmptyEntity();
        if ($this->request->is('post')) {
            $carouselVideo = $this->CarouselVideos->patchEntity($carouselVideo, $this->request->getData());
            if ($this->CarouselVideos->save($carouselVideo)) {
                $this->Flash->success(__('The carousel video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carousel video could not be saved. Please, try again.'));
        }
        $this->set(compact('carouselVideo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carousel Video id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carouselVideo = $this->CarouselVideos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carouselVideo = $this->CarouselVideos->patchEntity($carouselVideo, $this->request->getData());
            if ($this->CarouselVideos->save($carouselVideo)) {
                $this->Flash->success(__('The carousel video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carousel video could not be saved. Please, try again.'));
        }
        $this->set(compact('carouselVideo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carousel Video id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carouselVideo = $this->CarouselVideos->get($id);
        if ($this->CarouselVideos->delete($carouselVideo)) {
            $this->Flash->success(__('The carousel video has been deleted.'));
        } else {
            $this->Flash->error(__('The carousel video could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
